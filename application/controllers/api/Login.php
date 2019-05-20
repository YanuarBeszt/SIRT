<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Login extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->model('Penduduk_model');
    }

    //login  
    function index_post()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->Login_model->cek_login($username, $password);

        if (sizeof($result) == 1) {
            if ($result[0]->idstatusPdd == 1) {
                $data =
                    [
                        'login' => $result,
                        'success' => '1',
                        'pesan' => 'RT Berhasil Login'
                    ];
                echo json_encode($data);
            }
            if ($result[0]->idstatusPdd == 2) {
                $data =
                    [
                        'login' => $result,
                        'success' => '2',
                        'pesan' => 'Warga Berhasil Login'
                    ];
                echo json_encode($data);
            }
        } else {
            $data =
                [
                    'login' => 'NIK Tidak Ditemukan',
                    'pesan' => 'Gagal Login'
                ];
            echo json_encode($data);
        }
    }

    public function index_get()
    {
        $id = $this->get('nik');
        if ($id === NULL) {
            $query = $this->Penduduk_model->getAll();
            echo json_encode($query);
        } else {
            $query = $this->Penduduk_model->getById($id);
            echo json_encode($query);
        }
    }
}
