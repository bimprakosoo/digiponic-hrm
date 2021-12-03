<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_mutasi extends CI_Model
{
    public function data_karyawan()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');

        // $this->db->where('role_id', 1);
        return $this->db->get();
    }

    public function getAllKaraywan()
    {
        return $this->db->get('tbl_karyawan');
    }

    function getAllDepartment()
    {
        return $this->db->get('department');
    }

    public function getDataDivisi($iddiv)
    {
        return $this->db->get_where('divisi', ['department_id' => $iddiv])->result();
    }

    public function getDataJabatan($idjab)
    {
        return $this->db->get_where('jabatan', ['divisi_id' => $idjab])->result();
    }

    public function getDataGolongan($idgol)
    {
        return $this->db->get_where('golongan', ['jabatan_id' => $idgol])->result();
    }

    public function getDataPosisi($idpos)
    {
        return $this->db->get_where('posisi', ['golongan_id' => $idpos])->result();
    }
}
