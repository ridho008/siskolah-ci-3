<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengaturan_m');
	}

	public function index()
	{
		$this->load->model('Berita_m');
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$slideBerita = $this->Berita_m->slideBerita('berita', 'users')->result();
		$PopularBerita = $this->Berita_m->slideBerita('berita', 'users')->result();
		$data = [
			'title' => 'Home',
			'isi' => 'home/index',
			'setting' => $setting,
			'slideBerita' => $slideBerita,
			'PopularBerita' => $PopularBerita
		];
		$this->load->view('layout/front/wrapper_home', $data);
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
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Downloads',
			'isi' => 'home/download',
			'file' => $file,
			'start' => $start,
			'setting' => $setting
		];

		$this->load->view('layout/front/wrapper', $data);
	}


	public function guru()
	{
		$this->load->model('Guru_m');
		$guru = $this->Guru_m->get_join('guru', 'mapel')->result();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Guru',
			'isi' => 'home/guru',
			'guru' => $guru,
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

	public function berita()
	{
		$this->load->model('Berita_m');

		// Pagination
		$config['base_url'] = 'http://localhost/siskolah-ci-3/home/berita/p/';
		$config['total_rows'] = $this->Berita_m->get('berita')->num_rows();
		// var_dump($config['total_rows']); die;
		$config['per_page'] = 2;

		// Style
		$config['full_tag_open'] = '<ul class="pagination_list">';
        $config['full_tag_close'] = '</ul>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '<i class="fa fa-angle-right"></i>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<i class="fa fa-angle-left"></i>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['attributes'] = array('class' => '');

		$this->pagination->initialize($config);

		
		$data['start'] = $this->uri->segment(4);
		$start = $this->uri->segment(4);

		$berita = $this->Berita_m->getAllBerita('berita', 'users', $config['per_page'], $data['start'])->result();

		// berita terakhir
		$beritaTerakhir = $this->Berita_m->latestNews('berita', 'users')->result();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Berita',
			'isi' => 'home/berita',
			'berita' => $berita,
			'beritaTerakhir' => $beritaTerakhir,
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

	public function detail_berita($slug)
	{
		$this->load->model('Berita_m');
		$judul = str_replace('-', ' ', ucwords($slug));
		$berita = $this->Berita_m->get_berita_detail('berita', 'users', ['slug' => $slug])->row();
		$beritaTerakhir = $this->Berita_m->latestNews('berita', 'users')->result();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => $judul,
			'isi' => 'home/detail_berita',
			'berita' => $berita,
			'beritaTerakhir' => $beritaTerakhir,
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

	public function galeri()
	{
		$this->load->model('Galeri_m');
		$galeri = $this->Galeri_m->get_join();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Galeri',
			'isi' => 'home/galeri',
			'galeri' => $galeri,
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

	public function detail_galeri($id)
	{
		$this->load->model('Galeri_m');
		$galeri = $this->Galeri_m->getJoinGaleriFoto($id)->result();
		$judulGaleri = $this->Galeri_m->get_where('galeri', ['id_galeri' => $id])->row();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Galeri',
			'isi' => 'home/detail_galeri',
			'galeri' => $galeri,
			'judulGaleri' => $judulGaleri,
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

	public function siswa()
	{
		$this->load->model('Siswa_m');
		$siswa = $this->Siswa_m->get('siswa')->result();
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Siswa',
			'isi' => 'home/siswa',
			'siswa' => $siswa,
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

	public function profile()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Profile',
			'isi' => 'home/profile',
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

	public function tentang()
	{
		$setting = $this->Pengaturan_m->get('pengaturan')->row();
		$data = [
			'title' => 'Tentang',
			'isi' => 'home/tentang',
			'setting' => $setting
		];
		$this->load->view('layout/front/wrapper', $data);
	}

}
