<?php
class Pegawai_m extends CI_model {
	public function getall($value='')
	{
		// $this->db->where($value);
		return $this->db->get('pegawai');
	}
	public function insert($value='')
	{
		$this->db->insert('pegawai', $value);
	}
}