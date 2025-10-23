<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('Form_model');
		$this->load->helper(['form', 'url']);
	}

	public function index()
	{
		$this->load->view('templates/header', ['title' => 'Form Data Kesehatan']);
		$this->load->view('templates/sidebar');
		$this->load->view('form');
		$this->load->view('templates/footer');
	}

	public function submit()
	{
		$nama = $this->input->post('nama');
		$ttl = $this->input->post('ttl');
		$pekerjaan = $this->input->post('pekerjaan');
		$tb = $this->input->post('tb');
		$bb = $this->input->post('bb');
		$bmi = $this->input->post('bmi');
		$td = $this->input->post('td');
		$gol_darah = $this->input->post('gol_darah');

		$data = [
			'nama' => $nama,
			'ttl' => $ttl,
			'pekerjaan' => $pekerjaan,
			'tb' => $tb,
			'bb' => $bb,
			'bmi' => $bmi,
			'td' => $td,
			'gol_darah' => $gol_darah
		];

		$this->Form_model->insert($data);
		redirect('List_pasien');
	}
}
