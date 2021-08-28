<?php

class Account extends CI_Model
{

    // function untuk melakukan pendafataran akun baru kedalam database
    function register($username, $email, $password)
    {
        $data_user = array(
            'nama' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        );
        $this->db->insert('user', $data_user);
    }

    function login_user($username, $password)
    {
        $query = $this->db->get_where('user', array('nama' => $username));
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password)) {
                $this->session->set_userdata('nama', $username);
                $this->session->set_userdata('email', $data_user->email);
                $this->session->set_userdata('is_login', TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    function cek_login()
    {
        if (empty($this->session->userdata('is_login'))) {
            redirect('loginV');
        }
    }

    // function untuk melakukan pemeriksaan username pada database
    function cekid_daftar($nama)
    {
        $this->db->where('nama', $nama);
        $cek = $this->db->get('user')->row_array();
        if ($cek) {
            return false;
        } else {
            return true;
        }
    }

    // function untuk melakukan pemeriksaan email pada database
    function cek_email_daftar($email)
    {
        $this->db->where('email', $email);
        $cek = $this->db->get('user')->row_array();
        if ($cek) {
            return false;
        } else {
            return true;
        }
    }

    // function untuk melakukan login dengan mencocokkan username dan password pada database
    public function login()
    {
        $data = [
            "username" => $this->input->post('nama', true),
            "password" => md5($this->input->post('password', true)),
        ];
        $masuk = $this->Account->login($data);

        if ($masuk) {
            $data_user = $this->Account->getakun_nama($data['nama']);

            $data_session = array(
                'username' => $data['nama'],
                'user_id' => $data_user['id_user']
            );
            $this->session->set_userdata($data_session);
            redirect('landingC');
        } else {
            $this->load->view('loginV');
        }
    }


    // function untuk mengambil semua data akun yang ada di dalam database
    public function getakun($table)
    {
        $data = $this->db->get($table);
        return $data->result_array();
    }

    // function unutk mengambil data akun dari database berdasarkan id
    public function getakun_id($table, $id)
    {
        $this->db->where('id_user', $id);
        $result = $this->db->get($table);
        if ($result->num_rows() == 1) {
            return $result->row_array();
        } else {
            return false;
        }
    }

    // function untuk mengambil data akun dari database berdasarkan username
    public function getakun_username($nama)
    {
        $this->db->where('nama', $nama);
        return $this->db->get('user')->row_array();
    }

    // function untuk mengambil suatu data member berdasarkan id user
    function get_user_id($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('user')->row_array();
    }

    // function untuk melakukan update/modifikasi suatu data akun pada database berdasarkan username
    function update_profile($table, $username, $data)
    {
        // $data_user = array(
        // 	'Username'=>$username,
        //     'Full Name'=>$fullname,
        //     'email'=>$email,
        //     'Phone Number'=>$nomer_tlp
        // );
        // $this->db->update('user',$data_user);

        $this->db->where('nama', $username);
        $update = $this->db->update($table, $data);
        if ($update) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // function untuk melakukan update data user berdasarkan id user
    function update_user_id($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->update('user', $data);
    }
}
