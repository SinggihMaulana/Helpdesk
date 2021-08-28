<?php

class datakbC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('datakbM');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data Knowledge Based";

		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}

		$data['knowledge'] = $this->datakbM->getAllKB();
		$this->load->view('datakbV', $data);
	}
	public function addDataKB()
	{
		$data['title'] = "Add Data Knowledge Based";
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}
		$this->load->view('addDataKBV', $data);
	}

	public function add()
	{
		$data = [
			"id_konten" => $this->input->post('id_konten', true),
			"konten" => $this->input->post('konten', true),
			"tanggal_konten" => $this->input->post('date', true),
		];

		if ($data) {
			$this->datakbM->addKB($data);

			// ---- notification success -----

			redirect('datakbC');
		}
	}
}
