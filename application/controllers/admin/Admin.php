<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data = [
			'title' => 'Admin',
			'isi' => 'admin/home'
		];
		$this->load->view('layout/back/wrapper', $data);
	}
}
