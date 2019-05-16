<?php

function cek_nik()
{
    $ci = get_instance();
    if (!$ci->session->userdata('nik')) {
        redirect('Login');
    }
}

function cek_statusRT()
{
    $ci = get_instance();
    $user_session_pdd = $ci->session->userdata('statusPdd');
    if ($user_session_pdd == 1) {
        redirect('View');
    }
}

function cek_statusWarga()
{
    $ci = get_instance();
    $user_session_pdd = $ci->session->userdata('statusPdd');
    if ($user_session_pdd == 2) {
        redirect('Viewp');
    }
}

function cek_loggedin()
{
    $ci = get_instance();
    if ($ci->session->userdata('nik')) {
        $previous_url = $ci->session->userdata('previous_url');
        redirect($previous_url);
    }
}
