<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_m extends CI_Model {
	public function get($table) 
	{
		return $this->db->get($table);
	}

	public function get_where($table, $where) 
	{
		return $this->db->get_where($table, $where);
	}

	public function get_join() 
	{
		$this->db->select("galeri.*, count(foto.id_galeri) as jml_foto");
		$this->db->from('galeri');
		$this->db->join('foto', "foto.id_galeri = galeri.id_galeri", 'left');
		$this->db->group_by('galeri.id_galeri');
		$this->db->order_by('galeri.id_galeri', 'desc');
		return $this->db->get()->result();
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