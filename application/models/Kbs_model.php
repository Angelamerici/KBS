<?php

class Kbs_model extends CI_Model
{
    public function getAllKbs()
    {
        $this->db->select('kbs.*,sasaran.*,keluarga.*');
        $this->db->from('kbs');
        $this->db->join('keluarga', 'keluarga.id = kbs.keluarga_id', 'left');
        $this->db->join('sasaran', 'sasaran.id = kbs.sasaran_id', 'left');

        $this->db->where('pus="Tidak" AND air="Ya" or jamban="Ya"');
        $this->db->where('pus="Ya" AND air="Ya" or jamban="Ya" or muda="Ya" or tua="Ya" or dekat="Ya" or banyak="Ya"');
        $query = $this->db->get();
        return $query->result_array();
    }
}
