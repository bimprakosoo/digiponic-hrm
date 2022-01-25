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
}
