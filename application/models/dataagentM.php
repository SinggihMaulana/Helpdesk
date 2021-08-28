<?php

class dataagentM extends CI_model
{
    public function getAllAgent()
    {
        // get semua data data_agent dari db data_agent
        $query = $this->db->query("SELECT * FROM data_agent");
        return $query->result_array();
    }

    public function addAgent($data)
    {
        //insert data agent ke db agent
        $this->db->insert('data_agent', $data);
    }

    public function getAgentById($id)
    {
        //get data Agent berdasarkan id
        $query = $this->db->query("SELECT * FROM data_agent WHERE id_agent = '" . $id . "'");
        return $query->row_array();
    }

    public function getAgentByName($name)
    {
        //get data Agent berdasarkan name
        $query = $this->db->query("SELECT * FROM data_agent WHERE nama_agent = '" . $name . "'");
        return $query->row_array();
    }

    public function getAgentByKategori($kategori_agent)
    {
        //get data Agent berdasarkan no. KTP
        $query = $this->db->query("SELECT * FROM data_agent WHERE kategori_agent = '" . $kategori_agent . "'");
        return $query->row_array();
    }

    public function editAgent($id_agent, $data)
    {
        //edita data Agent berdasarkan id_agent
        $this->db->where('id_agent', $id_agent);
        $this->db->update('data_agent', $data);
    }

    public function getMaxId()
    {
        $query = $this->db->query("SELECT id_agent FROM data_agent WHERE id_agent = (SELECT MAX(id_agent) FROM data_agent)");
        return $query->row_array()['id_agent'];
    }
}
