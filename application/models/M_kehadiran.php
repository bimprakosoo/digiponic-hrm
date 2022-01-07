<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kehadiran extends CI_Model
{

    public function getAbsensi($iduser)
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where('karyawan_id', $iduser);

        return $this->db->get();
    }

    public function postCheckIn($data)
    {
        return $this->db->insert('absensi', $data);
    }

    public function putCheckOut($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('absensi')->row_array();
    }

    public function getDateToday($iduser)
    {
        $absen = "SELECT *, DATE_FORMAT(absensi.tanggal, '%Y-%m-%d') 
        FROM absensi
        WHERE absensi.karyawan_id = $iduser AND DATE(tanggal) = CURDATE();";
        return $this->db->query($absen)->result_array();
        // return $this->db->get('absensi')->row_array();
    }



    public function updateAbsen($dates, $data, $iduser)
    {
        // UPDATE `absensi` SET `jam_keluar` = '11:40:47' WHERE `absensi`.`id` = 2;
        $array = array('tanggal' => $dates, 'karyawan_id' => $iduser);
        $this->db->where($array);
        $this->db->update('absensi', $data);
    }
}
