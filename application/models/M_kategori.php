<?php
	/**
	* 
	*/
	class M_kategori extends CI_Model
	{
		
		//TAMPIL KATEGORI
		function kategori()
		{
			$query= $this->db->query("SELECT * from tbl_pekerjaan order BY nama_pekerjaan asc ");

			return $query;
		}

		function tampil_kota()
		{
			$this->db->select('*');
			$this->db->from('tbl_kabupaten');

			$query= $this->db->get();
			return $query;
		}
	}
?>