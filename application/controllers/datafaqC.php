<?php

class datafaqC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('datafaqM');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data FAQ";

		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}

		$data['faq'] = $this->datafaqM->getAllFAQ();
		$this->load->view('datafaqV', $data);
	}
	public function addDataFAQ()
	{
		$data['title'] = "Add Data FAQ";
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}
		$this->load->view('addDataFAQV', $data);
	}

	public function add()
	{
		$data = [
			"id_pertanyaan" => $this->input->post('id_faq', true),
			"list_pertanyaan" => $this->input->post('question', true),
			"jawaban" => $this->input->post('answer', true),
		];
		if ($data) {
			$this->datafaqM->addFAQ($data);

			// ---- notification success -----

			redirect('datafaqC');
		}
	}
}
