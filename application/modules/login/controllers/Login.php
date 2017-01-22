<?php
	
	/**
	* 
	*/
	class Login extends MX_Controller
	{
		
		function __construct()
		{ 
			# code...
			parent::__construct();
			$this->load->model('M_login');
			$this->load->helper('form');
		}

		function index()
		{
			if($this->session->userdata('username')==false){
				$this->template->load('Template/template','login');
			}else{
				echo " <script>
          				 history.go(-1);
         				</script>";
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			echo " <script>
          				 history.go(-1);
         				</script>";
		}

		//Daftar akun

		function daftar()
		{
			$this->load->model('M_profil');
			if($this->session->userdata('username')== true){
				redirect('Home','refresh');
			}else{
				
				$this->template->load('Template/template', 'daftar');
			}
		}

		function proses_login()
		{
			$this->load->model('M_login');
			$valid_user= $this->M_login->check_user();

			if($valid_user == false){
				$this->session->set_flashdata('error', 'Username / Password tidak cocok');
				echo " <script>
          				 history.go(-1);
         				</script>";

			}else{
				//$this->session->set_userdata( 'isLogin', true );
				$this->session->set_userdata( 'id_user', $valid_user->id_user );
				$this->session->set_userdata( 'username', $valid_user->username );
				$this->session->set_userdata( 'email', $valid_user->email );
				$this->session->set_userdata( 'nama_user', $valid_user->nama_user );
				$this->session->set_userdata( 'level', $valid_user->level );

				if($valid_user->level == '0'){
					redirect('Dashboard','refresh');
				}else{

					echo " <script>
	          				 history.go(-1);
	         				</script>";
	         	}

			}
		}

		function proses_login_dashboard()
		{
			$this->load->model('M_login');
			$valid_user= $this->M_login->check_user();

			if($valid_user == false){
				$this->session->set_flashdata('error', 'Username / Password tidak cocok');
				echo " <script>
          				 history.go(-1);
         				</script>";

			}else{
				//$this->session->set_userdata( 'isLogin', true );
				$this->session->set_userdata( 'id_user', $valid_user->id_user );
				$this->session->set_userdata( 'username', $valid_user->username );
				$this->session->set_userdata( 'nama_user', $valid_user->nama_user );
				$this->session->set_userdata( 'level', $valid_user->level);

				if($valid_user->level == '0'){
					redirect('Dashboard','refresh');
				}else{
	         	
					redirect('Home', 'refresh');
				}

			}
		}
		
	}

?>