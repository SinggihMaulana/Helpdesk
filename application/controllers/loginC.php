<?php

class loginC extends CI_Controller
{
	// construct function that loads Account Model
	function __construct()
	{
		parent::__construct();
		$this->load->model('Account');
	}

	public function index()
	{
		$this->load->view('loginV');
		$this->load->view('/templates/footer');
	}

	// // function untuk melakukan login dengan mencocokkan username dan password pada database
	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if ($this->Account->login_user($username, $password)) {
			redirect('landingC');
		} else {
			$this->session->set_flashdata('error', 'Wrong Username or Password');
			redirect('loginC');
		}
	}

	// logout function, destroy session too
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

	// // function untuk melakukan login dengan mencocokkan username dan password pada database
	// public function login()
	// {
	// 	$data = [
	// 		"username" => $this->input->post('nama', true),
	// 		"password" => md5($this->input->post('password', true)),
	// 	];
	// 	$masuk = $this->Account->login($data);

	// 	if ($masuk) {
	// 		$data_user = $this->Account->getakun_nama($data['nama']);

	// 		$data_session = array(
	// 			'username' => $data['nama'],
	// 			'id_user' => $data_user['id_user']
	// 		);
	// 		$this->session->set_userdata($data_session);
	// 		redirect('landingC');
	// 	} else {
	// 		$this->load->view('loginV');
	// 	}
	// }

}
