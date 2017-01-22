<?php

	/**
	* 
	*/
	class Lowongan_admin extends MX_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->model('M_lowongan');
			$this->load->model('M_komentar');

			
			if($this->session->userdata('level') != '0'){
				redirect('Home');
			}
		}

		function index()
		{
			$data['lowongan']= $this->M_lowongan->tampil_lowongan_all();
			$this->template->load('Template/dashboard', 'data_lowongan',$data);
		}

		function lihat_lowongan_by_id($id_posting)
		{
			$data['lowongan']= $this->M_lowongan->tampil_lowongan_by_id_posting($id_posting);
			$data['komentar']= $this->M_komentar->tampil_komentar($id_posting);
			$data['hitung_komentar']= $this->M_komentar->hitung_komentar($id_posting);
			$this->template->load('Template/dashboard', 'detail_lowongan', $data);
		}

		
	}
?>