<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman_m extends CI_Model {
	public function get($table) 
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where) 
	{
		return $this->db->get_where($table, $where);
	}

	public function get_join($table1, $table2) 
	{
		$this->db->join("$table2", "$table2.id_mapel = $table1.id_mapel");
		return $this->db->get($table1);
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
}