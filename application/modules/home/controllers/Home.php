<?php
	

	/**
	* 
	*/
	class Home extends MX_Controller
	{
		
		function __construct()
		{
			# code...
			parent::__construct();
			$this->load->helper('form');
		}

		function index()
		{
			$this->load->model('M_lamaran');
			$this->load->model('M_lowongan');

			$limit= 4;
			$data['lamaran']= $this->M_lamaran->new_lamaran($limit);
			$data['lowongan']= $this->M_lowongan->new_lowongan($limit);
			
			$this->template->load('Template/template','index', $data);
		}

		

	}


?>