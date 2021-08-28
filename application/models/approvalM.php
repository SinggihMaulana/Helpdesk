<?php

class approvalM extends CI_model
{
    public function getAllApproval()
    {
        // get semua data data_request dari db data_request
        $query = $this->db->query("SELECT * FROM data_request");
        return $query->result_array();
    }

    public function addApproval($data)
    {
        //insert data request ke db request
        $this->db->insert('data_request', $data);
    }

    public function getApprovalById($id)
    {
        //get data request berdasarkan id
        $query = $this->db->query("SELECT * FROM data_request WHERE case_id = '" . $id . "'");
        return $query->row_array();
    }

    public function getApprovalByCaseReq($case_req)
    {
        //get data request berdasarkan case_req
        $query = $this->db->query("SELECT * FROM data_request WHERE case_req = '" . $case_req . "'");
        return $query->row_array();
    }

    public function getApprovalByCaseKategori($case_kategori)
    {
        //get data request berdasarkan no. KTP
        $query = $this->db->query("SELECT * FROM data_request WHERE case_kategori = '" . $case_kategori . "'");
        return $query->row_array();
    }

    public function editApproval($case_id, $data)
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

    public function countTicket($id)
    {
        $query = $this->db->query("SELECT COUNT(*) FROM data_request WHERE id_user = '" . $id . "'");
        return $query;
    }
}
