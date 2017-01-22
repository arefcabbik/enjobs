<?php
	
	/**
	* 
	*/
	class M_profil extends CI_Model
	{
		//Hitung user
		function hitung_user()
		{
			$this->db->select('*');
			$this->db->from('tbl_user');

			$query= $this->db->get();
			return $query->num_rows();
		}

		//DAFTAR AKUN BARU
		function daftar_akun($in)
		{
			$this->db->insert('tbl_user', $in);
		}

		//MENAMPLKAN ID_USER OTOMATIS UNTUK MENDAFTAR
		function id_user()
		{
			$query= $this->db->query("SELECT max(id_user) as id_user from tbl_user where id_user like '%00000%'");
			return $query;
		}


		//TAMPILKAN PROFIL BAGI SESSION YANG LOGIN
		function tampil_profil($id_user)
		{
			
			$this->db->select('*');
			$this->db->select('tbl_provinsi.nama as nama_provinsi');
			$this->db->select('tbl_kabupaten.nama as nama_kabupaten');
			$this->db->select('tbl_kecamatan.nama as nama_kecamatan');
			$this->db->select('tbl_desa.nama as nama_desa');
			$this->db->from('tbl_user');
			$this->db->join('tbl_provinsi', 'tbl_user.provinsi = tbl_provinsi.id', 'left');
			$this->db->join('tbl_kabupaten', 'tbl_user.kabupaten = tbl_kabupaten.id', 'left');
			$this->db->join('tbl_kecamatan', 'tbl_user.kecamatan = tbl_kecamatan.id', 'left');
			$this->db->join('tbl_desa', 'tbl_user.desa = tbl_desa.id', 'left');
			$this->db->where('level', '1');
			$this->db->where('id_user', $id_user);

			$query= $this->db->get();
			return $query;

			/*
			$query=$this->db->query("SELECT a.id_user as id_user, a.username as username, a.password as password,
									 a.nama_user as nama_user, a.tgl_lahir as tgl_lahir, a.
									email as email, a.provinsi as provinsi, a.kabupaten as kabupaten, a.kecamatan as kecamatan,
									 a.desa as desa, a.telepon as telepon, a.website as website, 
									a.foto_profil as foto_profil, a.tentang_saya as tentang_saya, a.tgl_daftar as tgl_daftar, a.level as level,
									b.id as id_b, b.nama as nama
									
									from tbl_user a, tbl_kabupaten b
									where a.kabupaten = b.id

									and a.id_user= '$id_user'");
			return $query;*/
		}	

		function tampil_provinsi()
		{
			$this->db->select('*');
			$this->db->from('tbl_provinsi');

			$query= $this->db->get();
			return $query;
		}

		function update_profil($id_user, $in)
		{
			$this->db->where('id_user', $id_user);
			$this->db->update('tbl_user', $in);
		}

		//--- UPLOAD GAMBAR --//

		function proses_upload($id_user, $data)
		{
			$this->db->where('id_user', $id_user);
			$this->db->update('tbl_user', $data);
		}




		//==============================================================================================//
									//DASHBOARD //
		//==============================================================================================//


		//TAMPILKAN USER DI DASHBOARD
		function tampil_user()
		{
			
			$this->db->select('*');
			$this->db->select('tbl_kabupaten.nama as nama');
			$this->db->select('tbl_kecamatan.nama as nama_kecamatan');
			$this->db->select('tbl_desa.nama as nama_desa');
			$this->db->from('tbl_user');
			$this->db->join('tbl_kabupaten', 'tbl_user.kabupaten = tbl_kabupaten.id', 'left');
			$this->db->join('tbl_kecamatan', 'tbl_user.kecamatan = tbl_kecamatan.id', 'left');
			$this->db->join('tbl_desa', 'tbl_user.desa = tbl_desa.id', 'left');
			$this->db->where('level', '1');

			$query= $this->db->get();
			return $query;

			/*
			$query=$this->db->query("SELECT a.id_user as id_user, a.username as username, a.password as password,
									 a.nama_user as nama_user, a.tgl_lahir as tgl_lahir, a.
									email as email, a.provinsi as provinsi, a.kabupaten as kabupaten, a.kecamatan as kecamatan,
									 a.desa as desa, a.telepon as telepon, a.website as website, 
									a.foto_profil as foto_profil, a.tentang_saya as tentang_saya, a.tgl_daftar as tgl_daftar, a.level as level,
									b.id as id_b, b.nama as nama
									
									from tbl_user a, tbl_kabupaten b
									where a.kabupaten = b.id

									and a.id_user= '$id_user'");
			return $query;*/
		}

		//TAMPILKAN DETAIL USER DI DASHBOARD
		function detail_user_dahboard($id_user)
		{
			$this->db->select('*');
			$this->db->select('tbl_provinsi.nama as nama_provinsi');
			$this->db->select('tbl_kabupaten.nama as nama_kabupaten');
			$this->db->select('tbl_kecamatan.nama as nama_kecamatan');
			$this->db->select('tbl_desa.nama as nama_desa');
			$this->db->from('tbl_user');
			$this->db->join('tbl_provinsi', 'tbl_user.provinsi = tbl_provinsi.id', 'left');
			$this->db->join('tbl_kabupaten', 'tbl_user.kabupaten = tbl_kabupaten.id', 'left');
			$this->db->join('tbl_kecamatan', 'tbl_user.kecamatan = tbl_kecamatan.id', 'left');
			$this->db->join('tbl_desa', 'tbl_user.desa = tbl_desa.id', 'left');
			$this->db->where('level', '1');
			$this->db->where('id_user', $id_user);

			$query= $this->db->get();
			return $query;
		}

		function hapus_data($id_user)
		{
			$this->db->where('id_user', $id_user);
			$this->db->delete('tbl_user');
		}
	}
?>