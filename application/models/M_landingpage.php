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
        $this->db->select('*,  wilayah_kota.nama AS kota, wilayah_provinsi.nama AS provinsi');

        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id = lowongan.perusahaan_id');
        $this->db->join('wilayah_kota', 'wilayah_kota.id = perusahaan.kota');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = perusahaan.provinsi');
        $sql =  $this->db->get()->result_array();
        return $sql;
    }
    public function lowongan_lan($limit, $start)
    {
        // $this->db->select('*');
        // $this->db->from('lowongan');

        // $query = "SELECT * FROM lowongan ORDER BY id_lowongan ASC";
        // $this->db->select('*');
        // $this->db->from('lowongan');
        // $this->db->limit(3);
        // $query = $this->db->get();
        // return $query->result();
        $this->db->select('*,  wilayah_kota.nama AS kota, wilayah_provinsi.nama AS provinsi');

        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id = lowongan.perusahaan_id');
        $this->db->join('wilayah_kota', 'wilayah_kota.id = perusahaan.kota');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = perusahaan.provinsi');
        return $this->db->get('', $limit, $start)->result_array();
    }
    // get jumlah data lowongan
    public function countAllLowongan()
    {
        return $this->db->get('lowongan')->num_rows();
    }

    public function departemen($limit, $start)
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
        $this->db->select('*, department.id AS dept_id, department.nama, perusahaan.nama_perusahaan, department.fungsi, department.peran');
        $this->db->from('department');
        $this->db->join('perusahaan', 'perusahaan.id = department.perusahaan');
        return $this->db->get()->result_array();
    }
    public function artikel($limit, $start)
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

    public function rowLowongan($data_id)
    {
        $this->db->select('*, wilayah_kota.nama AS kota, wilayah_provinsi.nama AS provinsi');
        $this->db->from('lowongan');
        $this->db->join('perusahaan', 'perusahaan.id = lowongan.perusahaan_id');
        $this->db->join('wilayah_kota', 'wilayah_kota.id = perusahaan.kota');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = perusahaan.provinsi');


        $this->db->where('id_lowongan', $data_id);

        return $this->db->get();
    }
    public function get_slider()
    {
        $this->db->select('*');

        $this->db->from('banner');

        return $this->db->get();
    }
}
