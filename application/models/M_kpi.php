<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kpi extends CI_Model
{
    public function getKaryawan($idkaryawan)
    {
        //     return $this->db->get_where('data_karyawan', ['department_id' => $iddiv])->result();
        $this->db->select('*, detail_karyawan.nama');
        $this->db->from('data_karyawan');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan.karyawan_id', 'left');
        $this->db->where('divisi_id', $idkaryawan);
        return $this->db->get()->result();
    }

    public function getDataDivisi($iddiv)
    {
        return $this->db->get_where('divisi', ['department_id' => $iddiv])->result();
    }
}
