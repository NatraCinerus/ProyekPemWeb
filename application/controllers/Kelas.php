<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$this->vKelas('template/kelas/kategori');
	}
}
