<?php
	
	/**
	* 
	*/
	class Komentar extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
		}

		function simpan_komentar()
		{
			$this->load->model('M_komentar');
			
			
			$this->form_validation->set_rules('komentar', 'fieldlabel', 'trim|required|min_length[0]|max_length[1000]');
			if($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan1', 'Komentar tidak boleh kosong !!');
				echo " <script>
	          				 history.go(-1);
	         				</script>";

			} else {

				if($this->input->post('oleh') == ""){
					$this->session->set_flashdata('pesan1', 'Anda Belum Login !!');
					echo " <script>
		          				 history.go(-1);
		         				</script>";	
				}else{

					$in=array();
					$in['id_posting']= $this->input->post('id_posting');
					$in['oleh']= $this->session->userdata('id_user');
					$in['tanggal']= date('Y-m-d');
					$in['komentar']= $this->input->post('komentar');
					

					$res= $this->M_komentar->simpan_komentar($in);

					echo " <script>
		          				 history.go(-1);
		         				</script>";	
		         }
         	}

		} 

		function simpan_komentar_lamaran()
		{
			$this->load->model('M_komentar');
			
			$this->form_validation->set_rules('komentar', 'fieldlabel', 'trim|required|min_length[0]|max_length[1000]');
			if($this->form_validation->run() == false) {
				$this->session->set_flashdata('pesan1', 'Komentar tidak boleh kosong !!');
				echo " <script>
	          				 history.go(-1);
	         				</script>";

			} else {

				if($this->input->post('oleh') == ''){
					$this->session->set_flashdata('pesan1', 'Anda Belum Login !!');
					echo " <script>
		          				 history.go(-1);
		         				</script>";	
				}else{

					$in=array();
					$in['id_posting']= $this->input->post('id_posting');
					$in['oleh']= $this->session->userdata('id_user');
					$in['tanggal']= date('Y-m-d');
					$in['komentar']= $this->input->post('komentar');

					$res= $this->M_komentar->simpan_komentar_lamaran($in);

					echo " <script>
		           				
		          				 history.go(-1);
		         				</script>";	
		        }
         	}

		} 
	
	}
?>