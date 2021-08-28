<?php

class datacompanyM extends CI_model
{
    public function getAllCompany()
    {
        // get semua data company dari db company
        $query = $this->db->query("SELECT * FROM company");
        return $query->result_array();
    }

    public function addCompany($data)
    {
        //insert data company ke db company
        $this->db->insert('company', $data);
    }

    public function getCompanyById($id)
    {
        //get data company berdasarkan id
        $query = $this->db->query("SELECT * FROM company WHERE id_perusahaan = '" . $id . "'");
        return $query->row_array();
    }

    public function getCompanyByName($nama_perusahaan)
    {
        //get data company berdasarkan nama_perusahaan
        $query = $this->db->query("SELECT * FROM company WHERE nama_perusahaan = '" . $nama_perusahaan . "'");
        return $query->row_array();
    }

    public function editCompany($id_perusahaan, $data)
    {
        //edita data company berdasarkan id_perusahaan
        $this->db->where('id_perusahaan', $id_perusahaan);
        $this->db->update('company', $data);
    }

    public function getMaxId()
    {
        $query = $this->db->query("SELECT id_perusahaan FROM company WHERE id_perusahaan = (SELECT MAX(id_perusahaan) FROM company)");
        return $query->row_array()['id_perusahaan'];
    }
}
