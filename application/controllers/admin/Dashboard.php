<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaturan_m');
	}

	public function index()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Admin',
			'isi' => 'admin/home',
			'setting' => $setting
		];
		$this->load->view('layout/back/wrapper', $data);
	}
}
