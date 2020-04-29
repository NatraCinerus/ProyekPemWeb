<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Md_database');
		$this->load->library('session');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->views('template/home/index');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);

		$cek = $this->Md_database->cek_login("user",$where)->num_rows();
		$user = $this->Md_database->cek_login('user', $where)->row_array();

		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'level' => $user['level'],
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);

			if ($user['level'] == 'admin') {
				redirect('panel');
			}else{
				redirect(base_url());
			}
			
 
		}else{
			$this->session->set_flashdata('flash', 'salah');
			redirect(base_url());
		}
	}
 
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function daftar()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('flash', 'gagal');
			redirect(base_url());
		}else{
			$this->Md_database->tambahDT();
			$this->session->set_flashdata('flash', 'benar');
			redirect('user');
		}
	}
}
