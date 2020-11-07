<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengumuman_m');
		$this->load->model('Pengaturan_m');
	}

	public function index()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$pengumuman = $this->Pengumuman_m->get('pengumuman')->result();
		$data = [
			'title' => 'Pengumuman',
			'isi' => 'admin/pengumuman/index',
			'pengumuman' => $pengumuman,
			'setting' => $setting
		];
		$this->load->view('layout/back/wrapper', $data);
	}

	public function tambah()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Tambah Data Pengumuman',
			'isi' => 'admin/pengumuman/tambah_pengumuman',
			'setting' => $setting
		];

		$this->form_validation->set_rules('judul', 'Judul Pengumuman', 'required|trim');
		$this->form_validation->set_rules('isi', 'Isi Pengumuman', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$data = [
				'judul_pengumuman' => html_escape(ucwords($this->input->post('judul', true))),
				'isi_pengumuman' => html_escape($this->input->post('isi', true)),
				'tgl_pengumuman' => date('Y-m-d')
			];

			$this->Pengumuman_m->insert('pengumuman', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Pengumuman <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/pengumuman');
		}
	}

	public function edit($id_pengumuman)
	{
		$pengumuman = $this->Pengumuman_m->get_where('pengumuman', ['id_pengu' => $id_pengumuman])->row();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Edit Data Pengumuman',
			'isi' => 'admin/pengumuman/edit_pengumuman',
			'pengumuman' => $pengumuman,
			'setting' => $setting
		];

		$this->form_validation->set_rules('judul', 'Judul Pengumuman', 'required|trim');
		$this->form_validation->set_rules('isi', 'Isi Pengumuman', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$data = [
				'judul_pengumuman' => html_escape(ucwords($this->input->post('judul', true))),
				'isi_pengumuman' => html_escape($this->input->post('isi', true)),
				'tgl_pengumuman' => date('Y-m-d')
			];

			$this->Pengumuman_m->update('pengumuman', $data, ['id_pengu' => $id_pengumuman]);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Pengumuman <strong>Berhasil Diedit</strong>.</div>');
			redirect('admin/pengumuman');
		}
	}

	public function hapus($id_pengumuman)
	{
		$this->db->delete('pengumuman', ['id_pengu' => $id_pengumuman]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Pengumuman <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/pengumuman');
	}

}
