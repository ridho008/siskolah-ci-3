<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_m');
	}

	public function index()
	{
		$berita = $this->Berita_m->get('berita')->result();
		$data = [
			'title' => 'Berita',
			'isi' => 'admin/berita/index',
			'berita' => $berita
		];
		$this->load->view('layout/back/wrapper', $data);
	}

	public function tambah()
	{
		$data = [
			'title' => 'Tambah Data Berita',
			'isi' => 'admin/berita/tambah_berita'
		];

		$this->form_validation->set_rules('judul', 'Judul Berita', 'required|trim');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if($foto != null) {
				$config['upload_path']          = './assets/back/img/berita/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/berita');
	            }
	            else
	            {
	                $this->upload->data('file_name');
	            }
	        } else {
	        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Foto Berita Wajib Diupload.</div>');
	            redirect('admin/berita');
	        }

	        $slug = str_replace(' ', '-', strtolower($this->input->post('judul')));
			$data = [
				'judul_berita' => html_escape(ucwords($this->input->post('judul', true))),
				'isi_berita' => $this->input->post('isi', true),
				'foto_berita' => $foto,
				'slug' => $slug,
				'id_user' => $this->session->userdata('id_user')
			];

			$this->Berita_m->insert('berita', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berita <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/berita');
		}
	}

	public function edit($id_berita)
	{
		$berita = $this->Berita_m->get_where('berita', ['id_berita' => $id_berita])->row();
		$data = [
			'title' => 'Edit Data Berita',
			'isi' => 'admin/berita/edit_berita',
			'berita' => $berita
		];

		$this->form_validation->set_rules('judul', 'Judul Berita', 'required|trim');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if($foto != null) {
				$config['upload_path']          = './assets/back/img/berita/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/berita');
	            }
	            else
	            {
	                $fotoBeritaLama = $this->input->post('fotoBeritaLama');
	            	$result = $this->db->get_where('berita', ['id_berita' => $id_berita])->row();
	            	$fotoBerita = $result->foto_berita;
	            	if($fotoBeritaLama == $fotoBerita) {
	            		unlink(FCPATH . 'assets/back/img/guru/' . $fotoBerita);
	            	}
	                $fotoBeritaBaru = $this->upload->data('file_name');
	                $this->db->set('foto_berita', $fotoBeritaBaru);
	            }
	        }

			$data = [
				'judul_berita' => html_escape(ucwords($this->input->post('judul', true))),
				'isi_berita' => $this->input->post('isi', true),
				'id_user' => $this->session->userdata('id_user')
			];

			$this->Berita_m->update('berita', $data, ['id_berita' => $id_berita]);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berita <strong>Berhasil Diedit</strong>.</div>');
			redirect('admin/berita');
		}
	}

	public function hapus($id_berita)
	{
		$result = $this->Berita_m->get_where('berita', ['id_berita' => $id_berita])->row;
		$fotoberita = $result->foto_berita;
		unlink('assets/back/img/berita/' . $fotoberita);
		$this->db->delete('berita', ['id_berita' => $id_berita]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Berita <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/berita');
	}

}
