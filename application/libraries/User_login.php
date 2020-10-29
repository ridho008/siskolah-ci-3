<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login {
	protected $ci;

	public function __construct()
	{
		$this->ci =& get_instance();
		$this->ci->load->model('Login_m');
	}

	public function login($username, $password)
	{
		// Login_m diambil dari model
		$cek = $this->ci->Login_m->login($username, $password);
		if($cek) {
			// jika username & password benar
			$username = $cek->username;
			$nama_user = $cek->nama_user;
			$level = $cek->level;

			// buat session
			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('nama_user', $nama_user);
			$this->ci->session->set_userdata('level', $level);

			redirect('admin/admin');
		} else {
			// jika password salah
			$this->ci->session->set_flashdata('pesan', 'Password Salah!');
			redirect('auth');
		}
	}

	public function cek_login()
	{
		if($this->ci->session->userdata('username') == null) {
			$this->ci->session->set_flashdata('pesan', 'Anda Belum Logout!');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('nama_user');
		$this->ci->session->unset_userdata('level');
		$this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout!');
			redirect('auth');
	}

}