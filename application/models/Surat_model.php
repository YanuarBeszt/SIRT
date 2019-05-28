<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Surat_model extends CI_Model
{
    private $_table = "tb_surat";
    //mengambil semua data dari database
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    //mengambil data surat telah dicetak dari database
    public function suratTelahCetak()
    {
        $this->db->select('tb_transaksi.id, tb_penduduk.namaPenduduk, tb_transaksi.tanggal, tb_surat.nama');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_penduduk', 'tb_transaksi.nik=tb_penduduk.nik', 'left');
        $this->db->join('tb_surat', 'tb_transaksi.idsurat=tb_surat.id', 'left');
        $this->db->where(["status" => "2"]);
        $query = $this->db->get();
        return $query->result();
    }

    //mengambil data surat belum dicetak dari database
    public function suratBelumCetak()
    {
        $this->db->select('tb_transaksi.idTransaksi, tb_transaksi.nik, tb_surat.url_surat, tb_penduduk.namaPenduduk, tb_transaksi.tanggal, tb_surat.nama');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_penduduk', 'tb_transaksi.nik=tb_penduduk.nik', 'left');
        $this->db->join('tb_surat', 'tb_transaksi.idsurat=tb_surat.idSurat', 'left');
        $this->db->where(["status" => "1"]);
        $query = $this->db->get();
        return $query->result();
    }

    //mengambil data sesuai id dari databse
    public function getByUrl($url)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where(['url_surat' => $url]);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function getTrans()
    {
        $this->db->select_max('idTransaksi');
        $query  = $this->db->get('tb_transaksi');
        return $query->row_array();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->idTransaksi = $post["nosurat"];
        $this->nik = $post["warga"];
        $this->idsurat = $post["idsurat"];
        $this->tanggal = $post["tanggal"];
        $this->ket = $post["ket"];
        $this->status = $post["status"];
        $this->db->insert('tb_transaksi', $this);
    }

    public function changeStatus()
    {
        $post = $this->input->post();
        $this->status = $post["status"];
        $this->db->update('tb_transaksi', $this, array('idTransaksi' => $post['nosurat']));
    }

    public function delete($id)
    {
        return $this->db->delete('tb_transaksi', array("idTransaksi" => $id));
    }
}
