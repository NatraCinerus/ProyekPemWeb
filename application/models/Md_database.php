<?php

class Md_database extends CI_model
{
	
	public function getUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function getKelas()
	{
		return $this->db->get('kelas')->result_array();
	}

	public function getKategori()
	{
		return $this->db->get('kategori')->result_array();
	}

	public function tambahDT()
	{
		$data = [
			'username' => $this->input->post('username', true),
			'password' => md5($this->input->post('password', true)),
			'level' => $this->input->post('level')

		];

		$this->db->insert('user', $data);
	}

	public function addKelas()
	{
		$data = [
			'nama_kelas' => $this->input->post('nama_kelas'),
			'waktu_terbit' => $this->input->post('date'),
			'deskripsi' => $this->input->post('deskripsi'),
			'poin' => $this->input->post('poin'),
			'level_kelas' => $this->input->post('level')
		];

		$this->db->insert('kelas', $data);
	}

	public function addKategori()
	{
		$data = [
			'nama_kategori' => $this->input->post('kategori')
		];

		$this->db->insert('kategori', $data);
	}

	public function detailDT()
	{
		$this->db->select('*');
		$this->db->from('kelas');
		$this->db->join('video', 'kelas.id_kelas = video.id_kelas', 'inner');
		return $this->db->get()->result_array();
	}

	public function hapusDT($id)
	{
		$this->db->delete('user', ['id_user' => $id]);
	}

	public function hapusDTKelas($id)
	{
		$this->db->delete('kelas', ['id_kelas' => $id]);
	}

	public function hapusDTKategori($id)
	{
		$this->db->delete('kategori', ['id_kategori' => $id]);
	}

	public function hapusDTMateri($id)
	{
		$this->db->delete('video', ['id_video' => $id]);
	}

	public function getUserId($id)
	{
		return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function getKelasId($id)
	{
		return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
	}

	public function getMateriId($id)
	{
		return $this->db->get_where('video', ['id_video' => $id])->row_array();
	}

	public function EditDT()
	{
		$data = [
			'username' => $this->input->post('username', true),
			'password' => md5($this->input->post('password', true)),
			'level' => $this->input->post('level')
		];

		$this->db->where('id_user', $this->input->post('id'));
		$this->db->update('user', $data);
	}

	public function EditDTKelas()
	{
		$data = [
			'nama_kelas' => $this->input->post('nama_kelas'),
			'waktu_terbit' => $this->input->post('date'),
			'deskripsi' => $this->input->post('deskripsi'),
			'poin' => $this->input->post('poin'),
			'level_kelas' => $this->input->post('level')
		];

		$this->db->where('id_kelas', $this->input->post('id'));
		$this->db->update('kelas', $data);
	}

	public function EditDTKategori()
	{
		$data = [
			'nama_kategori' => $this->input->post('kategori')
		];

		$this->db->where('id_kategori', $this->input->post('id_kategori'));
		$this->db->update('kategori', $data);
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function addMateri()
	{
		$data = [
			'id_kelas' => $this->input->post('id_kelas'),
			'judul_video' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi'),
			'link' => $this->input->post('link')
		];

		$this->db->insert('video', $data);
	}

	public function editMateri()
	{
		$data = [
			'judul_video' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi'),
			'link' => $this->input->post('link')
		];

		$this->db->where('id_video', $this->input->post('id_video'));
		$this->db->update('video', $data);
	}

	public function hitungKelas()
	{
		return $this->db->query("SELECT k.id_kelas, nama_kelas, waktu_terbit, k.deskripsi, poin, level_kelas, id_kategori, COUNT(v.id_kelas) AS jml_kelas FROM kelas k INNER JOIN video v ON k.id_kelas = v.id_kelas GROUP BY v.id_kelas")->result_array();
	}
}