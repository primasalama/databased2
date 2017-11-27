<?php
class User_m extends CI_model {
	public function login($username,$password)
	{
		// print_r($value);die();
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('user')->result();
	}
	public function login1($username,$password)
	{
		// print_r($value);die();
		$this->db->where('username','arif');
		$this->db->where('password','prima');
		return $this->db->get('user');
	}
}