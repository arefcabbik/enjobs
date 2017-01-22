<?php
	

	/**
	* 
	*/
	class M_login extends CI_Model
	{
		
		function takeUser($email, $password)
		{
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->where('email', $email);
			$this->db->where('password', $password);

			$query= $this->db->get();
			return $query->num_rows();
		}

		function userData($email, $password)
		{
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->where('email', $email);
			$this->db->where('password', $password);

			$query= $this->db->get();
			return $query;
		}

		function ambilLevel($username, $password)
		{
			$data= $this->db->query("SELECT * from tbl_user where username= '$username' and password= '$password' ")->result_array();
			return $data[0]['level'];
		}

		function check_user()
		{
			$email= set_value('email');
			$password= md5(set_value('password'));
			$gry= $this->db->where('email', $email)
						   ->where('password', $password)	   
						   ->limit('1')
						   ->get('tbl_user');

			if($gry->num_rows() > 0){
				return $gry->row();
			}else{
				return array();
			}
		}


		




	}
?>