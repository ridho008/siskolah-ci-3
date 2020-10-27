<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data = [
			'title' => 'Web Sekolah',
			'isi' => 'home/index'
		];
		$this->load->view('layout/front/wrapper', $data);
	}
}
