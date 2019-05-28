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

        $this->db->select('tb_penduduk.nokk, tb_penduduk.namaPenduduk, tb_kk.alamat, tb_kk.alamat, tb_kk.kodepos, tb_kk.rt, tb_kk.rw, tb_kk.idProvinsi, provinces.name AS prov, tb_kk.idKabupaten, regencies.name AS kab, tb_kk.idKecamatan, districts.name AS kec, tb_kk.idkelurahan, villages.name AS kel');
        // return $this->db->get_where($this->_table, ["nik" => $id])->row_array();
        $this->db->from('tb_penduduk');
        $this->db->join('tb_kk', 'tb_kk.nokk=tb_penduduk.nokk', 'left');
        $this->db->join('provinces', 'provinces.idProvinces=tb_kk.idProvinsi', 'left');
        $this->db->join('regencies', 'regencies.idRegencies=tb_kk.idKabupaten', 'left');
        $this->db->join('districts', 'districts.idDistrics=tb_kk.idKecamatan', 'left');
        $this->db->join('villages', 'villages.idVillages=tb_kk.idkelurahan', 'left');
        $this->db->where('idstatusKlg=1');
        $query = $this->db->get();
        return $query->result();
    }

    public function getById($id)
    {

        $this->db->select('tb_kk.nokk, tb_kk.alamat, tb_kk.alamat, tb_kk.kodepos, tb_kk.rt, tb_kk.rw, tb_kk.idProvinsi, provinces.name AS prov, tb_kk.idKabupaten AS idkota, regencies.name AS kab, tb_kk.idKecamatan, districts.name AS kec, tb_kk.idkelurahan, villages.name AS kel');
        // return $this->db->get_where($this->_table, ["nik" => $id])->row_array();
        $this->db->from('tb_kk');
        $this->db->join('provinces', 'provinces.idProvinces=tb_kk.idProvinsi', 'left');
        $this->db->join('regencies', 'regencies.idRegencies=tb_kk.idKabupaten', 'left');
        $this->db->join('districts', 'districts.idDistrics=tb_kk.idKecamatan', 'left');
        $this->db->join('villages', 'villages.idVillages=tb_kk.idkelurahan', 'left');
        $this->db->where("nokk='$id'");
        $query = $this->db->get();
        return $query->row_array();
    }

    public function jumlahKK()
    {
        $this->db->select("COUNT('nokk')");
        $this->db->from('tb_kk');
        $query = $this->db->get()->row_array();
        return $query["COUNT('nokk')"];
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
        $this->idKabupaten = $post["idKabupaten"];
        $this->idKecamatan = $post["idKecamatan"];
        $this->idkelurahan = $post["idkelurahan"];
        $this->db->update($this->_table, $this, array('nokk' => $post['nokk']));
    }

    //delete data sesuai dengan id
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nokk" => $id));
    }
}
