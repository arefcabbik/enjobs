<?php
	
	/**
	* 
	*/
	class M_lamaran extends CI_Model
	{
 
		//=============================================================================//
							//WEB
		//==============================================================================//
		//Tampil lamaran baru
		function new_lamaran($limit)
		{
			//$query= $this->db->query("SELECT * from tbl_posting_pekerja");
			
			$query= $this->db->query("SELECT a.id_posting as id_posting, a.id_user as id_user_a, a.tgl_posting as tgl_posting,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_pekerja a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan= c.id_pekerjaan
									  order by id_posting desc limit $limit "); 
			return $query;
		} 
		
		//menampilkan lamaran di halaman lamaran
		function tampil_lamaran($offset, $limit)
		{
			//$query= $this->db->query("SELECT * from tbl_posting_pekerja");
			
			$query= $this->db->query("SELECT a.id_posting as id_posting, a.id_user as id_user,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_pekerja a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan= c.id_pekerjaan
									  order by id_posting desc limit $offset, $limit "); 
			return $query;
		} 

		//Menghitung jumlah lamaran
		function tampil_lamaran_all_count()
		{
			$this->db->select('*');
			$this->db->from('tbl_posting_pekerja');

			$data= $this->db->get();
			return $data->num_rows();
		}

		//Menampilkan detail lamaran
		function detail_lamaran($id_posting)
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting_a, a.id_user as id_user_a, a.spesifikasi as spesifikasi_pekerjaan,
									  a.pendidikan as pendidikan, a.jurusan as jurusan, a.tanggal_awal as tanggal_awal, a.tanggal_akhir as tanggal_akhir,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c,
									  d.nama_pendidikan as nama_pendidikan_d,
									   e.nama_jurusan as nama_jurusan_e
									  from tbl_posting_pekerja a, tbl_user b, tbl_pekerjaan c, tbl_pendidikan d, tbl_jurusan e
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan= c.id_pekerjaan
									 	and a.pendidikan = d.id_pendidikan
									 	and a.jurusan= e.kode_jurusan
									 	and a.id_posting= '$id_posting' "); 

			return $query;
		}

		function id_posting()
		{
			$query= $this->db->query("SELECT max(id_posting) as id_posting from tbl_posting_pekerja where id_posting like '%00000%'");
			return $query;
		}

		function simpan_lamaran($in)
		{
			$this->db->insert('tbl_posting_pekerja', $in);
		}

		function hapus_lowongan($id_posting)
		{
			$this->db->where('id_posting', $id_posting);
			$this->db->delete('tbl_posting_pekerja');
		}

		//TAMPIL LOWONGAN BY NAMA PEKERJAAN

		function tampil_lamaran_by_kategori($id_pekerjaan)
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting, a.id_user as id_user_a, 
									a.spesifikasi as spesifikasi,
										b.id_user as id_user_b,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_pekerja a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan = c.id_pekerjaan
									 	and a.id_pekerjaan = '$id_pekerjaan'
									  order by id_posting desc");
			return $query;
		}

		//TAMPIL LOWONGAN BY KOTA

		function tampil_lamaran_by_kota()
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting, a.id_user as id_user_a, 
									a.spesifikasi as spesifikasi,
										b.id_user as id_user_b,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_pekerja a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan = c.id_pekerjaan
									 	and a.id_pekerjaan = '$id_pekerjaan'
									  order by id_posting desc");
			return $query;
		}

		
		//=============================================================================//
							//DASHBOARD
		//==============================================================================//
		//Menampilkan data lamaran di dashboard
		function tampil_lamaran_all()
		{
			$this->db->select('tbl_posting_pekerja.id_posting as id_posting');
			$this->db->select('tbl_posting_pekerja.tgl_posting as tgl_posting');
			$this->db->select('tbl_posting_pekerja.id_pekerjaan as id_pekerjaan');
			$this->db->select('tbl_user.id_user as id_user_b');
			$this->db->select('tbl_user.nama_user as nama_user_b');
			$this->db->select('tbl_pekerjaan.nama_pekerjaan as nama_pekerjaan');
			$this->db->from('tbl_posting_pekerja');
			$this->db->join('tbl_user', 'tbl_posting_pekerja.id_user = tbl_user.id_user', 'left');
			$this->db->join('tbl_pekerjaan', 'tbl_posting_pekerja.id_pekerjaan = tbl_pekerjaan.id_pekerjaan', 'left');
			$this->db->order_by('id_posting', 'desc');
			
			$query= $this->db->get();
			return $query;
		}

		function tampil_lamaran_by_id($id_user)
		{
			$this->db->select('*');
			//$this->db->select('tbl_posting_pekerja.id_posting as id_posting');
			//$this->db->select('tbl_posting_pekerja.tgl_posting as tgl_posting');
			//$this->db->select('tbl_posting_pekerja.id_pekerjaan as id_pekerjaan');
			//$this->db->select('tbl_user.id_user as id_user_b');
			//$this->db->select('tbl_user.nama_user as nama_user_b');
			//$this->db->select('tbl_pekerjaan.nama_pekerjaan as nama_pekerjaan');
			$this->db->from('tbl_posting_pekerja');
			$this->db->join('tbl_user', 'tbl_posting_pekerja.id_user = tbl_user.id_user', 'left');
			$this->db->join('tbl_pekerjaan', 'tbl_posting_pekerja.id_pekerjaan = tbl_pekerjaan.id_pekerjaan', 'left');
			$this->db->order_by('id_posting', 'desc');
			$this->db->where('tbl_posting_pekerja.id_user', $id_user);
			
			$query= $this->db->get();
			return $query;
		}

		function tampil_lamaran_by_id_posting($id_posting)
		{
			$this->db->select('*');
			$this->db->select('tbl_posting_pekerja.id_posting as id_posting_a');
			//$this->db->select('tbl_posting_pekerja.tgl_posting as tgl_posting');
			//$this->db->select('tbl_posting_pekerja.id_pekerjaan as id_pekerjaan');
			$this->db->select('tbl_user.id_user as id_user_a');
			//$this->db->select('tbl_user.nama_user as nama_user_b');
			//$this->db->select('tbl_pekerjaan.nama_pekerjaan as nama_pekerjaan');
			$this->db->from('tbl_posting_pekerja');
			$this->db->join('tbl_user', 'tbl_posting_pekerja.id_user = tbl_user.id_user', 'left');
			$this->db->join('tbl_pekerjaan', 'tbl_posting_pekerja.id_pekerjaan = tbl_pekerjaan.id_pekerjaan', 'left');
			$this->db->join('tbl_pendidikan', 'tbl_posting_pekerja.pendidikan = tbl_pendidikan.id_pendidikan', 'left');
			$this->db->join('tbl_jurusan', 'tbl_posting_pekerja.jurusan = tbl_jurusan.kode_jurusan', 'left');
			$this->db->order_by('id_posting', 'asc');
			$this->db->where('tbl_posting_pekerja.id_posting', $id_posting);
			
			$query= $this->db->get();
			return $query;
		}
	}
?>