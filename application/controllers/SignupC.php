<?php

class SignupC extends CI_Controller
{
    // construct function that loads Account Model
    function __construct()
    {
        parent::__construct();
        $this->load->model('Account');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('SignupV');
        $this->load->view('/templates/footer');
    }

    //function pengecekan
    public function proses()
    {
        $this->form_validation->set_rules('firstname', 'First Name', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[1]|max_length[255]|is_unique[user.nama]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[1]|max_length[255]');
        $this->form_validation->set_rules('re_password', 'Retype Password', 'trim|required|min_length[1]|max_length[255]');
        if ($this->form_validation->run() == true) {
            // $firstname = $this->input->post('firstname');
            // $lastname = $this->input->post('firstname');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $re_password = $this->input->post('re_password');
            if ($password == $re_password) {
                $this->Account->register($username, $email, $password);
                $this->session->set_flashdata('success_register', 'You are registered!');
                redirect('loginC');
            } else {
                $this->session->set_flashdata('error', "Your password doesn't match");
                redirect('SignupC');
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('SignupC');
        }
    }

    // function to register as a user, the password will be hashed with md5
    // public function register() {
    //     $x = $this->user->get_last_user();
    //     if ($x == null) {
    //         $x['ids'] = 0;
    //     }
    //     $dataUser = array(
    //         "id_user" => 'M-'.strval($x['ids']+1),
    //         "first name" => $this->input->post('nama', true),
    //         "last name" => $this->input->post('nama', true),
    //         "username" => $this->input->post('nama', true),
    //         "email" => $this->input->post('email', true),
    //         "password" => $this->input->post('password', true)
    //     );
    //     $masuk = $this->Account->cekid_daftar($dataUser['nama']);
    //     $masuk1 = $this->Account->cek_email_daftar($dataUser['email']);
    //     if ($masuk and $masuk1){
    //     	$daftar = $this->Account->register("user", $dataUser);
    //     	if ($daftar) {
    //         	redirect('landingC');
    //     	} else {
    //         	$this->load->view('loginV');
    //     	}
    //     } else {
    //     	$this->load->view('loginV');
    //     }
    // }
}
