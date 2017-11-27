<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undangundang extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('uud.php');
		$this->load->view('footer');
	}

	public function view_add()
	{
		$this->load->view('header');
		$this->load->view('addUud');
		$this->load->view('footer');
	}
}
