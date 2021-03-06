<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DetailPenduduk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kkeluarga_model');
        $this->load->model('WilayahDD_model');
        $this->load->model('Penduduk_model');
        $this->load->model('Login_model');
        cek_nik();
        cek_statusWarga();
    }

    public function index()
    {
        $data =
            [
                'isinya' => 'admin/detailpenduduk',
                'penduduk' => $this->Penduduk_model->getAll(),
                'kk' => $this->Kkeluarga_model->jumlahKK(),
                'pdd' => $this->Penduduk_model->jumlahPdd(),
                'laki' => $this->Penduduk_model->jumlahLaki(),
                'balita' => $this->Penduduk_model->jumlahBalita()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function DaftarKK()
    {
        $data =
            [
                'isinya' => 'admin/daftarkk',
                'isi' => $this->Kkeluarga_model->getAll()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function Hapus($nik)
    {
        $this->Penduduk_model->delete($nik);
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data Penduduk');
        redirect(index_page());
    }

    public function HapusKK($nokk)
    {
        $this->Kkeluarga_model->delete($nokk);
        $this->session->set_flashdata('success', 'Berhasil Menghapus Data Kartu Keluarga');
        $previous_url = $this->session->userdata('previous_url');
        redirect($previous_url);
    }

    public function edit($nik)
    {
        $data =
            [
                'isinya' => 'admin/edit_warga',
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

    public function EditKK($id)
    {
        $data =
            [
                'isinya' => 'admin/edit_kk',
                'kk' => $this->Kkeluarga_model->getById($id),
                'provinces' => $this->WilayahDD_model->getProvinces()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function UpdateKK()
    {
        $kk = $this->Kkeluarga_model;
        $kk->update();
        $this->session->set_flashdata('success', 'Berhasil Mengubah Data Kartu Keluarga');
        $this->DaftarKK();
    }

    public function Update()
    {
        $penduduk = $this->Penduduk_model;
        $penduduk->update();
        $this->session->set_flashdata('success', 'Berhasil Mengubah Data Penduduk');
        $this->index();
    }

    public function GantiPassword($nik)
    {
        $data =
            [
                'isinya' => 'admin/gantipass_warga',
                'nik' => $nik
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function UpdatePassword()
    {
        $username = $this->input->post('nik');
        $password = $this->input->post('pass_lama');
        $password2 = $this->input->post('pass_baru');
        $password3 = $this->input->post('pass_ulang');
        $cek = $this->Login_model->cek_login($username, $password);
        if (sizeof($cek) > 0) {
            if (strcmp($password2, $password3) == 0) {
                $this->Penduduk_model->change_pass($username, $password2);
                $this->session->set_flashdata('success', 'Berhasil Mengganti Password');
                $this->GantiPassword($username);
            } else {
                $this->session->set_flashdata('Gagal', 'Password Baru Berbeda');
                $this->GantiPassword($username);
            }
        } else {
            $this->session->set_flashdata('Gagal', 'Password Lama Salah');
            $this->GantiPassword($username);
        }
    }
}
