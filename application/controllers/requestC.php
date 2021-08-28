<?php

class requestC extends CI_Controller
{

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
        $this->load->view('requestV', $data);
    }
}
