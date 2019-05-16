<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailPenduduk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
        cek_nik();
        cek_statusWarga();
    }

    public function index()
    {
        $data =
            [
                'isinya' => 'admin/detailpenduduk',
                'penduduk' => $this->Penduduk_model->getAll()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function Hapus($nik)
    {
        $this->Penduduk_model->delete($nik);
    }
}
