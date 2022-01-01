<?php
class Home extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master', 'master');
	}


	public function index()
	{
		$data = [
			'title' => 'Home',
			'page' => 'konten',
			'data' => $this->master->getAllData()
		];

		$this->load->view('index', $data);
	}

	public function getAllDataById($id)
	{
		$data = [
			'title' => 'Detail',
			'page' => 'detail',
			'data' => $this->master->getAllDataById($id)
		];

		$this->load->view('index', $data);
	}

	// public function index()
	// {
	// 	$vals = [
	// 		// 'word' -> nantinya akan digunakan sebagai random teks yang akan keluar di captchanya
	// 		'word'          => substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 4),
	// 		'img_path'      => './captcha/',
	// 		'img_url'       => base_url('captcha/'),
	// 		'img_width'     => 150,
	// 		'img_height'    => 50,
	// 		'expiration'    => 7200,
	// 		'word_length'   => 8,
	// 		'font_size'     => 16,
	// 		'img_id'        => 'Imageid',
	// 		'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
	// 		'colors'        => [
	// 			'background' => [255, 255, 255],
	// 			'border'    => [255, 255, 255],
	// 			'text'      => [0, 0, 0],
	// 			'grid'      => [255, 40, 40]
	// 		]
	// 	];

	// 	$captcha = create_captcha($vals);

	// 	$this->session->set_userdata('captcha', $captcha['word']);
	// 	$this->load->view('index', ['captcha' => $captcha['image']]);
	// }

	// public function check_captcha()
	// {
	// 	$post_code  = $this->input->post('captcha');
	// 	$captcha    = $this->session->userdata('captcha');

	// 	if ($post_code && ($post_code == $captcha))
	// 		$this->session->set_flashdata('pesan_form', '<font style="color: green"><b>Berhasil memverifikasi captcha.</b></font><br/><br/>');
	// 	else
	// 		$this->session->set_flashdata('pesan_form', '<font style="color: red"><b>Captcha yang Anda ketik salah!</b></font><br/><br/>');

	// 	redirect('attacker');
	// }
}
