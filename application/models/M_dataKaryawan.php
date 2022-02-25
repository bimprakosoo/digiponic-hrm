<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dataKaryawan extends CI_Model
{
    // getData
    public function getDataLamaran2($dapat_id)
    {
        $this->db->select('data_lamaran.*,
        lowongan.perusahaan_id,
        lowongan.department_id,
        lowongan.divisi_id,
        lowongan.jabatan_id,
        lowongan.posisi_id,
        lowongan.penempatan_id,
        lowongan.golongan_id,
        perusahaan.nama_perusahaan,
        department.nama AS nama_department,
        divisi.nama AS nama_divisi,
        jabatan.nama AS nama_jabatan,
        posisi.nama AS nama_posisi,
        penempatan.nama AS nama_penempatan,
        golongan.nama AS nama_golongan ');
        $this->db->from('data_lamaran');
        $this->db->join('lowongan', 'lowongan.id_lowongan = data_lamaran.lowongan_id', 'left');
        $this->db->join('perusahaan', 'perusahaan.id = lowongan.perusahaan_id', 'left');
        $this->db->join('department', 'department.id = lowongan.department_id', 'left');
        $this->db->join('divisi', 'divisi.id = lowongan.divisi_id', 'left');
        $this->db->join('jabatan', 'jabatan.id = lowongan.divisi_id', 'left');
        $this->db->join('posisi', 'posisi.id = lowongan.posisi_id', 'left');
        $this->db->join('penempatan', 'penempatan.id = lowongan.penempatan_id', 'left');
        $this->db->join('golongan', 'golongan.id = lowongan.golongan_id', 'left');

        $this->db->where('data_lamaran.id', $dapat_id);

        return $this->db->get();
    }

    public function getDataProbation()
    {
        $this->db->select('probation.*,
        perusahaan.nama_perusahaan,
        department.nama AS nama_department,
        divisi.nama AS nama_divisi,
        jabatan.nama AS nama_jabatan,
        posisi.nama AS nama_posisi,
        penempatan.nama AS nama_penempatan,
        golongan.nama AS nama_golongan,
        wilayah_provinsi.nama AS nama_provinsi,
	    wilayah_kota.nama AS nama_kota,
	    wilayah_kecamatan.nama AS nama_kecamatan');
        $this->db->from('probation');
        $this->db->join('perusahaan', 'perusahaan.id = probation.perusahaan_id', 'left');
        $this->db->join('department', 'department.id = probation.department_id', 'left');
        $this->db->join('divisi', 'divisi.id = probation.divisi_id', 'left');
        $this->db->join('jabatan', 'jabatan.id = probation.divisi_id', 'left');
        $this->db->join('posisi', 'posisi.id = probation.posisi_id', 'left');
        $this->db->join('penempatan', 'penempatan.id = probation.penempatan_id', 'left');
        $this->db->join('golongan', 'golongan.id = probation.golongan_id', 'left');

        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = probation.provinsi', 'left');
        $this->db->join('wilayah_kota', 'wilayah_kota.id = probation.kota', 'left');
        $this->db->join('wilayah_kecamatan', 'wilayah_kecamatan.id = probation.kecamatan', 'left');

        return $this->db->get();
    }

    public function get_DataProbation()
    {
        $this->db->select('data_probation.*, probation.nama, posisi.nama AS nama_posisi');
        $this->db->from('data_probation');
        $this->db->join('probation', 'probation.id = data_probation.probation_id', 'left');
        $this->db->join('posisi', 'posisi.id = probation.posisi_id', 'left');

        return $this->db->get();
    }

    public function DataProbationByID($idProbation)
    {
        return $this->db->get_where('probation', ['id' => $idProbation]);
    }

    // insert ----------------------------------------------------------------

    public function insertKaryawanProbation($data)
    {
        $this->db->insert('probation', $data);
    }

    public function insert_DataProbation($data)
    // memasukan idkaryawan yang akan emlakukan probatioan
    {
        $this->db->insert('data_probation', $data);
    }


    // update -------------------------------------

    public function update_StatusProbation($update_status, $idProbation)
    {
        $this->db->set($update_status);
        $this->db->where('id', $idProbation);
        $this->db->update('probation');
    }
}
