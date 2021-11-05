<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_landingpage extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    // get data lowongan
    public function lowongan()
    {
        // $this->db->select('*');
        // $this->db->from('lowongan');

        // $this->db->where('role_id', 1);
        return $this->db->get('lowongan')->result_array();
    }
    public function lowongan_lan( $limit, $start)
    {
        // $this->db->select('*');
        // $this->db->from('lowongan');

        // $query = "SELECT * FROM lowongan ORDER BY id_lowongan ASC";
        // $this->db->select('*');
        // $this->db->from('lowongan');
        // $this->db->limit(3);
        // $query = $this->db->get();
        // return $query->result();

        return $this->db->get('lowongan', $limit, $start)->result_array();
    }
    // get jumlah data lowongan
    public function countAllLowongan()
    {
        return $this->db->get('lowongan')->num_rows();
    }

    
}
