<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$data = [
			'title' => 'Halaman Login'
		];

		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('auth/login', $data);
		} else {
			$username = $this->input->post('username', true);
			$password = sha1($this->input->post('password', true));
			// user_login diambil dari library buatan sendiri
			$this->user_login->login($username, $password);
		}
	}

	public function logout()
	{
		// user_login diambil dari library buatan sendiri
		$this->user_login->logout();
	}

}
