<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_m extends CI_Model {
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

	public function getAllBerita($table1, $table2, $limit, $start) 
	{
		$this->db->join("$table2", "$table2.id_user = $table1.id_user");
		return $this->db->get($table1, $limit, $start);
	}

	public function get_berita_detail($table1, $table2, $where)
	{
		$this->db->join("$table2", "$table2.id_user = $table1.id_user");
		$this->db->where($where);
		return $this->db->get($table1);
	}

	public function get_join_berita($table1, $table2) 
	{
		$this->db->join("$table2", "$table2.id_user = $table1.id_user");
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

	public function latestNews($table1, $table2)
	{
		$this->db->join("$table2", "$table2.id_user = $table1.id_user");
		$this->db->order_by("$table1.id_berita", 'desc');
		$this->db->limit(4);
		return $this->db->get($table1);
	}

}