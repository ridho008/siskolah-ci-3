<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Galeri_m');
		$this->load->model('Pengaturan_m');
	}

	public function index()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$galeri = $this->Galeri_m->get_join();
		$data = [
			'title' => 'Galeri',
			'isi' => 'admin/galeri/index',
			'galeri' => $galeri,
			'setting' => $setting
		];
		$this->load->view('layout/back/wrapper', $data);
	}

	public function tambah()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Tambah Data Galeri',
			'isi' => 'admin/galeri/tambah_galeri',
			'setting' => $setting
		];

		$this->form_validation->set_rules('nama', 'Nama Galeri', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$sampul = $_FILES['sampul']['name'];

			if($sampul != null) {
				$config['upload_path']          = './assets/back/img/galeri/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('sampul'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/galeri');
	            }
	            else
	            {
	                $this->upload->data('file_name');
	            }
	        } else {
	        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Foto Sampul Wajib Diupload.</div>');
	            redirect('admin/galeri');
	        }

			$data = [
				'nama_galeri' => html_escape(ucwords($this->input->post('nama', true))),
				'sampul' => $sampul,
			];

			$this->Galeri_m->insert('galeri', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Galeri <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/galeri');
		}
	}

	public function edit($id_galeri)
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$galeri = $this->Galeri_m->get_where('galeri', ['id_galeri' => $id_galeri])->row();
		$data = [
			'title' => 'Edit Data Galeri',
			'isi' => 'admin/galeri/edit_galeri',
			'galeri' => $galeri,
			'setting' => $setting
		];

		$this->form_validation->set_rules('nama', 'Nama Galeri', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$sampul = $_FILES['sampul']['name'];

			if($sampul != null) {
				$config['upload_path']          = './assets/back/img/galeri/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('sampul'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/galeri');
	            }
	            else
	            {
	                $sampulLama = $this->input->post('sampulLama');
	            	$result = $this->db->get_where('galeri', ['id_galeri' => $id_galeri])->row();
	            	$fotoSampul = $result->sampul;
	            	if($sampulLama == $fotoSampul) {
	            		unlink(FCPATH . 'assets/back/img/galeri/' . $fotoSampul);
	            	}
	                $fotoSampulBaru = $this->upload->data('file_name');
	                $this->db->set('sampul', $fotoSampulBaru);
	            }
	        }

			$data = [
				'nama_galeri' => html_escape(ucwords($this->input->post('nama', true)))
			];

			$this->Galeri_m->update('galeri', $data, ['id_galeri' => $id_galeri]);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Galeri <strong>Berhasil Diedit</strong>.</div>');
			redirect('admin/galeri');
		}
	}

	public function hapus($id_galeri)
	{
		$result = $this->Galeri_m->get_where('galeri', ['id_galeri' => $id_galeri])->row;
		$fotogaleri = $result->sampul;
		unlink('assets/back/img/galeri/' . $fotogaleri);
		$this->db->delete('galeri', ['id_galeri' => $id_galeri]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data galeri <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/galeri');
	}

	public function tambahFoto($id_galeri)
	{
		$galeri = $this->Galeri_m->get_where('galeri', ['id_galeri' => $id_galeri])->row();
		$foto = $this->Galeri_m->get_where('foto', ['id_galeri' => $id_galeri])->result();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Tambah Foto Galeri ' . $galeri->nama_galeri,
			'isi' => 'admin/galeri/tambah_foto_galeri',
			'galeri' => $galeri,
			'foto' => $foto,
			'setting' => $setting
		];

		$this->form_validation->set_rules('keterangan', 'Keterangan Foto', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if($foto != null) {
				$config['upload_path']          = './assets/back/img/foto_galeri/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/galeri');
	            }
	            else
	            {
	                $this->upload->data('file_name');
	            }
	        } else {
	        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Foto Sampul Wajib Diupload.</div>');
	            redirect('admin/galeri');
	        }

			$data = [
				'id_galeri' => $id_galeri,
				'ket_foto' => html_escape(ucwords($this->input->post('keterangan', true))),
				'foto' => $foto,
			];

			$this->Galeri_m->insert('foto', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Foto Galeri <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/galeri');
		}
	}

	public function hapusFoto($id_foto)
	{
		$result = $this->Galeri_m->get_where('foto', ['id_foto' => $id_foto])->row;
		$fotofoto = $result->foto;
		unlink('assets/back/img/foto_galeri/' . $fotofoto);
		$this->db->delete('foto', ['id_foto' => $id_foto]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Foto <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/galeri');
	}

}
