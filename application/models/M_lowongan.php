<?php
	
	/**
	* 
	*/
	class M_lowongan extends CI_Model
	{

		function new_lowongan($limit)
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting, a.id_user as id_user_a, a.id_pekerjaan as id_pekerjaan_a,
									a.spesifikasi_pekerjaan as spesifikasi_pekerjaan, a.tgl_posting as tgl_posting,
										b.id_user as id_user_b,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_perusahaan a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan = c.id_pekerjaan
									  order by id_posting desc limit $limit");
			return $query;
		}
		
		function tampil_lowongan($offset, $limit)
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting, a.id_user as id_user_a, 
									a.spesifikasi_pekerjaan as spesifikasi_pekerjaan,
										b.id_user as id_user_b,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_perusahaan a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan = c.id_pekerjaan
									  order by id_posting desc limit $offset, $limit");
			return $query;
		}

		function tampil_lowongan_all_count()
		{
			$this->db->select('*');
			$this->db->from('tbl_posting_perusahaan');

			$data= $this->db->get();
			return $data->num_rows();
		}

		/*function tampil_lowongan_by_id($id_posting)
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting_a, a.id_user as id_user,
										a.pendidikan as pendidikan, a.jurusan as jurusan, a.tanggal_awal as tanggal_awal,
										a.tanggal_akhir as tanggal_akhir, a.tgl_posting as tgl_posting,
										a.spesifikasi_pekerjaan as spesifikasi_pekerjaan, a.Jurusan as jurusan_a,
									    b.nama_user as nama_user, b.foto_profil as foto_profil,
									    c.nama_pekerjaan as nama_pekerjaan_c,
									    d.nama_pendidikan as nama_pendidikan_d,
									    e.nama_jurusan as nama_jurusan_e
									    from tbl_posting_perusahaan a, tbl_user b, tbl_pekerjaan c, tbl_pendidikan d, tbl_jurusan e
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan = c.id_pekerjaan
									 	and a.pendidikan = d.id_pendidikan
									 	and a.jurusan= e.kode_jurusan
									 	and a.id_posting= '$id_posting'
									  ");
			return $query;
		}*/

		//TAMPIL LOWONGAN BY NAMA PEKERJAAN

		function tampil_lowongan_by_kategori($id_pekerjaan)
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting_a, a.id_user as id_user_a, 
									a.spesifikasi_pekerjaan as spesifikasi_pekerjaan,
									
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_perusahaan a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan = c.id_pekerjaan
									 	and a.id_pekerjaan = '$id_pekerjaan'
									  order by id_posting desc");
			return $query;
		}

		//TAMPIL LOWONGAN BY KOTA

		function tampil_lowongan_by_kota()
		{
			$query= $this->db->query("SELECT a.id_posting as id_posting, a.id_user as id_user_a, 
									a.spesifikasi_pekerjaan as spesifikasi_pekerjaan,
										b.id_user as id_user_b,
									  b.nama_user as nama_user_b, b.foto_profil as foto_profil,
									  c.nama_pekerjaan as nama_pekerjaan_c
									  from tbl_posting_perusahaan a, tbl_user b, tbl_pekerjaan c
									 	where a.id_user= b.id_user
									 	and a.id_pekerjaan = c.id_pekerjaan
									 	and a.id_pekerjaan = '$id_pekerjaan'
									  order by id_posting desc");
			return $query;
		}

		function tampil_pendidikan()
		{
			$this->db->select('*');
			$this->db->from('tbl_pendidikan');

			$query= $this->db->get();
			return $query;
		}

		function tampil_pekerjaan()
		{
			$this->db->select('*');
			$this->db->from('tbl_pekerjaan');
			$this->db->order_by('id_pekerjaan', 'asc');

			$query= $this->db->get();
			return $query;
		}

		function id_posting()
		{
			$query= $this->db->query("SELECT max(id_posting) as id_posting from tbl_posting_perusahaan where id_posting like '%00000%'");
			return $query;
		}

		function simpan_lowongan($in)
		{
			$this->db->insert('tbl_posting_perusahaan', $in);
		}

		function hapus_lowongan($id_posting)
		{
			$this->db->where('id_posting', $id_posting);
			$this->db->delete('tbl_posting_perusahaan');
		}

		//===========================================================//
					//DASHBOARD
		//===========================================================//

		//BUAT DATA LOWONGAN DASHBOARD ADMIN
		function tampil_lowongan_all()
		{
			
			$this->db->select('tbl_kabupaten.nama as nama_kabupaten');
			$this->db->select('tbl_provinsi.nama as nama_provinsi');
			$this->db->select('tbl_posting_perusahaan.id_posting as id_posting');
			$this->db->select('tbl_posting_perusahaan.tgl_posting as tgl_posting');
			$this->db->select('tbl_posting_perusahaan.id_pekerjaan as id_pekerjaan');
			$this->db->select('tbl_user.id_user as id_user_b');
			$this->db->select('tbl_user.nama_user as nama_user');
			$this->db->select('tbl_pekerjaan.nama_pekerjaan as nama_pekerjaan');
			$this->db->from('tbl_posting_perusahaan');
			$this->db->join('tbl_user', 'tbl_posting_perusahaan.id_user = tbl_user.id_user', 'left');
			$this->db->join('tbl_pekerjaan', 'tbl_posting_perusahaan.id_pekerjaan = tbl_pekerjaan.id_pekerjaan', 'left');
			$this->db->join('tbl_provinsi', 'tbl_user.provinsi = tbl_provinsi.id', 'left');
			$this->db->join('tbl_kabupaten', 'tbl_kabupaten.kabupaten = tbl_kabupaten.id', 'left');
			$this->db->order_by('id_posting', 'desc');

			$query= $this->db->get();
			return $query;
		}

		function tampil_lowongan_by_id_user($id_user)
		{
			$this->db->select('*');
			$this->db->select('tbl_posting_perusahaan.id_posting as id_posting');
			$this->db->select('tbl_posting_perusahaan.tgl_posting as tgl_posting');
			$this->db->select('tbl_posting_perusahaan.id_pekerjaan as id_pekerjaan');
			$this->db->select('tbl_user.id_user as id_user_b');
			$this->db->select('tbl_user.nama_user as nama_user_b');
			$this->db->select('tbl_pekerjaan.nama_pekerjaan as nama_pekerjaan');
			$this->db->from('tbl_posting_perusahaan');
			$this->db->join('tbl_user', 'tbl_posting_perusahaan.id_user = tbl_user.id_user', 'left');
			$this->db->join('tbl_pekerjaan', 'tbl_posting_perusahaan.id_pekerjaan = tbl_pekerjaan.id_pekerjaan', 'left');
			$this->db->order_by('id_posting', 'desc');
			$this->db->where('tbl_posting_perusahaan.id_user', $id_user);

			$query= $this->db->get();
			return $query;
		}

		function tampil_lowongan_by_id_posting($id_posting)
		{
			$this->db->select('*');
			$this->db->select('tbl_posting_perusahaan.id_posting as id_posting_a');
			$this->db->select('tbl_posting_perusahaan.tgl_posting as tgl_posting');
			$this->db->select('tbl_posting_perusahaan.id_pekerjaan as id_pekerjaan');
			$this->db->select('tbl_user.id_user as id_user_b');
			$this->db->select('tbl_user.nama_user as nama_user_b');
			$this->db->select('tbl_pekerjaan.nama_pekerjaan as nama_pekerjaan');
			$this->db->from('tbl_posting_perusahaan');
			$this->db->join('tbl_user', 'tbl_posting_perusahaan.id_user = tbl_user.id_user', 'left');
			$this->db->join('tbl_pekerjaan', 'tbl_posting_perusahaan.id_pekerjaan = tbl_pekerjaan.id_pekerjaan', 'left');
			$this->db->join('tbl_pendidikan', 'tbl_posting_perusahaan.pendidikan = tbl_pendidikan.id_pendidikan', 'left');
			$this->db->join('tbl_jurusan', 'tbl_posting_perusahaan.jurusan = tbl_jurusan.kode_jurusan', 'left');
			$this->db->order_by('id_posting', 'asc');
			$this->db->where('tbl_posting_perusahaan.id_posting', $id_posting);

			$query= $this->db->get();
			return $query;
		}

	}
?>