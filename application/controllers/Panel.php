<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Md_database');
		$this->load->library('form_validation');

		if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}elseif ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
	}

	public function index(){
		$data['judul'] = 'Dashboard';
		$this->vPanel('template/admin/dashboard', $data);
	}

	public function user()
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
			redirect('panel/user');
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
			redirect('panel/user');
		}
	}

	public function hapusUser($id)
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$this->Md_database->hapusDT($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('panel/user');
	}

	public function kelas()
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$data['judul'] = 'Kelas';
		$data['kelas'] = $this->Md_database->getKelas();
		$data['detail_kelas'] = $this->Md_database->detailDT();
		$this->vPanel('panel/dtKelas', $data);
	}

	public function addKelas()
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$data['judul'] = 'Tambah Kelas';
		$data['level'] = ['mudah', 'sedang', 'sulit'];

		$this->form_validation->set_rules('nama_kelas', 'Nama kelas', 'required');
		$this->form_validation->set_rules('poin', 'Poin kelas', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->vPanel('panel/addKelas', $data);
		}else{
			$this->Md_database->addKelas();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('panel/kelas');
		}
	}

	public function editKelas($id)
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$data['judul'] = 'Edit Kelas';
		$data['kelas'] = $this->Md_database->getKelasId($id);
		$data['level'] = ['mudah', 'sedang', 'sulit'];

		$this->form_validation->set_rules('nama_kelas', 'Nama kelas', 'required');
		$this->form_validation->set_rules('poin', 'Poin kelas', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


		if ($this->form_validation->run() == FALSE) {
			$this->vPanel('panel/editKelas', $data);
		}else{
			$this->Md_database->editDTKelas();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('panel/kelas');
		}
	}

	public function hapusKelas($id)
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$this->Md_database->hapusDTKelas($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('panel/kelas');
	}

	public function addMateri()
	{
		if ($this->session->userdata('level') != "admin") {
			redirect(base_url());
		}
		$data['judul'] = 'Tambah Materi';

		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('link', 'Link', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->vPanel('panel/addMateri', $data);
		}else{
			$this->Md_database->addMateri();
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('panel/kelas');
		}
	}
}