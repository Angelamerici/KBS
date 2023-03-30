<?php

class Sasaran_model extends CI_Model
{
    public function getAllSasaran()
    {
        $this->db->select('*');
        $this->db->from('keluarga');
        $this->db->join('sasaran', 'keluarga.id = sasaran.keluarga_id', 'left');
        $this->db->where('baduta = "Ya" or balita = "Ya" or pushamil = "Ya"');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getSasaranById($id)
    {
        return $this->db->get_where('sasaran', ['id' => $id])->row_array();
    }

    public function editDataSasaran()
    {
        $data = [

            "air" => $this->input->post('air', true),
            "jamban" => $this->input->post('jamban', true),
            "muda" => $this->input->post('muda', true),
            "tua" => $this->input->post('tua', true),
            "dekat" => $this->input->post('dekat', true),
            "banyak" => $this->input->post('banyak', true)

        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('sasaran', $data);
    }
}
