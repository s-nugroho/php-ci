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
		$name  = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		// Contoh sederhana: hanya menampilkan hasil input
		$data = [
			'name' => $name,
			'email' => $email,
			'message' => $message
		];

		$this->load->view('form_success', $data);
	}
}
