<?php
class User_m extends CI_model {
	public function login($value='')
	{
		$this->db->where($value);
		return $this->db->get('user');
	}
}