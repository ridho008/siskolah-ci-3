<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download_m extends CI_Model {
	public function get($table) 
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where) 
	{
		return $this->db->get_where($table, $where);
	}

	public function insert($table, $data) 
	{
		$this->db->insert($table, $data);
	}

	public function update($table, $data, $where) 
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function getAllDownload($limit, $start)
	{
		return $this->db->get('file', $limit, $start);
	}

}