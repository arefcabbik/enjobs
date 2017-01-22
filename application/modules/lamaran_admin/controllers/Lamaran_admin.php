<?php

	/**
	* 
	*/
	class Lamaran_admin extends MX_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('M_lamaran');
			$this->load->model('M_komentar');

			
			if($this->session->userdata('level') != '0'){
				redirect('Home');
			}
		}

		function index()
		{
			$data['lamaran']= $this->M_lamaran->tampil_lamaran_all();
			$this->template->load('Template/dashboard', 'data_lamaran',$data);
		}

		function lihat_lamaran_by_id($id_posting)
		{
			$data['lamaran']= $this->M_lamaran->tampil_lamaran_by_id_posting($id_posting);
			$data['komentar']= $this->M_komentar->tampil_komentar_lamaran($id_posting);
			$data['hitung_komentar']= $this->M_komentar->hitung_komentar_lamaran($id_posting);

			$this->template->load('Template/dashboard', 'detail_lamaran', $data);
		}
	}
?>