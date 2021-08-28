<?php

class datarequestM extends CI_model
{
    public function getAllRequest()
    {
        // get semua data data_request dari db data_request
        $query = $this->db->query("SELECT * FROM data_request");
        return $query->result_array();
    }

    public function addRequest($data)
    {
        //insert data request ke db request
        $this->db->insert('data_request', $data);
    }

    public function getRequestById($id)
    {
        //get data request berdasarkan id
        $query = $this->db->query("SELECT * FROM data_request WHERE case_id = '" . $id . "'");
        return $query->row_array();
    }

    public function getRequestByCaseReq($case_req)
    {
        //get data request berdasarkan case_req
        $query = $this->db->query("SELECT * FROM data_request WHERE case_req = '" . $case_req . "'");
        return $query->row_array();
    }

    public function getRequestByCaseKategori($case_kategori)
    {
        //get data request berdasarkan no. KTP
        $query = $this->db->query("SELECT * FROM data_request WHERE case_kategori = '" . $case_kategori . "'");
        return $query->row_array();
    }

    public function editRequest($case_id, $data)
    {
        //edita data request berdasarkan case_id
        $this->db->where('case_id', $case_id);
        $this->db->update('data_request', $data);
    }

    public function getMaxId()
    {
        $query = $this->db->query("SELECT case_id FROM data_request WHERE case_id = (SELECT MAX(case_id) FROM data_request)");
        return $query->row_array()['case_id'];
    }
}
