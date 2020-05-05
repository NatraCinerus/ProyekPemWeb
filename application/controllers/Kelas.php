<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Md_database');
		$this->load->library('session');
	}

	public function index(){
		$data['kategori'] = $this->Md_database->getKategori();
		$data['kelas'] = $this->Md_database->hitungKelas();

		$this->vKelas('template/kelas/kategori', $data);
	}


}
