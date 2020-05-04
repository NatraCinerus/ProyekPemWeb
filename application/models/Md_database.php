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

	public function getUserId($id)
	{
		return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function getKelasId($id)
	{
		return $this->db->get_where('kelas', ['id_kelas' => $id])->row_array();
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
}