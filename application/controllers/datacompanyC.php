<?php

class datacompanyC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('datacompanyM');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data Company";

		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}

		$data['company'] = $this->datacompanyM->getAllCompany();
		$this->load->view('datacompanyV', $data);
	}
	public function addDataCompany()
	{
		$data['title'] = "Add Data Company";
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}
		$this->load->view('addDataCompanyV', $data);
	}

	public function add()
	{
		$data = [
			"id_perusahaan" => $this->input->post('id_company', true),
			"nama_perusahaan" => $this->input->post('name', true),
			"nomer_tlp_perusahaan" => $this->input->post('phone', true),
			"alamat_perusahaan" => $this->input->post('address', true)
		];

		if ($data) {
			$this->datacompanyM->addCompany($data);

			// ---- notification success -----

			redirect('datacompanyC');
		}
	}
}
