<?php
class Pegawai_m extends CI_model {
	public function getall($value='')
	{
		// $this->db->where($value);
		return $this->db->get('pegawai');
	}
	public function getid($value='')
	{
		$this->db->where('idPegawai',$value);
		return $this->db->get('pegawai');
	}
	public function insert($value='')
	{
		$this->db->insert('pegawai', $value);
	}
	public function delete($value='')
	{
		$this->db->where('idPegawai',$value);
		$this->db->delete('pegawai');
		// $this->db->de('pegawai');
	}
	public function update($id,$value='')
	{
		$this->db->where('idPegawai',$id);
		return $this->db->update('pegawai',$value);
	}
}