<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lakip extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('lakip.php');
		$this->load->view('footer');
	}
}
