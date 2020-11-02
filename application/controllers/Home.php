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

	public function downloads()
	{
		$this->load->model('Download_m');
		
		// Pagination
		$config['base_url'] = 'http://localhost/siskolah-ci-3/home/downloads/index/';
		$config['total_rows'] = $this->Download_m->get('file')->num_rows();
		// var_dump($config['total_rows']); die;
		$config['per_page'] = 2;

		// Style
		$config['full_tag_open'] = '<nav class="d-inline-block"><ul class="pagination mb-0">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fa fa-chevron-right"></i>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fa fa-chevron-left"></i>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(4);
		$start = $this->uri->segment(4);

		$file = $this->Download_m->getAllDownload($config['per_page'], $data['start'])->result();

		$data = [
			'title' => 'Downloads',
			'isi' => 'home/download',
			'file' => $file,
			'start' => $start
		];

		$this->load->view('layout/front/wrapper', $data);
	}
}
