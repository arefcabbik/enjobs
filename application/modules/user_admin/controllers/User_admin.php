<?php

	/**
	* 
	*/
	class User_admin extends MX_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('M_profil');
			$this->load->model('M_lowongan');
			$this->load->model('M_komentar');
			$this->load->model('M_lamaran');

			if($this->session->userdata('username') != 'admin'){
				redirect('Home');
			}
		}

		function index()
		{
			$data['user']= $this->M_profil->tampil_user();
			$this->template->load('Template/dashboard', 'data_user', $data);
		}

		function lihat_data($id_user)
		{
			$data['profil']= $this->M_profil->detail_user_dahboard($id_user);
			$data['lowongan']= $this->M_lowongan->tampil_lowongan_by_id_user($id_user);
			$data['lamaran']= $this->M_lamaran->tampil_lamaran_by_id($id_user);
			//$data['komentar']= $this->M_komentar->hitung_komentar();
			$this->template->load('Template/dashboard','detail_user', $data);
		}

		function hapus_data_user($id_user)
		{
			$res= $this->M_profil->hapus_data($id_user);

			echo " <script>alert('Data Berhasil dihapus !!!');history.go(-1);</script>";
			redirect('User_admin');
		}
	}
?>