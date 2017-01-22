<?php
	
	/**
	* 
	*/
	class Template extends MX_Controller
	{
		
		function __construct()
		{
			parent::__construct();		
		}

		function index()
		{
			$this->load->view('template');
		}
	}
?>