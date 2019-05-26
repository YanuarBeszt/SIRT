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
        $this->load->model('Penduduk_model');
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

    public function buatSurat($url)
    {
        $data =
            [
                'isinya' => 'admin/buatsurat',
                'url' => $this->Surat_model->getByUrl($url),
                'warga' => $this->Penduduk_model->getAll(),
                'trans' => $this->Surat_model->getTrans()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function print($surat)
    {
        $warga = $this->input->post('warga');
        $nosurat = $this->input->post('nosurat');
        $this->Surat_model->save();
        $data =
            [
                'warga' => $this->Penduduk_model->getById($warga),
                'nosurat' => $nosurat
            ];
        $this->load->view('surat/' . $surat, $data);

        $this->session->set_userdata('previous_url', current_url());
    }
}
