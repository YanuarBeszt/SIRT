<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembuatanSurat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        cek_nik();
        cek_statusRT();
        $this->load->model('Kkeluarga_model');
        $this->load->model('WilayahDD_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Login_model');
        $this->load->model('Surat_model');
    }

    public function index($url)
    {
        $nik = $this->session->userdata('nik');
        $data =
            [
                'isinya' => 'warga/buatsurat',
                'pend' => $this->Penduduk_model->getById($nik),
                'url' => $this->Surat_model->getByUrl($url),
                'trans' => $this->Surat_model->getTrans()
            ];
        $this->load->view('viewp', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function print($surat)
    {
        $warga = $this->input->post('warga');
        $nosurat = $this->input->post('nosurat');
        $id = $this->input->post('idsurat');
        $data =
            [
                'warga' => $this->Penduduk_model->getById($warga),
                'nosurat' => $nosurat,
                'id' => $id
            ];
        $this->load->view('surat/' . $surat, $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function simpan()
    {
        $this->Surat_model->save();

        $this->session->set_flashdata('success', 'Berhasil Mengajukan Surat KeRT');
        redirect(base_url('Viewp'));
    }
}
