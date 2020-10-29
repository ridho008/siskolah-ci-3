<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mapel_m');
	}

	public function index()
	{
		$mapel = $this->Mapel_m->get('mapel')->result();
		$data = [
			'title' => 'Mata Pelajaran',
			'isi' => 'admin/mapel/index',
			'mapel' => $mapel
		];

		$this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$data = [
				'nama_mapel' => html_escape(ucwords($this->input->post('mapel', true)))
			];
			$this->Mapel_m->insert('mapel', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Mata Pelajaran <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/mapel');
		}
	}

	public function edit($id_mapel)
	{
		$where = ['id_mapel' => $id_mapel];
		$data = [
			'nama_mapel' => html_escape(ucwords($this->input->post('mapel', true)))
		];
		$this->Mapel_m->update('mapel', $data, $where);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Mata Pelajaran <strong>Berhasil Diedit</strong>.</div>');
		redirect('admin/mapel');
	}

	public function hapus($id_mapel)
	{
		$this->db->delete('mapel', ['id_mapel' => $id_mapel]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Mata Pelajaran <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/mapel');
	}

}
