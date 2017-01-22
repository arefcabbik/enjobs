<?php
	
	/**
	* 
	*/
	class Dashboard extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_lamaran');
			$this->load->model('M_lowongan');
			$this->load->model('M_profil');

			if($this->session->userdata('level') != '0'){
				redirect('Home');
			}
		}

		function index()
		{
			$data['anggota']= $this->M_profil->hitung_user();
			$data['lowongan']= $this->M_lowongan->tampil_lowongan_all_count();
			$data['lamaran']= $this->M_lamaran->tampil_lamaran_all_count();
			$this->template->load('Template/dashboard','index', $data);
		}
	}
?>