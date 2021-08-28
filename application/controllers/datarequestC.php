<?php

class datarequestC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('datarequestM');
		$this->load->model('Account');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data Request";

		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}

		$data['request'] = $this->datarequestM->getAllRequest();
		$this->load->view('datarequestV', $data);
	}
	public function addDataRequest()
	{
		$data['title'] = "Add Request";
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email'),
			];
			$data['login'] = $login;
			$data['akun'] = $this->Account->getakun_username($this->session->userdata('nama'));
		} else {
			$data['login'] = False;
			$data['akun'] = False;
		}
		$this->load->view('addDataRequestV', $data);
	}
	public function add()
	{
		$akun = $this->Account->getakun_username($this->session->userdata('nama'));
		$data = [
			"case_id" => $this->input->post('case_id', true),
			"id_user" => $akun['id_user'],
			"case_req" => $this->input->post('case_req', true),
			"case_desc" => $this->input->post('case_desc', true),
			"case_kategori" => $this->input->post('case_kategori', true),
			"case_date" => $this->input->post('case_date', true),
			"case_solution" => $this->input->post('case_solution', true)
		];

		if ($data) {
			$this->datarequestM->addRequest($data);

			// ---- notification success -----

			redirect('datarequestC');
		}
		$this->load->view('addDataRequestV');
	}
}
