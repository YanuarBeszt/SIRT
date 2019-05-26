<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KK extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('javascript');
        $this->load->model('Kkeluarga_model');
        $this->load->library('form_validation');
        cek_nik();
        cek_statusWarga();
    }

    public function index()
    {
        // load model 
        $this->load->model('WilayahDD_model');
        $data =
            [
                'isinya' => 'admin/kk',
                'provinces' => $this->WilayahDD_model->getProvinces()
            ];
        $this->load->view('view', $data);

        $this->session->set_userdata('previous_url', current_url());
    }

    public function getCities()
    {
        // load model 
        $this->load->model('WilayahDD_model');
        // POST data 
        $postData = $this->input->post('regencies');
        // get data 
        $data = $this->WilayahDD_model->getCities($postData);

        echo json_encode($data);
    }

    public function getDistrics()
    {
        // load model 
        $this->load->model('WilayahDD_model');
        // POST data 
        $postData = $this->input->post('districs');

        // get data 
        $data = $this->WilayahDD_model->getDistrics($postData);
        echo json_encode($data);
    }

    public function getVillages()
    {
        // load model 
        $this->load->model('WilayahDD_model');
        // POST data 
        $postData = $this->input->post('villages');

        // get data 
        $data = $this->WilayahDD_model->getVillages($postData);
        echo json_encode($data);
    }

    public function Simpan()
    {
        $kk = $this->Kkeluarga_model;
        $validation = $this->form_validation;
        $validation->set_rules($kk->rules());

        if ($validation->run()) {
            $kk->save();
            $this->session->set_flashdata('success', 'Berhasil menambahkan KK');
        }
        redirect(index_page());
    }

    public function Edit($id)
    {
        $where = array('nokk' => $id);
        $data['kk'] = $this->m_data->edit_data($where, 'tb_kk')->result();
        $this->load->view('v_edit', $data);
    }
}
