<?php

class datauserM extends CI_model
{
    public function getAllUser()
    {
        // get semua data user dari db user
        $query = $this->db->query("SELECT * FROM user");
        return $query->result_array();
    }

    public function addUser($data)
    {
        //insert data User ke db User
        $this->db->insert('user', $data);
    }

    public function getUserById($id)
    {
        //get data User berdasarkan id
        $query = $this->db->query("SELECT * FROM user WHERE id_user = '" . $id . "'");
        return $query->row_array();
    }

    public function getUserByName($name)
    {
        //get data User berdasarkan name
        $query = $this->db->query("SELECT * FROM user WHERE nama = '" . $name . "'");
        return $query->row_array();
    }

    public function editUser($id_user, $data)
    {
        //edita data User berdasarkan id_user
        $this->db->where('id_user', $id_user);
        $this->db->update('user', $data);
    }
}
