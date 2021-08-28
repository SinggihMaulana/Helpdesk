<?php

class SettingC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('Account');
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
			//get data akun based on username
			$data['akun'] = $this->Account->getakun_username($this->session->userdata('nama'));
		} else {
			$data['login'] = False;
			$data['akun'] = False;
		}
		$this->load->view('settingV', $data);
	}

	public function updateUser($id_user)
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		if ($this->form_validation->run() == True) {
			$new_data = [
				'nama' => $this->input->post('nama', true),
				'nomer_tlp' => $this->input->post('nomer_tlp', true),
				'email' => $this->input->post('email', true),
				'tempat_lahir' => $this->input->post('tempat_lahir', true),
				'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
				'alamat' => $this->input->post('alamat', true)
			];
			$this->Account->update_user_id($id_user, $new_data);
			$this->session->set_userdata('nama', $this->input->post('nama', true));
			$this->session->set_userdata('email', $this->input->post('email', true));
			$this->session->set_flashdata('setting_success', 'Data User Updated!');
			redirect('settingC');
		} else {
			$this->session->set_flashdata('setting_failed', 'Name or Email Can Not Empty');
			redirect('settingC');
		}
	}
}
