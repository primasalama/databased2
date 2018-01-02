<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Renstra extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
		function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Perundangan_m');
		// $this->load->model('Perundangan_m');
		if (!$this->session->userdata('user')) {
			redirect('Auth','refresh');
		}

    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('renstra.php');
		$this->load->view('footer');
	}
}
