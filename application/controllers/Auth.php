<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('User_m');
		
    }

	public function index()
	{
		// if ($this->session->userdata('user')) {
		// 	redirect('Welcome','refresh');
		// }
		$data = [];
		$this->load->view('login', $data, FALSE);
	}
	public function index1()
	{
		$data = $this->db->get('user')->result_array();
		// $data = [];
		print_r($data);die();
		$this->load->view('login', $data, FALSE);
	}
	public function login()
	{
		// echo $this->input->post('username');die();
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		 // print_r($data);die();
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', $this->input->post('password'));
		$data = $this->User_m->login($this->input->post('username'),$this->input->post('password'));
		// print_r($data);die();
		$user = array('username' => $this->input->post('username'),'password' => $this->input->post('password') );
		$this->session->set_userdata('user',$user);
		redirect('Welcome','refresh');

	}
	public function logout($value='')
	{
		$this->session->unset_userdata('user');
		redirect('Auth','refresh');
	}
}
