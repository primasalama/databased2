<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('pegawai_m');
		// print_r($this->session->userdata('user'));//die();
		if (!$this->session->userdata('user')) {
			redirect('Auth','refresh');
		}
    }

	public function index()
	{
		$result['data'] = $this->pegawai_m->getall();
		$this->load->view('header');
		$this->load->view('pegawai',$result);
		$this->load->view('footer');
	}

	public function view_add()
	{
		$this->load->view('header');
		$this->load->view('addPegawai');
		$this->load->view('footer');
	}
	public function insert($value='')
	{
		 // setting konfigurasi upload
        $config['upload_path'] = 'assets/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('info',$error);
            redirect('Pegawai/view_add');
        } else {
            $result = $this->upload->data();
        }
		$data = array(
			'namaPegawai' =>$this->input->post('namaPegawai'),
			'unit'=> $this->input->post('unit'),
			'jabatan' => $this->input->post('jabatan'),
			'foto' => $result['orig_name']
		);
		$this->pegawai_m->insert($data);
		redirect('Pegawai','refresh');
	}
}
