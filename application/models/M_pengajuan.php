<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pengajuan extends CI_Model
{

    // insert ----------------------------------------------------------------
    public function insert_pengajuanCuti($data)
    {
        $this->db->insert('data_cuti', $data);
    }
}
