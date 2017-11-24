<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('user_m');
		if ($this->session->userdata('user')) {
			redirect('Welcome','refresh');
		}
    }

	public function index()
	{
		$data = [];
		$this->load->view('login', $data, FALSE);
	}
	public function login()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$user = $this->user_m->login($data)->result_array();
		// print_r($user);die();
		$this->session->set_userdata('user',$user);
		redirect('Welcome','refresh');

	}
	public function logout($value='')
	{
		$this->session->unset_userdata('user');
		redirect('Auth/index','refresh');
	}
}
