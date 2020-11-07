<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaturan_m');
	}

	public function index()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Pengaturan',
			'isi' => 'admin/pengaturan/index',
			'setting' => $setting,
		];

		$this->form_validation->set_rules('sekolah', 'Nama Sekolah', 'required|trim');
		$this->form_validation->set_rules('kepsek', 'Nama Kepala Sekolah', 'required|trim');
		$this->form_validation->set_rules('nip', 'NIP', 'required|trim');
		$this->form_validation->set_rules('telp', 'Telepon', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('visi', 'Visi', 'required|trim');
		$this->form_validation->set_rules('misi', 'Misi', 'required|trim');
		$this->form_validation->set_rules('sejarah', 'Sejarah', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('layout/back/wrapper', $data);
		} else {
			$foto_kepsek = $_FILES['foto_kepsek']['name'];

			if($foto_kepsek != null) {
				$config['upload_path']          = './assets/back/img/kepsek/';
	            $config['allowed_types']        = 'jpg|png|jpeg';
	            $config['max_size']             = 2048;

	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);

	            if (!$this->upload->do_upload('foto_kepsek'))
	            {
	            	$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
	                redirect('admin/pengaturan');
	            }
	            else
	            {
	                $foto_kepsek_lama = $this->input->post('foto_kepsek_lama');
	            	$result = $this->db->get_where('pengaturan', ['id_pengaturan' => '1'])->row();
	            	$foto_kepsek_db = $result->foto_kepsek;
	            	if($foto_kepsek_lama == $foto_kepsek_db) {
	            		unlink(FCPATH . 'assets/back/img/kepsek/' . $foto_kepsek_db);
	            	}
	                $foto_kepsek_baru = $this->upload->data('file_name');
	                $this->db->set('foto_kepsek', $foto_kepsek_baru);
	            }
	        }

			$data = [
				'nama_sekolah' => html_escape(ucwords($this->input->post('sekolah', true))),
				'alamat' => html_escape($this->input->post('alamat', true)),
				'telp' => html_escape($this->input->post('telp', true)),
				'kepsek' => html_escape($this->input->post('kepsek', true)),
				'nip' => html_escape($this->input->post('nip', true)),
				'visi' => html_escape($this->input->post('visi', true)),
				'misi' => html_escape($this->input->post('misi', true)),
				'sejarah' => html_escape($this->input->post('sejarah', true)),
			];

			$this->Pengaturan_m->update('pengaturan', $data, ['id_pengaturan' => '1']);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Data Pengaturan Website <strong>Berhasil Di Perbarui</strong>.</div>');
			redirect('admin/pengaturan');
		}
	}
}
