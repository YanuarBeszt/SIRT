<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembuatanSurat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_nik();
        cek_statusWarga();
        // load model 
        $this->load->model('Surat_model');
    }

    public function index()
    {
        $data =
            [
                'isinya' => 'admin/pembuatansurat',
                'surat' => $this->Surat_model->getAll()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function buatSurat()
    {
        $data =
            [
                'isinya' => 'admin/buatsurat'
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }
}
