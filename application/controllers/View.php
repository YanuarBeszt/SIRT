<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Surat_model');
        $this->load->model('Penduduk_model');
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

    public function print($surat, $warga)
    {
        $nosurat = $this->input->post('nosurat');
        $data =
            [
                'warga' => $this->Penduduk_model->getById($warga),
                'nosurat' => $nosurat
            ];
        $this->load->view('surat/' . $surat, $data);
        $this->Surat_model->changeStatus();
        $this->session->set_flashdata('success', 'Berhasil Mencetak Surat');

        $this->session->set_userdata('previous_url', current_url());
    }
}
