<?php
	
	/**
	* 
	*/
	class M_wilayah extends CI_Model
	{
		
		function get_all_provinsi()
		{
			$this->db->select('*');
			$this->db->from('tbl_provinsi');

			$query= $this->db->get();
			return $query;
		}
	}
?>