<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['form', 'url']);
	}

	public function index()
	{
		$this->load->view('form');
	}

	public function submit()
	{
		$data = [
			'nama'        => $this->input->post('nama'),
			'ttl'         => $this->input->post('ttl'),
			'pekerjaan'   => $this->input->post('pekerjaan'),
			'tb'          => $this->input->post('tb'),
			'bb'          => $this->input->post('bb'),
			'bmi'         => $this->input->post('bmi'),
			'td'          => $this->input->post('td'),
			'gol_darah'   => $this->input->post('gol_darah')
		];

		$this->load->view('form_success', $data);
	}
}
