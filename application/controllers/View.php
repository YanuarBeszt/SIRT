<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
        cek_nik();
        cek_statusWarga();
    }

    public function index()
    {
        $data =
            [
                'isinya' => 'admin/test',
                'surat' => $this->Surat_model->suratBelumCetak()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }
}
