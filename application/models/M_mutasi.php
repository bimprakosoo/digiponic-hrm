<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_mutasi extends CI_Model
{
    public function data_karyawan()
    {
        $this->db->select('*');
         $this->db->from('tbl_karyawan');
        $this->db->join('department', 'tbl_karyawan.id_departemen = department.id_departemen');

        // $this->db->where('role_id', 1);
        return $this->db->get();
    }
    public function getDataDepartment()
    {
        return $this->db->get('department');
    }
}