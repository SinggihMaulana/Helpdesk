<?php

class datakbM extends CI_model
{
    public function getAllKB()
    {
        // get semua data knowledge_based dari db knowledge_based
        $query = $this->db->query("SELECT * FROM knowledge_based");
        return $query->result_array();
    }

    public function addKB($data)
    {
        //insert data knowledge_based ke db knowledge_based
        $this->db->insert('knowledge_based', $data);
    }

    public function getKBById($id)
    {
        //get data knowledge_based berdasarkan id
        $query = $this->db->query("SELECT * FROM knowledge_based WHERE id_konten = '" . $id . "'");
        return $query->row_array();
    }

    public function editKB($id_konten, $data)
    {
        //edita data knowledge_based berdasarkan id_konten
        $this->db->where('id_konten', $id_konten);
        $this->db->update('knowledge_based', $data);
    }

    public function getMaxId()
    {
        $query = $this->db->query("SELECT id_konten FROM knowledge_based WHERE id_konten = (SELECT MAX(id_konten) FROM knowledge_based)");
        return $query;
    }
}
