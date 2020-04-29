<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("panel"));
		}
		$this->load->model('Md_database');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$data['judul'] = 'User';
		$data['user'] = $this->Md_database->getUser();
		$this->vPanel('panel/dtUser', $data);
	}

	public function addUser()
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$data['judul'] = 'Tambah User';
		$data['level'] = ['admin', 'user'];

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->vPanel('panel/addUser', $data);
		}else{
			$this->Md_database->tambahDT();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('user');
		}
	}

	public function editUser($id)
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$data['judul'] = 'Edit User';
		$data['user'] = $this->Md_database->getUserId($id);
		$data['level'] = ['admin', 'user'];

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->vPanel('panel/editUser', $data);
		}else{
			$this->Md_database->editDT();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('user');
		}
	}

	public function hapus($id)
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$this->Md_database->hapusDT($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('user');
	}
}
