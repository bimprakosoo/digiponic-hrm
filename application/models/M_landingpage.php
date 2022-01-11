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
        // return $this->db->get('lowongan')->result_array();
        $this->db->select('*');
        $this->db->from('lowongan');
        $sql =  $this->db->get()->result_array();
        return $sql; 
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

    public function departemen( $limit, $start)
    {
        // $this->db->select('*');
        // $this->db->from('lowongan');

        // $query = "SELECT * FROM lowongan ORDER BY id_lowongan ASC";
        // $this->db->select('*');
        // $this->db->from('lowongan');
        // $this->db->limit(3);
        // $query = $this->db->get();
        // return $query->result();

        return $this->db->get('department', $limit, $start)->result_array();
    }
    public function getDataDepartment()
    {
        // return $this->db->get('department');
        $this->db->select('department.id AS dept_id, department.nama, perusahaan.nama_perusahaan, department.fungsi, department.peran');
        $this->db->from('department');
        $this->db->join('perusahaan', 'perusahaan.id = department.perusahaan');
        return $this->db->get();
    }
    public function artikel( $limit, $start)
    {
        // $this->db->select('*');
        // $this->db->from('lowongan');

        // $query = "SELECT * FROM lowongan ORDER BY id_lowongan ASC";
        // $this->db->select('*');
        // $this->db->from('lowongan');
        // $this->db->limit(3);
        // $query = $this->db->get();
        // return $query->result();

        return $this->db->get('artikel', $limit, $start)->result_array();
    }
     
    public function getDataArtikel()
    {
        $this->db->select('*');
        $this->db->from('artikel');

        return $this->db->get();
    }
    
}
