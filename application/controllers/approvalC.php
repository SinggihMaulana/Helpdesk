<?php

class approvalC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		//  $this->load->database();
		$this->load->library('form_validation');
	}
	public function index()
	{
		if ($this->session->userdata('is_login')) {
			$login = [
				'nama' => $this->session->userdata('nama'),
				'email' => $this->session->userdata('email')
			];
			$data['login'] = $login;
		} else {
			$data['login'] = False;
		}
		$this->load->view('approvalV', $data);
	}
}
