<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    function cek_login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('tb_penduduk');
        $this->db->where('nik', $username);
        $this->db->where('password', sha1($password));
        $query = $this->db->get()->result();
        return $query;
    }
}
