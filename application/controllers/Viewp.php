<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Viewp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_nik();
        cek_statusRT();
    }

    public function index()
    {
        $data =
            [
                'isinya' => 'warga/home'
            ];
        $this->load->view('viewp', $data);

        $this->session->set_userdata('previous_url', current_url());
    }
}
