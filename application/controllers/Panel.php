<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
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
}
