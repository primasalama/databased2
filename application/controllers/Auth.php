<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	public function index()
	{
		// $this->load->view('header');
		// $this->load->view('home');
		// $this->load->view('footer');
		$data = [];
		$this->load->view('login', $data, FALSE);
	}
	public function login()
	{
		# code...
	}
}
