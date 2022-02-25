<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_dashboard_karyawan extends CI_Model
{
    // unutk pengecekan asbensi karyawan di dashboard
    public function get_statusAbsensi($id)
    {
        $this->db->select('*');
        $this->db->where('user_id', $id);
        $this->db->order_by('tanggal', 'desc');

        return $this->db->get('kehadiran', 1);
    }
}
