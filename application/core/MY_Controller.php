<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	function views($content, $data = NULL){
        $data['headernya'] = $this->load->view('template/home/header', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
        $data['footernya'] = $this->load->view('template/home/footer', $data, TRUE);
        
        $this->load->view('template/index', $data);
    }

    function vPanel($content, $data = NULL)
    {
    	$data['headernya'] = $this->load->view('template/admin/header', $data, TRUE);
        $data['aside'] = $this->load->view('template/admin/aside', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
        $data['footernya'] = $this->load->view('template/admin/footer', $data, TRUE);
        
        $this->load->view('template/admin', $data);
    }
    function vKelas($content, $data = NULL)
    {
        $data['navbar'] = $this->load->view('template/kelas/navbar', $data, TRUE);
        $data['headernya'] = $this->load->view('template/kelas/header-kelas', $data, TRUE);
        $data['contentnya'] = $this->load->view($content, $data, TRUE);
        $data['footernya'] = $this->load->view('template/home/footer', $data, TRUE);
        
        $this->load->view('template/kelas', $data);
    }
}

