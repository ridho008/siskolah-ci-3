<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Siswa_m');
	}

	public function index()
	{
		$siswa = $this->Siswa_m->get('siswa')->result();
		$data = [
			'title' => 'Siswa',
			'isi' => 'admin/siswa/index',
			'siswa' => $siswa
		];
		$this->load->view('layout/back/wrapper', $data);
	}

	public function tambah()
	{
		$data = [
			'title' => 'Tambah Data Siswa',
			'isi' => 'admin/siswa/tambah_siswa'
		];

		$this->form_validation->set_rules('nis', 'Nis', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'required|trim');
		$this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if($foto != null) {
				$config['upload_path']          = './assets/back/img/siswa/';
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
	                $this->upload->data('file_name');
	            }
	        } else {
	        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Foto Siswa Wajib Diupload.</div>');
	            redirect('admin/siswa');
	        }

			$data = [
				'nis' => html_escape($this->input->post('nis', true)),
				'nama_siswa' => html_escape(ucwords($this->input->post('nama', true))),
				'tmp_lahir' => html_escape($this->input->post('tmp_lahir', true)),
				'tgl_lahir' => html_escape($this->input->post('tgl_lahir', true)),
				'kelas' => html_escape($this->input->post('kelas', true)),
				'foto_siswa' => $foto
			];

			$this->Siswa_m->insert('siswa', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Siswa <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/siswa');
		}
	}

	public function edit($id_siswa)
	{
		$siswa = $this->Siswa_m->get_where('siswa', ['id_siswa' => $id_siswa])->row();
		$data = [
			'title' => 'Edit Data Guru',
			'isi' => 'admin/siswa/edit_siswa',
			'siswa' => $siswa
		];

		$this->form_validation->set_rules('nis', 'Nis', 'required|trim');
		$this->form_validation->set_rules('nama', 'Nama Guru', 'required|trim');
		$this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
		$this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto = $_FILES['foto']['name'];

			if($foto != null) {
				$config['upload_path']          = './assets/back/img/siswa/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/siswa');
	            }
	            else
	            {
	                $fotoSiswaLama = $this->input->post('fotoSiswaLama');
	            	$result = $this->db->get_where('siswa', ['id_siswa' => $id_siswa])->row();
	            	$fotoSiswa = $result->foto_siswa;
	            	if($fotoSiswaLama == $fotoSiswa) {
	            		unlink(FCPATH . 'assets/back/img/siswa/' . $fotoSiswa);
	            	}
	                $fotoBaruSiswa = $this->upload->data('file_name');
	                $this->db->set('foto_siswa', $fotoBaruSiswa);
	            }
	        }

			$data = [
				'nis' => html_escape($this->input->post('nis', true)),
				'nama_siswa' => html_escape(ucwords($this->input->post('nama', true))),
				'tmp_lahir' => html_escape($this->input->post('tmp_lahir', true)),
				'tgl_lahir' => html_escape($this->input->post('tgl_lahir', true)),
				'kelas' => html_escape($this->input->post('kelas', true)),
			];

			$this->Siswa_m->update('siswa', $data, ['id_siswa' => $id_siswa]);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Siswa <strong>Berhasil Diedit</strong>.</div>');
			redirect('admin/siswa');
		}
	}

	public function hapus($id_siswa)
	{
		$result = $this->Siswa_m->get_where('siswa', ['id_siswa' => $id_siswa])->row;
		$fotoSiswa = $result->foto_siswa;
		unlink('assets/back/img/siswa/' . $fotoSiswa);
		$this->db->delete('siswa', ['id_siswa' => $id_siswa]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Siswa <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/siswa');
	}

}
