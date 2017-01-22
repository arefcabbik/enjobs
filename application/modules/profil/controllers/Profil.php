<?php
	
	/**
	* 
	*/
	class Profil extends MX_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('M_profil');
			$this->load->model('M_lowongan');
			$this->load->model('M_lamaran');
			$this->load->library('form_validation');
		}

		function index()
		{
			if($this->session->userdata('id_user')== false){
				redirect('Home', 'refresh');
			}else{
				$id_user= $this->session->userdata('id_user');
				$data['profil']= $this->M_profil->tampil_profil($id_user);

				$provinsi= array();

				foreach($this->M_profil->tampil_provinsi()->result() as $data_provinsi):
					$provinsi[$data_provinsi->id] = $data_provinsi->nama;
				endforeach;

				$data['provinsi']= $provinsi;
				$data['lowongan']= $this->M_lowongan->tampil_lowongan_by_id_user($id_user);
				$data['lamaran']= $this->M_lamaran->tampil_lamaran_by_id($id_user);

				$this->template->load('Template/template', 'profil', $data);
			}
		}


		//DAFTAR SEBAGAI ANGGOTA BARU
		function daftar_akun()
		{
			$this->form_validation->set_rules('username', 'fieldlabel', 'trim|required|min_length[1]|max_length[1000]');
			$this->form_validation->set_rules('password', 'fieldlabel', 'trim|required|min_length[6]|max_length[1000]');

			if($this->form_validation->run()==FALSE){
				$this->session->set_flashdata('pesan1', 'Password minimal 6 karakter !!');
				echo " <script>
	          				 history.go(-1);
	         				</script>";
			}elseif($this->input->post('username') == 'admin'){
				$this->session->set_flashdata('pesan1', 'Data tidak valid !!');
				echo " <script>
	          				 history.go(-1);
	         				</script>";
			}else{
				$in= array();

				$maxid= $this->M_profil->id_user();
				$id= $maxid->row();
				$noUrut= (int) substr($id->id_user, 7,4);
				$noUrut++;
				$kodeUrut= "00000-".sprintf("%04s", $noUrut);

				$in['id_user']= $kodeUrut;
				$in['nama_user']=  $this->input->post('nama_user');
				$in['username']= $this->input->post('username');
				$in['email']= $this->input->post('email');
				$in['password']= md5($this->input->post('password'));
				$in['tgl_daftar']= date('Y-m-d');
				$in['level']= '1';

				$res= $this->M_profil->daftar_akun($in);
				if($res){
					$this->session->set_flashdata('pesan1', 'Berhasil Mendaftar, Silahkan Login');
					redirect('Login');
				}else{
					$this->session->set_flashdata('pesan1', 'Data tidak valid !!');
					redirect('Login');
 
				}
			}
		}

		//LIHAT PROFL SELAIN SESSION YANG SEDANG LOGIN
		function lihat($id_user)
		{

			//$data['profil']= $this->M_profil->tampil_profil($id_user);
			$data['profil']= $this->M_profil->detail_user_dahboard($id_user);
			$data['lowongan']= $this->M_lowongan->tampil_lowongan_by_id_user($id_user);
			$data['lamaran']= $this->M_lamaran->tampil_lamaran_by_id($id_user);
			$this->template->load('Template/template', 'profil_user', $data);
			//$this->template->load('Template/template', 'lihat', $data);

		}

		function add_ajax_kabupaten($id_prov)
		{
			$query= $this->db->get_where('tbl_kabupaten', array('provinsi_id' => $id_prov));
			//$data = "<option value=''>- Pilih Kabupaten -</option>";

			$kabupaten= array();
			/*foreach($query->result() as $kab):
				//$data .= "<option value='".$row->id."'>".$row->nama."</option>";
				$kabupaten[$kab->id] = $kab->nama;
				echo form_dropdown('kabupaten', $kabupaten, $row->kabupaten, array('class' => 'form-control', 'id' => 'provinsi')); 

			endforeach;
			echo $kabupaten;*/
			foreach($query->result() as $row):
				$data .="<option value='".$row->id."'>".$row->nama."</option>";
			endforeach;
			echo $data;
			
		}

		function add_ajax_kecamatan($id_kab)
		{
			$query= $this->db->get_where('tbl_kecamatan', array('kabupaten_id' => $id_kab));
			$data = "<option value=''>- Pilih Kecamatan -</option>";

			foreach($query->result() as $row):
				$data .= "<option value='".$row->id."'>".$row->nama."</option>";
			endforeach;
			echo $data;
		}

		function add_ajax_desa($id_kec)
		{
			$query= $this->db->get_where('tbl_desa', array('kecamatan_id' => $id_kec));
			$data =  "<option value=''>- Pilih Desa -</option>";

			foreach($query->result() as $row):
				$data .="<option value='".$row->id."'>".$row->nama."</option>";
			endforeach;
			echo $data;
		}

		function upload_foto()
		{
			
			$this->load->library('upload');
	        $nmfile = $this->input->post('filefoto'); //nama file saya beri nama langsung dan diikuti fungsi time
	        
	        $config['upload_path'] = './assets/img/'; //path folder
	        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	        $config['max_size'] = '3072'; //maksimum besar file 3M
	        $config['max_width']  = '5000'; //lebar maksimum 5000 px
	        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
	        $config['file_name'] = $nmfile; //nama yang terupload nantinya
			
	        $this->upload->initialize($config);

	       
	        
	        if($_FILES['filefoto']['name'])
	        {
	            if ( $this->upload->do_upload('filefoto'))
	            {
	                $gbr = $this->upload->data();
	                $data = array(
	                  'foto_profil' => $gbr['file_name'],	                  
	                );
	                $id_user= $this->input->post('id_user');
	                $this->M_profil->proses_upload($id_user, $data); //akses model untuk menyimpan ke database
	                
	                $config2['image_library'] = 'gd2'; 
	                $config2['source_image'] = $this->upload->upload_path.$this->upload->file_name;
	                $config2['new_image'] = './assets/img/upload/'; // folder tempat menyimpan hasil resize
	                $config2['maintain_ratio'] = TRUE;
	                $config2['width'] = 200; //lebar setelah resize menjadi 100 px
	                $config2['height'] = 200; //lebar setelah resize menjadi 100 px
	                $this->load->library('image_lib',$config2); 
					
	                //pesan yang muncul jika resize error dimasukkan pada session flashdata
	                if ( !$this->image_lib->resize()){
	                $this->session->set_flashdata('errors', $this->image_lib->display_errors('', ''));   
	                }
	                //pesan yang muncul jika berhasil diupload pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-info\" id=\"alert\">Upload gambar berhasil !!</div></div>");
	                redirect('Profil'); //jika berhasil maka akan ditampilkan view upload
					
	            }else{
	                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
	                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Gagal upload gambar !!</div></div>");
	                redirect('Profil'); //jika gagal maka akan ditampilkan form upload
	            }
	        }

	        /*
				$this->load->library('upload', $config);
				$id_user= $this->input->post('id_user');
			
			 //nama file diberi langsungkemudian langsung diikuti fungsi time
			

				$config['upload_path']= './assets/img/'; //path folder
				$config['allowed_types']= 'gif|jpg|png|jpeg|bmp'; //tyoe file yang dapat diakses bisa disesuaikan
				$config['max_size']= '3072'; //maksimum besar fle 3M
				$config['max_width']= '5000'; //lebar maksimum 5000px
				$config['max_height']= '5000'; //tinggi maksimum 5000px
				
				$this->upload->initialize($config);

			if($_FILES['filefoto']['name']){

				$upload_image= $this->upload->data();
				$data['foto_profil']= $upload_image['filefoto'];

				$this->M_profil->proses_upload($id_user, $data);
				redirect('Profil');
			}*/

		}

		function update_profil()
		{
			$id_user= $this->session->userdata('id_user');
			
			if($this->input->post('provinsi') == '00'){
				$prov= '';
			}else{
				$prov= $this->input->post('provinsi');
			}
			$in= array();

			$in['username']= 	 $this->input->post('username');
			$in['nama_user']= 	 $this->input->post('nama_user');
			$in['tgl_lahir']= 	 $this->input->post('tgl_lahir');
			$in['tentang_saya']= $this->input->post('tentang_saya');
			$in['email']= 		 $this->input->post('email');
			$in['website']= 	 $this->input->post('website');
			$in['telepon']= 	 $this->input->post('telepon');
			$in['provinsi']= 	 $prov;
			$in['kabupaten']= 	 $this->input->post('kabupaten');
			$in['kecamatan']= 	 $this->input->post('kecamatan');
			$in['desa']= 	 	 $this->input->post('desa');

			$res= $this->M_profil->update_profil($id_user,$in);

			redirect('Profil','refresh');

		}
	}
?>