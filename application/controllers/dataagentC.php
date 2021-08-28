<?php

class dataagentC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('dataagentM');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data Agent";

		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}

		$data['agent'] = $this->dataagentM->getAllAgent();
		$this->load->view('dataagentV', $data);
	}

	public function addDataAgent()
	{
		$data['title'] = "Add Data Agent";
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}
		$this->load->view('addDataAgentV', $data);
	}

	public function add()
	{

		$data = [
			"id_agent" => $this->input->post('id_agent', true),
			"nama_agent" => $this->input->post('name', true),
			"kategori_agent" => $this->input->post('category', true),
			"nik" => $this->input->post('nik', true),
			"nomer_tlp_agent" => $this->input->post('phone', true),
			"alamat_agent" => $this->input->post('address', true),
		];

		if ($data) {
			$this->dataagentM->addAgent($data);

			// ---- notification success -----

			redirect('dataagentC');
		}
	}
}
