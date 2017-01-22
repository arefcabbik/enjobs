<?php
	
	/**
	* 
	*/
	class M_komentar extends CI_Model
	{
		
		//Simpan Komentar lowongan
		function simpan_komentar($in)
		{
			$this->db->insert('tbl_komentar_lowongan', $in);
		}

		//Simpan Komentar Lamaran
		function simpan_komentar_lamaran($in)
		{
			$this->db->insert('tbl_komentar_lamaran', $in);
		}

		//Tampil komentar lowongan
		function tampil_komentar($id_posting)
		{
			$query= $this->db->query("SELECT a.nama_user as nama_user_a, a.foto_profil as foto_profil_a,
									b.id_posting as id_posting_b,
									c.id_posting as id_posting_c, c.id_komentar as id_komentar_c, 
									c.oleh as oleh_c, c.tanggal as tanggal_c, c.komentar as komentar_c
									from tbl_user a, tbl_posting_perusahaan b, tbl_komentar_lowongan c 
									where a.id_user = c.oleh
									and c.id_posting ='$id_posting'
									and b.id_posting = c.id_posting
									order by c.id_komentar asc");
			return $query;
		}

		//Tampil KOmentar Lamaran
		function tampil_komentar_lamaran($id_posting)
		{
			$query= $this->db->query("SELECT a.nama_user as nama_user_a, a.foto_profil as foto_profil_a,
									b.id_posting as id_posting_b,
									c.id_posting as id_posting_c, c.id_komentar as id_komentar_c, 
									c.oleh as oleh_c, c.tanggal as tanggal_c, c.komentar as komentar_c
									from tbl_user a, tbl_posting_pekerja b, tbl_komentar_lamaran c 
									where a.id_user = c.oleh
									and c.id_posting ='$id_posting'
									and b.id_posting = c.id_posting
									order by c.id_komentar asc");
			return $query;
		}

		//Hitung Komentar Lowongan
		function hitung_komentar($id_posting)
		{
			$query= $this->db->query("SELECT a.nama_user as nama_user_a, a.foto_profil as foto_profil_a,
									b.id_posting as id_posting_b,
									c.id_posting as id_posting_c, c.id_komentar as id_komentar_c, 
									c.oleh as oleh_c, c.tanggal as tanggal_c, c.komentar as komentar_c
									from tbl_user a, tbl_posting_perusahaan b, tbl_komentar_lowongan c 
									where a.id_user = c.oleh
									and c.id_posting ='$id_posting'
									and b.id_posting = c.id_posting
									order by c.id_komentar desc");
			return $query->num_rows();
		}

		//Hitung Komentar Lamaran
		function hitung_komentar_lamaran($id_posting)
		{
			$query= $this->db->query("SELECT a.nama_user as nama_user_a, a.foto_profil as foto_profil_a,
									b.id_posting as id_posting_b,
									c.id_posting as id_posting_c, c.id_komentar as id_komentar_c, 
									c.oleh as oleh_c, c.tanggal as tanggal_c, c.komentar as komentar_c
									from tbl_user a, tbl_posting_pekerja b, tbl_komentar_lamaran c 
									where a.id_user = c.oleh
									and c.id_posting ='$id_posting'
									and b.id_posting = c.id_posting
									order by c.id_komentar desc");
			return $query->num_rows();
		}
	}
?>