<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {
	public function login($username, $password) 
	{
		$where = [
			'username' => $username,
			'password' => $password
		];
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($where);
		return $this->db->get()->row();
	}
}