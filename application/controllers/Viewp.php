<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Viewp extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_nik();
        cek_statusRT();
        $this->load->model('Surat_model');
    }

    public function index()
    {
        $data =
            [
                'isinya' => 'warga/home',
                'surat' => $this->Surat_model->getAll()
            ];
        $this->load->view('viewp', $data);

        $this->session->set_userdata('previous_url', current_url());
    }
}
