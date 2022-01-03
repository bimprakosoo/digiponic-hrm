<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kehadiran extends CI_Model
{
    // karyawan | tgl_checkin | jam_masuk| jam_keluar
    public function getAbsensi($userid)
    {
        $this->db->select('absensi_masuk.karyawan_id AS karyawan, absensi_masuk.tgl_checkin,absensi_masuk.jam AS jam_masuk, absensi_keluar.jam AS jam_keluar');
        $this->db->from('absensi_masuk');
        $this->db->join('absensi_keluar', 'absensi_masuk.karyawan_id = absensi_keluar.karyawan_id');
        $this->db->where('absensi_masuk.karyawan_id', $userid);
        $this->db->group_by('tgl_checkin');

        return $this->db->get();
    }

    public function postCheckIn($data)
    {
        return $this->db->insert('absensi_masuk', $data);
    }
    public function postCheckOut($data)
    {
        return $this->db->insert('absensi_keluar', $data);
    }
}
