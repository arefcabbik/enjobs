<?php
	
	/**
	* 
	*/
	class Lowongan extends MX_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('M_lowongan');	
			$this->load->model('M_kategori');
			$this->load->library('form_validation');
			$this->load->helper('form');
		}

		function index()
		{
				if($this->uri->segment(3)== ""){
					$offset=0;

				}else{
					$offset= $this->uri->segment(3);
				}

				$limit=	9;	
				$data['lowongan']= $this->M_lowongan->tampil_lowongan($offset, $limit);
				$data['count']= $this->M_lowongan->tampil_lowongan_all_count();
				$config= array();
				$config['base_url']= base_url(). 'Lowongan/index/';
				$config['per_page']= $limit;
				$config['uri_segment']= 3;
				$config['num_links']= 5;
				$config['first_tag_open']= 	'<li>';
				$config['first_links']=		'First';
				$config['fist_tag_close']=	'</li>';
				$config['prev_link']=		'Prev';
				$config['prev_tag_open']=	'<li>';
				$config['prev_tag_close']=	'</li>';
				$config['cur_tag_open']=	'<li class="active"><a href>';
				$config['cur_tag_close']=	'</a></li>';
				$config['next_link']=		'Next';
				$config['next_tag_open']=	'<li>';
				$config['next_tag_close']=	'</li>';
				$config['num_tag_open']=	'<li>';
				$config['num_tag_close']=	'</li>';
				$config['last_tag_open']=	'<li>';
				$config['last_link']=		'Last';
				$config['last_tag_close']=	'</li>';
				$config['total_rows']=	$data['count'];
				
				$this->pagination->initialize($config);
				$this->session->set_userdata('row', $this->uri->segment(3));
				$data['error']= "";
				
				$kategori= array();

				foreach($this->M_kategori->kategori()->result() as $data_kategori):
					$kategori[$data_kategori->id_pekerjaan] = strtoupper($data_kategori->nama_pekerjaan);
				endforeach;

				$data['kategori']= $kategori;

				$kota= array();
				foreach($this->M_kategori->tampil_kota()->result() as $data_kota):
					$kota[$data_kota->id] = strtoupper($data_kota->nama);
				endforeach;

				$data['kota']= $kota;

			$this->template->load( 'Template/template','lowongan', $data);
		}

		function detail_lowongan($id_posting)
		{
			$this->load->model('M_lowongan');
			$this->load->model('M_komentar');
			$limit= 4;
			$data['terbaru']=  $this->M_lowongan->new_lowongan($limit);
			$data['lowongan']= $this->M_lowongan->tampil_lowongan_by_id_posting($id_posting);
			$data['komentar']= $this->M_komentar->tampil_komentar($id_posting);
			$data['hitung_komentar']= $this->M_komentar->hitung_komentar($id_posting);

			$this->template->load('Template/template', 'detail_lowongan', $data);
		}

		function posting_lowongan()
		{
			if($this->session->userdata('username')== false){
				redirect('Lowongan','refresh');
			}else{
			//Nama Pekerjaan
				$pekerjaan= array();

				foreach($this->M_lowongan->tampil_pekerjaan()->result() as $data_pekerjaan):
					$pekerjaan[$data_pekerjaan->id_pekerjaan] = strtoupper($data_pekerjaan->nama_pekerjaan);
				endforeach;

				$data['pekerjaan']= $pekerjaan;

				//PENDIDIKAN
				$pendidikan= array();

				foreach($this->M_lowongan->tampil_pendidikan()->result() as $data_pendidikan):
					$pendidikan[$data_pendidikan->id_pendidikan]= strtoupper($data_pendidikan->nama_pendidikan);
				endforeach;

				$data['pendidikan']= $pendidikan;

				$this->template->load('Template/template', 'posting_lowongan', $data);
			}
		}

		function add_jurusan_ajax($id_pendidikan)
		{
			$query= $this->db->get_where('tbl_jurusan', array('id_pendidikan' => $id_pendidikan));

			$data= "<option value=''>- JURUSAN -</option>";

			foreach($query->result() as $row):
				$data .= "<option value='".$row->kode_jurusan."'>".strtoupper($row->nama_jurusan)."</option>";
			endforeach;

			echo $data;
		}

		function simpan_lowongan()
		{
			$this->form_validation->set_rules('spesifikasi_pekerjaan', 'spesifikasi_pekerjaan', 'trim|required|min_length[40]');

			if($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan1', 'Spesifikasi pekerjaan harus lebih 40 kata');
				redirect('Lowongan/posting_lowongan','refresh');

			} else {

				$in= array();

				$maxid= $this->M_lowongan->id_posting();
				$id= $maxid->row();
				$noUrut= (int) substr($id->id_posting, 7, 4);
				$noUrut++;
				$kodeUrut= "00000-".sprintf("%04s", $noUrut);


				$in['id_posting']= $kodeUrut;
				$in['id_user']= $this->session->userdata('id_user');
				$in['id_pekerjaan']= $this->input->post('id_pekerjaan');
				$in['pendidikan']= $this->input->post('pendidikan');
				$in['jurusan']= $this->input->post('jurusan');
				$in['tanggal_awal']= $this->input->post('tanggal_awal');
				$in['tanggal_akhir']= $this->input->post('tanggal_akhir');
				$in['spesifikasi_pekerjaan']= $this->input->post('spesifikasi_pekerjaan');
				$in['tgl_posting']= date('Y-m-d');

				if($in['id_pekerjaan'] == '00'){
					$this->session->set_flashdata('pesan2', 'Anda Harus Mengisi Nama Pekerjaan');
					redirect('Lowongan/posting_lowongan','refresh');
				}else{

					$res= $this->M_lowongan->simpan_lowongan($in);

					redirect('Lowongan','refresh');
				}
			}
		}

		function hapus_lowongan($id_posting)
		{
			$res= $this->M_lowongan->hapus_lowongan($id_posting);

			echo " <script> alert('Data Berhasil dihapus !!!');history.go(-1); </script>";

		}

		function tampil_lowongan_by_kategori()
		{

				
				$id_pekerjaan= $this->input->post('kategori');
				$data['lowongan']= $this->M_lowongan->tampil_lowongan_by_kategori($id_pekerjaan);
				

				$kategori= array();
				foreach($this->M_kategori->kategori()->result() as $data_kategori):
					$kategori[$data_kategori->id_pekerjaan] = strtoupper($data_kategori->nama_pekerjaan);
				endforeach;

				$data['kategori']= $kategori;

				$kota= array();
				foreach($this->M_kategori->tampil_kota()->result() as $data_kota):
					$kota[$data_kota->id] = strtoupper($data_kota->nama);
				endforeach;

				$data['kota']= $kota;

				  
			
			$this->template->load('Template/template', 'lowongan_kategori', $data);
		}
	}


?>