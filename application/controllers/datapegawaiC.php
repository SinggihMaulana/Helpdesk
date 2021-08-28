<?php

class datapegawaiC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('datapegawaiM');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "Data Pegawai";

		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}

		$data['pegawai'] = $this->datapegawaiM->getAllPegawai();
		$this->load->view('datapegawaiV', $data);
	}

	public function addDataPegawai()
	{
		$data['title'] = "Add Data Pegawai";
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}
		$this->load->view('addDataPegawaiV', $data);
	}

	public function add()
	{
		$data = [
			"nip" => $this->input->post('id_number', true),
			"nik" => $this->input->post('id_card_number', true),
			"nama" => $this->input->post('name', true),
			"tanggal_lahir" => $this->input->post('birth', true),
			"tempat_lahir" => $this->input->post('born_place', true),
			"nomer_tlp" => $this->input->post('phone', true),
			"alamat" => $this->input->post('address', true)
		];

		if ($data) {
			$this->datapegawaiM->addPegawai($data);

			// ---- notification success -----

			redirect('datapegawaiC');
		}
	}
}
