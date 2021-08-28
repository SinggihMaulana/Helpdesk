<?php

class datafaqM extends CI_model
{
    public function getAllFAQ()
    {
        // get semua data faq dari db faq
        $query = $this->db->query("SELECT * FROM faq");
        return $query->result_array();
    }

    public function addFAQ($data)
    {
        //insert data faq ke db faq
        $this->db->insert('faq', $data);
    }

    public function getFAQById($id)
    {
        //get data faq berdasarkan id
        $query = $this->db->query("SELECT * FROM faq WHERE id_pertanyaan = '" . $id . "'");
        return $query->row_array();
    }

    public function editFAQ($id_pertanyaan, $data)
    {
        //edita data faq berdasarkan id_pertanyaan
        $this->db->where('id_pertanyaan', $id_pertanyaan);
        $this->db->update('faq', $data);
    }

    public function getMaxId()
    {
        $query = $this->db->query("SELECT id_pertanyaan FROM faq WHERE id_pertanyaan = (SELECT MAX(id_pertanyaan) FROM faq)");
        return $query->row_array()['id_pertanyaan'];
    }
}
