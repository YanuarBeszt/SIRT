<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kkeluarga_model');
        $this->load->model('WilayahDD_model');
        $this->load->model('Penduduk_model');
        cek_nik();
        cek_statusWarga();
    }

    public function index()
    {
        $data =
            [
                'isinya' => 'admin/penduduk',
                'kk' => $this->Kkeluarga_model->getKK(),
                'provinces' => $this->WilayahDD_model->getProvinces(),
                'hubkk' => $this->Kkeluarga_model->getHubKK(),
                'agama' => $this->Kkeluarga_model->getAgama(),
                'negaraan' => $this->Kkeluarga_model->getKwn(),
                'pendidikan' => $this->Kkeluarga_model->getPdd(),
                'pekerjaan' => $this->Kkeluarga_model->getPkj(),
                'perkawinan' => $this->Kkeluarga_model->getPkw()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function Simpan()
    {
        $penduduk = $this->Penduduk_model;
        $penduduk->save();
        $this->session->set_flashdata('success', 'Berhasil menambahkan Penduduk');
        $this->index();
    }
}
