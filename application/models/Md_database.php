<?php

class Md_database extends CI_model
{
	
	public function getUser()
	{
		return $this->db->get('user')->result_array();
	}

	public function tambahDT()
	{
		$data = [
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password', true),
			'level' => $this->input->post('level')

		];

		$this->db->insert('user', $data);
	}

	public function hapusDT($id)
	{
		// $this->db->where('id_user',$id);
		$this->db->delete('user', ['id_user' => $id]);
	}

	public function getUserId($id)
	{
		return $this->db->get_where('user', ['id_user' => $id])->row_array();
	}

	public function EditDT()
	{
		$data = [
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password', true),
			'level' => $this->input->post('level')

		];

		$this->db->where('id_user', $this->input->post('id'));
		$this->db->update('user', $data);
	}

	public function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
}