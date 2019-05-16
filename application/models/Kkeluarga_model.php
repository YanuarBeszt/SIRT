<?php defined('BASEPATH') or exit('NO direct scri[t access allowed');

class Kkeluarga_model extends CI_Model
{
    //mendifinisikan variabel table secara private
    private $_table = "tb_kk";
    private $_tbstatusKlg = "tb_statusKlg";
    private $_tbpdd = "tb_pendidikan";
    private $_tbpkj = "tb_pekerjaan";
    private $_tbkwn = "tb_kwn";
    private $_tbpkw = "tb_statusPkw";
    private $_tbagama = "tb_agama";

    //mendefinisikan variabel data barang secara public
    public $nokk;
    public $alamat;
    public $kodePos;
    public $rt;
    public $rw;
    public $idProvinsi;
    public $idKabupaten;
    public $idKecamatan;
    public $idkelurahan;


    //membuat fungsi rules untuk validasi inputan data
    public function rules()
    {
        return [
            [
                'field' => 'nokk',
                'label' => 'No Kartu Keluarga',
                'rules' => 'numeric',
            ],
            [
                'field' => 'alamat',
                'label' => 'Alamat',
                'rules' => 'required',
            ],
            [
                'field' => 'kodePos',
                'label' => 'Kode Pos',
                'rules' => 'numeric',
            ],
            [
                'field' => 'idProvinsi',
                'label' => 'Provinsi',
                'rules' => 'numeric',
            ],
            [
                'field' => 'idKabupaten',
                'label' => 'Kabupaten',
                'rules' => 'numeric',
            ],
            [
                'field' => 'idKecamatan',
                'label' => 'Kecamatan',
                'rules' => 'numeric',
            ],
            [
                'field' => 'idkelurahan',
                'label' => 'Kelurahan',
                'rules' => 'numeric',
            ]
        ];
    }

    //mengambil semua data dari database
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    // Get KK
    function getKK()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get($this->_table);
        $response = $q->result_array();

        return $response;
    }

    // Get status kekeluargaan
    function getHubKK()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get($this->_tbstatusKlg);
        $response = $q->result_array();

        return $response;
    }
    // Get Hubungan kekeluargaan
    function getAgama()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get($this->_tbagama);
        $response = $q->result_array();

        return $response;
    }

    // Get Hubungan kekeluargaan
    function getKwn()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get($this->_tbkwn);
        $response = $q->result_array();

        return $response;
    }

    // Get Hubungan kekeluargaan
    function getPdd()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get($this->_tbpdd);
        $response = $q->result_array();

        return $response;
    }

    // Get Hubungan kekeluargaan
    function getPkj()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get($this->_tbpkj);
        $response = $q->result_array();

        return $response;
    }

    // Get Hubungan kekeluargaan
    function getPkw()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get($this->_tbpkw);
        $response = $q->result_array();

        return $response;
    }

    //menyimpan data ke database
    public function save()
    {
        $post = $this->input->post();
        $this->nokk = $post["nokk"];
        $this->alamat = $post["alamat"];
        $this->kodePos = $post["kodepos"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->idProvinsi = $post["idProvinsi"];
        $this->idKabupaten = $post["idKabupaten"];
        $this->idKecamatan = $post["idKecamatan"];
        $this->idkelurahan = $post["idkelurahan"];
        $this->db->insert($this->_table, $this);
    }

    //mengganti data sesuai dengan apa yang dipilih
    public function update()
    {
        $post = $this->input->post();
        $this->nokk = $post["nokk"];
        $this->alamat = $post["alamat"];
        $this->kodePos = $post["kodepos"];
        $this->rt = $post["rt"];
        $this->rw = $post["rw"];
        $this->idProvinsi = $post["idProvinsi"];
        $this->idKabupateb = $post["idKabupaten"];
        $this->idKecamatan = $post["idKecamatan"];
        $this->idkelurahan = $post["idkelurahan"];
        $this->db->insert($this->_table, $this, array('nokk' => $post['nokk']));
    }

    //delete data sesuai dengan id
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nokk" => $id));
    }
}
