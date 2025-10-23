<?php
defined('BASEPATH') or exit('No direct script access allowed');

class List_pasien extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Form_model');
		$this->load->helper(['form', 'url']);
	}

	public function index()
	{
		// Ambil semua data pasien dari database
		$data['data_kesehatan'] = $this->Form_model->getAll();

		// Kirim data ke view
		$data['title'] = 'Daftar Pasien';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');   // jika ada sidebar
		$this->load->view('form_list', $data);    // view daftar pasien
		$this->load->view('templates/footer');
	}
}
