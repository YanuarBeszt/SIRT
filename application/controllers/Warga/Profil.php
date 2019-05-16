<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_nik();
        cek_statusRT();
        $this->load->model('Penduduk_model');
    }

    public function index()
    {
        $nik = $this->session->userdata('nik');
        $data =
            [
                'isinya' => 'warga/profilP',
                'pend' => $this->Penduduk_model->getById($nik)
            ];
        $this->load->view('viewp', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function edit()
    {
        $data =
            [
                'isinya' => 'warga/edit_profilp'
            ];
        $this->load->view('viewp', $data);

        $this->session->set_userdata('previous_url', current_url());
    }
}
