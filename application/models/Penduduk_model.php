<?php defined('BASEPATH') or exit('NO direct scri[t access allowed');

class Penduduk_model extends CI_Model
{
    //mendifinisikan variabel table secara private
    private $_table = "tb_penduduk";
    private $_tbKelamin = "tb_kelamin";
    private $_tbRegency = "regencies";
    private $_tbAgama = "tb_agama";
    private $_tbKwn = "tb_kwn";
    private $_tbPekerjaan = "tb_pekerjaan";
    private $_tbpendidikan = "tb_pendidikan";
    private $_tbPkw = "tb_statusPkw";
    private $_tbKlg = "tb_statusKlg";

    //mendefinisikan variabel data barang secara public
    public $nokk;
    public $nik;
    public $namaPenduduk;
    public $idkelamin;
    public $tempatLahir;
    public $tanggalLahir;
    public $idAgama;
    public $idPendidikan;
    public $idPekerjaan;
    public $idstatusPdd;
    public $idkwn;
    public $idstatusKlg;
    public $idstatusPkw;
    public $password;

    //membuat fungsi rules untuk validasi inputan data
    public function rules()
    {
        return [
            [
                'field' => 'nokk',
                'label' => 'No Kartu Keluarga',
                'rules' => 'required'
            ],
            [
                'field' => 'nik',
                'label' => 'NIK',
                'rules' => 'numeric'
            ],
            [
                'field' => 'namaPenduduk',
                'label' => 'Nama Penduduk',
                'rules' => 'required'
            ],
            [
                'field' => 'idkelamin',
                'label' => 'Kelamin',
                'rules' => 'numeric'
            ],
            [
                'field' => 'tempatLahir',
                'label' => 'Tempat Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'tanggalLahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required'
            ],
            [
                'field' => 'idAgama',
                'label' => 'Agama',
                'rules' => 'required'
            ],
            [
                'field' => 'idPendidikan',
                'label' => 'Pendidikan',
                'rules' => 'required'
            ],
            [
                'field' => 'idPekerjaan',
                'label' => 'Pekerjaan',
                'rules' => 'required'
            ],
            [
                'field' => 'idstatusPdd',
                'label' => 'Status Penduduk',
                'rules' => 'required'
            ],
            [
                'field' => 'idkwn',
                'label' => 'Kewarganegaraan',
                'rules' => 'required'
            ],
            [
                'field' => 'idstatusKlg',
                'label' => 'Status Kekeluargaan',
                'rules' => 'required'
            ],
            [
                'field' => 'idstatusPkw',
                'label' => 'Status Perkawinan',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'Password'
            ]
        ];
    }

    //mengambil semua data dari database
    public function getAll()
    {
        $this->db->select('tb_penduduk.nokk, tb_penduduk.nik, tb_penduduk.namaPenduduk, tb_penduduk.tanggalLahir, tb_kelamin.ket AS kelamin, name, nama_agama, nama_pendidikan, nama_pekerjaan, country_name,tb_statusKlg.ket AS klg, tb_statusPkw.ket AS pkw');
        // return $this->db->get_where($this->_table, ["nik" => $id])->row_array();
        $this->db->from('tb_penduduk');
        $this->db->join($this->_tbKelamin, 'tb_kelamin.idKelamin=tb_penduduk.idkelamin', 'left');
        $this->db->join($this->_tbRegency, 'regencies.idRegencies=tb_penduduk.tempatLahir', 'left');
        $this->db->join($this->_tbAgama, 'tb_agama.idAgama=tb_penduduk.idAgama', 'left');
        $this->db->join($this->_tbpendidikan, 'tb_pendidikan.idPendidikan=tb_penduduk.idPendidikan', 'left');
        $this->db->join($this->_tbPekerjaan, 'tb_pekerjaan.idPekerjaan=tb_penduduk.idPekerjaan', 'left');
        $this->db->join($this->_tbKwn, 'tb_kwn.idKwn=tb_penduduk.idkwn', 'left');
        $this->db->join($this->_tbKlg, 'tb_statusKlg.idstatusKlg=tb_penduduk.idstatusKlg', 'left');
        $this->db->join($this->_tbPkw, 'tb_statusPkw.idstatusPkw=tb_penduduk.idstatusPkw', 'left');
        $query = $this->db->get();
        return $query->result();
    }

    public function jumlahPdd()
    {
        $this->db->select("COUNT('nik')");
        $this->db->from($this->_table);
        $query = $this->db->get()->row_array();
        return $query["COUNT('nik')"];
    }

    public function jumlahLaki()
    {
        $this->db->select("COUNT('idkelamin')");
        $this->db->from($this->_table);
        $this->db->where('idkelamin=1');
        $query = $this->db->get()->row_array();
        return $query["COUNT('idkelamin')"];
    }

    function jumlahBalita()
    {
        $y = date('Y') - 5;
        $this->db->select('COUNT(tanggalLahir)');
        $this->db->from($this->_table);
        $this->db->where("YEAR(tanggalLahir)>='$y'");
        $query = $this->db->get()->row_array();
        return $query['COUNT(tanggalLahir)'];
    }

    //mengambil data sesuai id dari databse
    public function getById($id)
    {
        $this->db->select('tb_penduduk.nokk, tb_kk.alamat,tb_kk.rw,tb_kk.rt, tb_penduduk.nik, tb_penduduk.namaPenduduk, tb_penduduk.tanggalLahir,tb_kelamin.idKelamin AS idkelamin, tb_kelamin.ket AS kelamin,regencies.idRegencies AS idkota, name,tb_agama.idAgama AS idagama, nama_agama,tb_pendidikan.idPendidikan AS idpendidikan, nama_pendidikan, tb_pekerjaan.idPekerjaan AS idpekerjaan, nama_pekerjaan,tb_kwn.idKwn AS idtemla, country_name,tb_statusKlg.idstatusKlg AS idstatusKlg, tb_statusKlg.ket AS klg,tb_penduduk.idstatusPdd, tb_statusPkw.idstatusPkw AS idstatusPkw, tb_statusPkw.ket AS pkw, tb_penduduk.password');
        $this->db->from('tb_penduduk');
        $this->db->join($this->_tbKelamin, 'tb_kelamin.idKelamin=tb_penduduk.idkelamin', 'left');
        $this->db->join($this->_tbRegency, 'regencies.idRegencies=tb_penduduk.tempatLahir', 'left');
        $this->db->join($this->_tbAgama, 'tb_agama.idAgama=tb_penduduk.idAgama', 'left');
        $this->db->join($this->_tbpendidikan, 'tb_pendidikan.idPendidikan=tb_penduduk.idPendidikan', 'left');
        $this->db->join($this->_tbPekerjaan, 'tb_pekerjaan.idPekerjaan=tb_penduduk.idPekerjaan', 'left');
        $this->db->join($this->_tbKwn, 'tb_kwn.idKwn=tb_penduduk.idkwn', 'left');
        $this->db->join($this->_tbKlg, 'tb_statusKlg.idstatusKlg=tb_penduduk.idstatusKlg', 'left');
        $this->db->join($this->_tbPkw, 'tb_statusPkw.idstatusPkw=tb_penduduk.idstatusPkw', 'left');
        $this->db->join('tb_kk', 'tb_kk.nokk=tb_penduduk.nokk', 'left');
        $this->db->where(["nik" => $id]);
        $query = $this->db->get();
        return $query->row_array();
    }

    //menyimpan data ke database
    public function save()
    {
        $post = $this->input->post();
        $this->nokk = $post["nokk"];
        $this->nik = $post["nik"];
        $this->namaPenduduk = $post["namaPenduduk"];
        $this->idkelamin = $post["idkelamin"];
        $this->tempatLahir = $post["tempatLahir"];
        $this->tanggalLahir = $post["tanggalLahir"];
        $this->idAgama = $post["idAgama"];
        $this->idPendidikan = $post["idPendidikan"];
        $this->idPekerjaan = $post["idPekerjaan"];
        $this->idstatusPdd = $post["idstatusPdd"];
        $this->idkwn = $post["idkwn"];
        $this->idstatusKlg = $post["idstatusKlg"];
        $this->idstatusPkw = $post["idstatusPkw"];
        $this->password = sha1($post["nik"]);
        $this->db->insert($this->_table, $this);
    }

    //mengganti data sesuai dengan apa yang dipilih
    public function update()
    {
        $post = $this->input->post();
        $this->nokk = $post["nokk"];
        $this->nik = $post["nik"];
        $this->namaPenduduk = $post["namaPenduduk"];
        $this->idkelamin = $post["idkelamin"];
        $this->tempatLahir = $post["tempatLahir"];
        $this->tanggalLahir = $post["tanggalLahir"];
        $this->idAgama = $post["idAgama"];
        $this->idPendidikan = $post["idPendidikan"];
        $this->idPekerjaan = $post["idPekerjaan"];
        $this->idstatusPdd = $post["idstatusPdd"];
        $this->idkwn = $post["idkwn"];
        $this->idstatusKlg = $post["idstatusKlg"];
        $this->idstatusPkw = $post["idstatusPkw"];
        $this->password = $post["password"];
        $this->db->update($this->_table, $this, array('nik' => $post['nik']));
    }

    //delete data sesuai dengan id
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("nik" => $id));
    }

    //ganti password
    function change_pass($id, $new_pass)
    {
        $pass = sha1($new_pass);
        $this->db->query("UPDATE tb_penduduk set password='$pass'  where nik='$id'");
    }
}
