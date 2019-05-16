<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
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
        $nik = $this->session->userdata('nik');
        $data =
            [
                'isinya' => 'admin/profil',
                'pend' => $this->Penduduk_model->getById($nik)
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function edit()
    {
        $nik = $this->session->userdata('nik');
        $data =
            [
                'isinya' => 'admin/edit_profil',
                'pend' => $this->Penduduk_model->getById($nik),
                'provinces' => $this->WilayahDD_model->getProvinces(),
                'kota' => $this->WilayahDD_model->getkota(),
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
}
