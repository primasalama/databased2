<?php
class Pegawai_m extends CI_model {
	public function index($value='')
	{
		$this->db->where($value);
		return $this->db->get('pegawai');
	}
}