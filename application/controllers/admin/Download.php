<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Download_m');
	}

	public function index()
	{
		$download = $this->Download_m->get('file')->result();
		$data = [
			'title' => 'Download',
			'isi' => 'admin/download/index',
			'download' => $download
		];
		$this->load->view('layout/back/wrapper', $data);
	}

	public function tambah()
	{
		$data = [
			'title' => 'Tambah Data File Download',
			'isi' => 'admin/download/tambah'
		];

		$this->form_validation->set_rules('nama', 'Nama File', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$file = $_FILES['file']['name'];

			if($file != null) {
				$config['upload_path']          = './assets/back/file/';
	            $config['allowed_types']        = 'pdf|doc|docx|ppt|txt|xls';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('file'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/download');
	            }
	            else
	            {
	                $this->upload->data('file_name');
	            }
	        } else {
	        	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">File Upload Wajib Diupload.</div>');
	            redirect('admin/download');
	        }

			$data = [
				'nama_file' => html_escape(ucwords($this->input->post('nama', true))),
				'file' => $file
			];

			$this->Download_m->insert('file', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data File <strong>Berhasil Ditambahkan</strong>.</div>');
			redirect('admin/download');
		}
	}

	public function edit($id_file)
	{
		$download = $this->Download_m->get_where('file', ['id_file' => $id_file])->row();
		$data = [
			'title' => 'Edit Data File Download',
			'isi' => 'admin/download/edit',
			'download' => $download
		];

		$this->form_validation->set_rules('nama', 'Nama File', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$file = $_FILES['file']['name'];

			if($file != null) {
				$config['upload_path']          = './assets/back/file/';
	            $config['allowed_types']        = 'pdf|doc|docx|ppt|txt|xls';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('file'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/download/edit/' . $id_file);
	            }
	            else
	            {
	                $fileLama = $this->input->post('fileLama');
	            	$result = $this->db->get_where('file', ['id_file' => $id_file])->row();
	            	$fileDB = $result->file;
	            	if($fileLama == $fileDB) {
	            		unlink(FCPATH . 'assets/back/file/' . $fileDB);
	            	}
	                $fileBaru = $this->upload->data('file_name');
	                $this->db->set('file', $fileBaru);
	            }
	        }

			$data = [
				'nama_file' => html_escape(ucwords($this->input->post('nama', true)))
			];

			$this->Download_m->update('file', $data, ['id_file' => $id_file]);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data File <strong>Berhasil Diedit</strong>.</div>');
			redirect('admin/download');
		}
	}

	public function hapus($id_file)
	{
		$result = $this->Download_m->get_where('file', ['id_file' => $id_file])->row;
		$fotofile = $result->file;
		unlink('./assets/back/file/' . $fotofile);
		$this->db->delete('file', ['id_file' => $id_file]);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data File <strong>Berhasil Dihapus</strong>.</div>');
		redirect('admin/download');
	}

}
