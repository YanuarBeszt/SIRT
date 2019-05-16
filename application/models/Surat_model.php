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
        $this->db->select('tb_transaksi.id, tb_penduduk.namaPenduduk, tb_transaksi.tanggal, tb_surat.nama');
        $this->db->from('tb_transaksi');
        $this->db->join('tb_penduduk', 'tb_transaksi.nik=tb_penduduk.nik', 'left');
        $this->db->join('tb_surat', 'tb_transaksi.idsurat=tb_surat.id', 'left');
        $this->db->where(["status" => "1"]);
        $query = $this->db->get();
        return $query->result();
    }
}
