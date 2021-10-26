<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    // get data lamaran masuk
    public function lamaran_masuk()
    {
        $this->db->select('*');
        $this->db->from('data_lamaran');
        // $this->db->where('role_id', 1);
        return $this->db->get();
    }

    // get data lamaran masuk
    public function data_karyawan()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        // $this->db->where('role_id', 1);
        return $this->db->get();
    }

    // btn lamaran diterima
    public function diterima()
    {
        // get or post
    }

    // btn lamaran di tolak
    public function ditolak()
    {
        // delete or change status
    }

    // function insert_into()
    // {

    //     $q = $this->db->get('data_lamaran')->result(); // get first table
    //     foreach ($q as $r) { // loop over results
    //         $this->db->update('tbl_karyawan', $r, array('id' => $r->id)); // insert each row to another table
    //     }
    // }
}
