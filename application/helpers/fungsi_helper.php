<?php

function check_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('data_user');
    if ($user_session) {
        redirect('home');
    }
}
function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('data_user');
    if (!$user_session) {
        echo "<script>
                alert('login gagal')
                window.location='" . site_url('auth') . "'
            </script>";
    }
}