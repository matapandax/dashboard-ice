<?php

class Data_dashboard extends CI_Model
{

    public function init_rekap_enroll_pt()
    {
        $this->db->select('*');
        $this->db->from('tb_rekap_enroll_pt');
        $payload = $this->db->get();
        return $payload;
    }

    public function get_rekap_enroll_pt($post)
    {
        $this->db->select('*');
        $this->db->from('tb_rekap_enroll_pt');
        $this->db->like('mk_institusi', $post['mk_institusi']);
        $this->db->like("mk_diikuti", $post['mk_diikuti']);
        $this->db->like('pt_pendaftar', $post['pt_pendaftar']);
        $payload = $this->db->get();
        return $payload;
    }

    public function init_total_pt_konsorsium()
    {
        $this->db->select('*');
        $this->db->from('tb_total_pt');
        $this->db->where('jenis_pt', 'konsorsium');
        $payload = $this->db->get();
        return $payload;
    }

    public function init_total_pt_nonkonsorsium()
    {
        $this->db->select('*');
        $this->db->from('tb_total_pt');
        $this->db->where('jenis_pt', 'non-konsorsium');
        $payload = $this->db->get();
        return $payload;
    }

    public function init_total_mk_konsorsium()
    {
        $this->db->select('*');
        $this->db->from('tb_total_mk_konsorsium');
        $payload = $this->db->get();
        return $payload;
    }
    
}