<?php
class User_m extends CI_model {
	public function login($value='')
	{
		// print_r($value);die();
		$this->db->where($value);
		return $this->db->get('user');
	}
	public function login1($value='')
	{
		// print_r($value);die();
		$this->db->where('username','arif');
		$this->db->where('password','prima');
		return $this->db->get('user');
	}
}