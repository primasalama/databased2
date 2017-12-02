<?php
class Perundangan_m extends CI_model {
	public function getall()
	{
		return $this->db->get('perundangan')->result();
	}



	public function getidperundangan($value='')
	{
		$this->db->where('idPerundangan',$value);
		return $this->db->get('kumpulanuud')->result();
	}
	public function getallperundangan()
	{
		return $this->db->get('kumpulanuud')->result();
	}


	public function getid($value='')
	{
		$this->db->where('idKumpulanUud',$value);
		return $this->db->get('kumpulanuud');
	}
	public function insert($value='')
	{
		$this->db->insert('kumpulanuud', $value);
	}
	public function delete($value='')
	{
		$this->db->where('idKumpulanUud',$value);
		$this->db->delete('kumpulanuud');
		// $this->db->de('pegawai');
	}
	public function update($id,$value='')
	{
		$this->db->where('idKumpulanUud',$id);
		return $this->db->update('kumpulanuud',$value);
	}
}