<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Guru_m');
	}

	public function index()
	{
		$guru = $this->Guru_m->get_join('guru', 'mapel')->result();
		$data = [
			'title' => 'Guru',
			'isi' => 'admin/guru/index',
			'guru' => $guru
		];
		$this->load->view('layout/back/wrapper', $data);
	}

	public function tambah()
	{
		$mapel = $this->Guru_m->get('mapel')->result();
		$data = [
			'title' => 'Tambah Data Guru',
			'isi' => 'admin/guru/tambah_guru',
			'mapel' => $mapel
		];

		$this->form_validation->set_rules('nip', 'Nip', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'required|trim');
		$this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required|trim');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if($foto != null) {
				$config['upload_path']          = './assets/back/img/guru/';
	            $config['allowed_types']        = 'jpg|png';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/guru');
	            }
	            else
	            {
	                $this->upload->data('file_name');
	            }
	        } else {
	        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Foto Guru Wajib Diupload.</div>');
	            redirect('admin/guru');
	        }

			$data = [
				'nip' => html_escape($this->input->post('nip', true)),
				'nama_guru' => html_escape(ucwords($this->input->post('nama', true))),
				'tmp_lahir' => html_escape($this->input->post('tmp_lahir', true)),
				'tgl_lahir' => html_escape($this->input->post('tgl_lahir', true)),
				'id_mapel' => html_escape($this->input->post('mapel', true)),
				'pendidikan' => html_escape($this->input->post('pendidikan', true)),
				'foto_guru' => $foto
			];

			$this->Guru_m->insert('guru', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Guru <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/guru');
		}
	}

	public function edit($id_guru)
	{
		$mapel = $this->Guru_m->get('mapel')->result();
		$guru = $this->Guru_m->get_where('guru', ['id_guru' => $id_guru])->row();
		$data = [
			'title' => 'Edit Data Guru',
			'isi' => 'admin/guru/edit_guru',
			'guru' => $guru,
			'mapel' => $mapel
		];

		$this->form_validation->set_rules('nip', 'Nip', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'required|trim');
		$this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('mapel', 'Mata Pelajaran', 'required|trim');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if($foto != null) {
				$config['upload_path']          = './assets/back/img/guru/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/guru');
	            }
	            else
	            {
	                $fotoGuruLama = $this->input->post('fotoGuruLama');
	            	$result = $this->db->get_where('guru', ['id_guru' => $id_guru])->row();
	            	$fotoGuru = $result->foto_guru;
	            	if($fotoGuruLama == $fotoGuru) {
	            		unlink(FCPATH . 'assets/back/img/guru/' . $fotoGuru);
	            	}
	                $fotoBaruGuru = $this->upload->data('file_name');
	                $this->db->set('foto_guru', $fotoBaruGuru);
	            }
	        }

			$data = [
				'nip' => html_escape($this->input->post('nip', true)),
				'nama_guru' => html_escape(ucwords($this->input->post('nama', true))),
				'tmp_lahir' => html_escape($this->input->post('tmp_lahir', true)),
				'tgl_lahir' => html_escape($this->input->post('tgl_lahir', true)),
				'id_mapel' => html_escape($this->input->post('mapel', true)),
				'pendidikan' => html_escape($this->input->post('pendidikan', true))
			];

			$this->Guru_m->update('guru', $data, ['id_guru' => $id_guru]);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Guru <strong>Berhasil Diedit</strong>.</div>');
			redirect('admin/guru');
		}
	}

	public function hapus($id_guru)
	{
		$result = $this->Guru_m->get_where('guru', ['id_guru' => $id_guru])->row;
		$fotoGuru = $result->foto_guru;
		unlink('assets/back/img/guru/' . $fotoGuru);
		$this->db->delete('guru', ['id_guru' => $id_guru]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Guru <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/guru');
	}

}
