<?php

class datauserC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('datauserM');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['title'] = "Data User";

		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}

		$data['user'] = $this->datauserM->getAllUser();
		$this->load->view('datauserV', $data);
	}

	public function addDataUser()
	{
		$data['title'] = "Add Data User";
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}
		$this->load->view('addDataUserV', $data);
	}

	public function add()
	{
		$data = [
			"id_user" => '',
			"nama" => $this->input->post('nama', true),
			"nomer_tlp" => $this->input->post('nomer_tlp', true),
			"email" => $this->input->post('email', true),
			"tempat_lahir" => $this->input->post('tempat_lahir', true),
			"tanggal_lahir" => $this->input->post('tanggal_lahir', true),
			"alamat" => $this->input->post('alamat', true),
			"password" => ''
		];

		if ($data) {
			$this->datauserM->addUser($data);

			// ---- notification success -----

			redirect('datauserC');
		}
		$this->load->view('addDataUserV');
	}
}
