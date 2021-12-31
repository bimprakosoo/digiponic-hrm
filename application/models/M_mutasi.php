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

    public function get_DataMutasi2()
    {
        $this->db->select(' mutasi.id, mutasi.tgl_pengajuan,
        users.nama AS userID,
        department.nama AS namaDepartment,
        divisi.nama AS namaDivisi,
        jabatan.nama AS namaJabatan,
        golongan.nama AS namaGolongan,
        posisi.nama AS namaPosisi,
        penempatan.nama AS namaPenempatan,
        mutasi.jenis_mutasi, mutasi.status');
        $this->db->from('mutasi');
        $this->db->join('users', 'users.id = mutasi.karyawan_id');
        $this->db->join('department', 'department.id = mutasi.department_id');
        $this->db->join('divisi', 'divisi.id = mutasi.divisi_id');
        $this->db->join('jabatan', 'jabatan.id= mutasi.jabatan_id');
        $this->db->join('golongan', 'golongan.id = mutasi.golongan_id');
        $this->db->join('posisi', 'posisi.id = mutasi.posisi_id');
        $this->db->join('penempatan', 'penempatan.id = mutasi.penempatan_id');

        return $this->db->get();
    }
}
