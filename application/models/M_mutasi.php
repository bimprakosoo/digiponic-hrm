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
        return $this->db->get('detail_karyawan');
    }

    public function getAllGolongan()
    {
        return $this->db->get('golongan');
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
        return $this->db->get_where('posisi', ['jabatan_id' => $idpos])->result();
    }

    public function get_DataMutasi2()
    {
        $this->db->select(' mutasi.id, mutasi.karyawan_id,
        mutasi.tgl_pengajuan,
        mutasi.jenis_mutasi,
        mutasi.status,
        detail_karyawan.nama AS userID,
        department.nama AS namaDepartment,
        divisi.nama AS namaDivisi,
        jabatan.nama AS namaJabatan,
        golongan.nama AS namaGolongan,
        posisi.nama AS namaPosisi,
        penempatan.nama AS namaPenempatan
        ');
        $this->db->from('mutasi');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = mutasi.karyawan_id');
        $this->db->join('department', 'department.id = mutasi.department_id');
        $this->db->join('divisi', 'divisi.id = mutasi.divisi_id');
        $this->db->join('jabatan', 'jabatan.id= mutasi.jabatan_id');
        $this->db->join('golongan', 'golongan.id = mutasi.golongan_id');
        $this->db->join('posisi', 'posisi.id = mutasi.posisi_id');
        $this->db->join('penempatan', 'penempatan.id = mutasi.penempatan_id');

        return $this->db->get();
    }

    public function update_dataMutasiKaryawan($update_datakaryawan, $IDmutasi)
    {
        // update data karyawan dari mutasi

        $this->db->set($update_datakaryawan);
        $this->db->where('karyawan_id', $IDmutasi);
        $this->db->update('data_karyawan');
    }
    public function editmutasi($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tbl_karyawan')->row_array();
    }
}
