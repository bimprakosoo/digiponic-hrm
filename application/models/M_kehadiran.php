<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kehadiran extends CI_Model
{
    // ----- Admin -----

    // getData
    public function getAllIzinPengajuan()
    {
        $this->db->select('izin.id, izin.date_created AS tanggal, izin.time_created AS jam, izin.image, keterangan, izin.status as statuss, users.nama');
        $this->db->from('izin');
        $this->db->join('users', 'users.id = izin.karyawan_id');
        $this->db->where('izin.status', '0');

        return $this->db->get()->result_array();
    }

    public function getAllTerimaPengajuan()
    {
        $this->db->select('izin.id, izin.date_created AS tanggal, izin.time_created AS jam, izin.image, keterangan, izin.status as statuss, users.nama');
        $this->db->from('izin');
        $this->db->join('users', 'users.id = izin.karyawan_id');
        $this->db->where('izin.status', '1');

        return $this->db->get()->result_array();
    }

    public function getAllTolakPengajuan()
    {
        $this->db->select('izin.id, izin.date_created AS tanggal, izin.time_created AS jam, izin.image, keterangan, izin.status as statuss, users.nama');
        $this->db->from('izin');
        $this->db->join('users', 'users.id = izin.karyawan_id');
        $this->db->where('izin.status', '2');

        return $this->db->get()->result_array();
    }

    public function getUserKehadiran()
    {
        $this->db->select('detail_karyawan.id, 
        detail_karyawan.nama,
         kehadiran.`status`,
         kehadiran.tanggal');
        $this->db->from('detail_karyawan');
        $this->db->join('kehadiran', 'kehadiran.user_id = detail_karyawan.id', 'left');
        // $this->db->where('kehadiran.tanggal', $today);

        // $query = $this->db->query('SELECT
        // detail_karyawan.id,
        // detail_karyawan.nama,
        // `status` = ( SELECT `status` FROM kehadiran WHERE tanggal = ', $today, ')
        // FROM
        // detail_karyawan');
        // return $this->db->get($query);
        return $this->db->get();
    }

    public function getUserKehadiran2($today)
    {
        $this->db->select('detail_karyawan.id, detail_karyawan.nama, kehadiran.`status`');
        $this->db->from('detail_karyawan');
        $this->db->join('kehadiran', 'kehadiran.user_id = detail_karyawan.id', 'left');
        $this->db->where('kehadiran.tanggal', $today);

        return $this->db->get();
    }

    // insertData
    public function insertUser($data)
    {
        // foreach ($data as $d) {
        //   $array = array('user_id' => $d, 'status' => $d);
        // }
        // var_dump($array); die;
        $this->db->insert('kehadiran', $data);
    }

    // updateData
    function updateIzin($update_status, $ids)
    {
        $this->db->where('id', $ids);
        $this->db->update('izin', $update_status);
    }






    // karyawan
    public function getAbsensi($iduser)
    {
        $this->db->select('*');
        $this->db->from('absensi');
        $this->db->where('karyawan_id', $iduser);

        return $this->db->get();
    }

    public function getIzin($idUser)
    {
        $this->db->select('*');
        $this->db->from('izin');
        $this->db->where('karyawan_id', $idUser);

        return $this->db->get();
    }

    public function postCheckIn($data)
    {
        return $this->db->insert('absensi', $data);
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

    public function postIzin($data)
    {
        return $this->db->insert('izin', $data);
    }
}
