<?php defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Model
{

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('username', $username);
        }
        $query = $this->db->get();
        return $query;
    }
}