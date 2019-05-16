<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    function index()
    {
        $this->load->view('login');
        cek_loggedin();
    }

    function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->login_model->cek_login($username, $password);
        if (sizeof($cek) > 0) {
            $data_session = array(
                'nik' => $cek[0]->nik,
                'nama' => $cek[0]->namaPenduduk,
                'statusPdd' => $cek[0]->idstatusPdd
            );

            $this->session->set_userdata($data_session);

            if ($this->session->userdata('statusPdd') == 1) {
                redirect(base_url("View"));
            } else if ($this->session->userdata('statusPdd') == 2) {
                redirect(base_url("Viewp"));
            }
        } else {
            echo "<script>
                    alert('Login Gagal, NIK atau Password Salah!');
                    window.location='" . base_url('Login') . "'
                </script>";
        }
    }

    function logout()
    {
        $session = array('nik', 'statusPdd', 'previous_url');
        $this->session->unset_userdata($session);
        redirect(base_url('Login'));
    }
}
