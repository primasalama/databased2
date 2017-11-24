<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	// function __construct() {
	// 	parent::__construct();
	// 	date_default_timezone_set("Asia/Jakarta");
	// 	// $this->load->model('user_m');
	// 	// print_r($this->session->userdata('user'));die();
	// 	if (!$this->session->userdata('user')) {
	// 		redirect('Auth','refresh');
	// 	}
 //    }
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
}
