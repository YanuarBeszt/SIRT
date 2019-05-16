<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class WilayahDD_model extends CI_Model
{

    // Get provinces
    function getProvinces()
    {

        $response = array();

        // Select record
        $this->db->select('*');
        $q = $this->db->get('provinces');
        $response = $q->result_array();

        return $response;
    }

    // Get city
    function getCities($postData)
    {
        $response = array();

        // Select record
        $this->db->select('id,name');
        $this->db->where('province_id', $postData);
        $q = $this->db->get('regencies');

        $response = $q->result_array();

        return $response;
    }

    // Get kota untuk dropdown edit_profil
    function getkota()
    {
        $response = array();

        // Select record
        $this->db->select('id,name');
        $q = $this->db->get('regencies');

        $response = $q->result_array();

        return $response;
    }

    // Get Distric
    function getDistrics($postData)
    {
        $response = array();

        // Select record
        $this->db->select('id,name');
        $this->db->where('regency_id', $postData);
        $q = $this->db->get('districts');
        $response = $q->result_array();

        return $response;
    }

    // Get Villages
    function getVillages($postData)
    {
        $response = array();

        // Select record
        $this->db->select('id,name');
        $this->db->where('district_id', $postData);
        $q = $this->db->get('villages');
        $response = $q->result_array();

        return $response;
    }
}
