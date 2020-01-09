<?php
defined('BASEPATH') OR exit('Halaman ini Tidak Bisa Di Akses');

class Error extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));     
	}

    public function index(){

        $data['title'] = "404 | Sistem Manajemen Rapat";
        $data['id_user'] = $this->session->userdata('id_user');
        $this->load->view('errors/not',$data);
    }
}