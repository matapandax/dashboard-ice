<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function login()
    {
        $this->load->view('login');
    }
    public function process()
    {
        $post = $this->input->post(null, true);
        if (isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
        }
        if ($query->num_rows() > 0) {
            echo 'login berhasil';
        } else {
            echo 'login gagal';
        }
    }
}
