<?php

class Keluarga_model extends CI_Model
{
    public function getAllKeluarga()
    {
        return $this->db->get('keluarga')->result_array();
    }

    public function tambahDataKeluarga()
    {
        $data = [
            "nkk" => $this->input->post('nkk', true),
            "suami" => $this->input->post('suami', true),
            "istri" => $this->input->post('istri', true),
            "rt" => $this->input->post('rt', true),
            "dusun" => $this->input->post('dusun', true),
            "desa" => $this->input->post('desa', true),
            "baduta" => $this->input->post('baduta', true),
            "balita" => $this->input->post('balita', true),
            "pus" => $this->input->post('pus', true),
            "pushamil" => $this->input->post('pushamil', true),
            "date_created" => time()
        ];

        $this->db->insert('keluarga', $data);
    }

    public function editDataKeluarga()
    {
        $data = [
            "nkk" => $this->input->post('nkk', true),
            "suami" => $this->input->post('suami', true),
            "istri" => $this->input->post('istri', true),
            "rt" => $this->input->post('rt', true),
            "dusun" => $this->input->post('dusun', true),
            "desa" => $this->input->post('desa', true),
            "baduta" => $this->input->post('baduta', true),
            "balita" => $this->input->post('balita', true),
            "pus" => $this->input->post('pus', true),
            "pushamil" => $this->input->post('pushamil', true),
            "date_created" => time()
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('keluarga', $data);
    }

    public function getKeluargaById($id)
    {
        return $this->db->get_where('keluarga', ['id' => $id])->row_array();
    }

    public function hapusDataKeluarga($id)
    {
        $this->db->delete('keluarga', ['id' => $id]);
    }

    public function cariDataKeluarga()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nkk', $keyword);
        $this->db->or_like('suami', $keyword);
        $this->db->or_like('istri', $keyword);
        $this->db->or_like('rt', $keyword);
        $this->db->or_like('dusun', $keyword);
        $this->db->or_like('desa', $keyword);
        return $this->db->get('keluarga')->result_array();
    }
}
