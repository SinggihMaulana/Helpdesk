<?php

class datapegawaiM extends CI_model
{
    public function getAllPegawai()
    {
        // get semua data data_pegawai dari db data_pegawai
        $query = $this->db->query("SELECT * FROM data_pegawai");
        return $query->result_array();
    }

    public function addPegawai($data)
    {
        //insert data pegawai ke db pegawai
        $this->db->insert('data_pegawai', $data);
    }

    public function getPegawaiByName($name)
    {
        //get data pegawai berdasarkan name
        $query = $this->db->query("SELECT * FROM data_pegawai WHERE nama_pegawai = '" . $name . "'");
        return $query->row_array();
    }

    public function getPegawaiByNik($nik)
    {
        //get data pegawai berdasarkan nik
        $query = $this->db->query("SELECT * FROM data_pegawai WHERE nik = '" . $nik . "'");
        return $query->row_array();
    }

    public function getPegawaiByNip($nip)
    {
        //get data pegawai berdasarkan nip
        $query = $this->db->query("SELECT * FROM data_pegawai WHERE nip = '" . $nip . "'");
        return $query->row_array();
    }

    public function editPegawai($nip, $data)
    {
        //edita data pegawai berdasarkan nip
        $this->db->where('nip', $nip);
        $this->db->update('data_pegawai', $data);
    }
}
