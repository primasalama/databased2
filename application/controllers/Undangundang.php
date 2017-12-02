<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Undangundang extends CI_Controller {

	/**
	 * Session buat login nanti aja dipakenya.
	 */
	function __construct() {
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		$this->load->model('Perundangan_m');
		$this->load->model('Perundangan_m');
    }
	public function index($value='')
	{
		$this->load->view('header');
		if ($value != '') {
			$result['data'] = $this->Perundangan_m->getidperundangan($value);
		}else {
			$result['data'] = $this->Perundangan_m->getallperundangan();
		}
		// print_r($result);die();
		$result['perundangan'] = $this->Perundangan_m->getall();
		$this->load->view('uud.php',$result);
		$this->load->view('footer');
	}

	public function view_add()
	{
		$result['perundangan'] = $this->Perundangan_m->getall();
		$this->load->view('header');
		$this->load->view('addUud',$result);
		$this->load->view('footer');
	}
	public function insert($value='')
	{
		 // setting konfigurasi upload
        $config['upload_path'] = 'assets/upload/uu';
        $config['allowed_types'] = 'pdf|doc|docx';
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('fileUud')) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('info',$error);
            redirect('Undangundang/addUud');
        } else {
            $result = $this->upload->data();
        }
		$data = array(
			'nomor' =>$this->input->post('nomor'),
			'tentang'=> $this->input->post('tentang'),
			'idPerundangan' => $this->input->post('idPerundangan'),
			'fileUud' => $result['orig_name']
		);
		$this->Perundangan_m->insert($data);
		redirect('Undangundang','refresh');
	}
}
