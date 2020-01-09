<?php
defined('BASEPATH') OR exit('Halaman ini Tidak Bisa Di Akses');

class Dashboard extends Backend_Controller{

	function __construct()
	{
		parent::__construct();
		 parent::BackendController();
		$this->load->helper(array('url'));     
	}

    public function index(){

    	echo "HALOOOO";
      	
    }

    public function tes(){

    	echo "HALOOOO";
      	
    }
}