<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengajuan extends CI_Model
{
    // get ---------------------------
    public function pengajuanCuti()
    {
        return $this->db->get_where('data_cuti', ['karyawan_id' => $this->session->userdata('idusers')])->result_array();
    }

    // insert ----------------------------------------------------------------
    public function insert_pengajuanCuti($data)
    {
        $this->db->insert('data_cuti', $data);
    }

    public function getDataCuti()
    {
        $this->db->select('data_cuti.*, detail_karyawan.nama, datediff(tgl_selesai, tgl_mulai) as lama_cuti');
        $this->db->from(' data_cuti');
        $this->db->join('detail_karyawan', 'data_cuti.karyawan_id = detail_karyawan.id', 'left');
        $this->db->order_by('status', 'asc');

        return $this->db->get();
    }

    public function getDataResign()
    {
        $this->db->select('data_resign.*, detail_karyawan.nama');
        $this->db->from(' data_resign');
        $this->db->join('detail_karyawan', 'data_resign.karyawan_id = detail_karyawan.id', 'left');
        $this->db->order_by('status', 'asc');

        return $this->db->get();
    }



    public function updateCuti($update_status, $ids)
    {
        $this->db->set($update_status);
        $this->db->where('id', $ids);
        $this->db->update('data_cuti');
    }

    public function updateResign($update_status, $ids)
    {
        $this->db->set($update_status);
        $this->db->where('id', $ids);
        $this->db->update('data_resign');
    }
}
