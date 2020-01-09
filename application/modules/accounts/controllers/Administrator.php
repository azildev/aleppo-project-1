<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends Backend_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library(array('form_validation','session'));
	
	}
	public function index()
	{
		$data['title'] = "Halaman Login 2";		
		$this->load->view('accounts/v_home',$data);
		
	}
}