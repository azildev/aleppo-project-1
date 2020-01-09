<?php
defined('BASEPATH') OR exit('Halaman ini Tidak Bisa Di Akses');

class Home extends Backend_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));     
	}

    public function index(){

    	echo "HALOOOO IAYAYYAY";
      	
    }
}