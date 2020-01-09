<?php defined('BASEPATH') OR exit('Halaman ini Tidak Bisa di Akses');

/**
 * 
 */
class Login extends Backend_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'html'));
		$this->load->library(array('form_validation','session'));

	}

	public function index()
	{
		$data['title'] = "Halaman Login 1";	
		$data['beranda'] = "Beranda Halaman Login";
		$data['tes'] = "Mau Pakai APa Saja Ya";		
		$this->load->view('accounts/v_login',$data);
	}

	public function checkLogin()
	{

	}
}