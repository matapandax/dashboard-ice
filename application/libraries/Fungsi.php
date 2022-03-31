<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model("data_user");
        $username = $this->ci->session->userdata('data_user');
        $user_data = $this->ci->data_user->get($username)->row();
        return $user_data;
    }
}