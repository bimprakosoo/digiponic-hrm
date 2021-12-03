<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_organisasi extends CI_Model
{
    // Perusahaan
    public function getDataPerusahaan()
    {
        return $this->db->get('perusahaan');
    }

    // Department
    public function getDataDepartment()
    {
        // return $this->db->get('department');
        $this->db->select('department.id AS dept_id, department.nama, perusahaan.nama_perusahaan');
        $this->db->from('department');
        $this->db->join('perusahaan', 'perusahaan.id = department.perusahaan');
        return $this->db->get();
    }
    // Devisi
    public function getDataDivisi()
    {
        // return $this->db->get('divisi');
        $this->db->select('divisi.id AS div_id, divisi.nama , department.nama AS nama_dept');
        $this->db->from('divisi');
        $this->db->join('department', 'department.id = divisi.department_id');
        return $this->db->get();
    }

    // Jabatan
    public function getDataJabatan()
    {
        // return $this->db->get('jabatan');
        $this->db->select('jabatan.id AS jab_id, jabatan.nama, divisi.nama AS nama_divisi');
        $this->db->from('jabatan');
        $this->db->join('divisi', 'divisi.id = jabatan.divisi_id');
        return $this->db->get();
    }

    // Gologan
    public function getDataGolongan()
    {
        $this->db->select('golongan.id AS gol_id, golongan.nama, jabatan.nama AS nama_jabatan');
        $this->db->from('golongan');
        $this->db->join('jabatan', 'jabatan.id = golongan.jabatan_id');

        return $this->db->get();
    }

    // Posisi
    public function getDataPosisi()
    {
        $this->db->select('posisi.id AS pos_id, posisi.nama, golongan.nama AS nama_golongan');
        $this->db->from('posisi');
        $this->db->join('golongan', 'golongan.id = posisi.golongan_id');

        return $this->db->get();
    }



    // Penempatan
    public function getDataPenempatan()
    {
        $this->db->select('penempatan.id, penempatan.nama, perusahaan.nama_perusahaan, wilayah_kota.nama AS nama_kota');
        $this->db->from('penempatan');
        $this->db->join(' perusahaan', 'perusahaan.id = penempatan.perusahaan_id');
        $this->db->join(' wilayah_kota', 'wilayah_kota.id = penempatan.lokasi_cabang');

        return $this->db->get();
    }

    // function search_perusahaan($query)
    // {
    //     $this->db->select("*");
    //     $this->db->from("perusahaan");
    //     if ($query != '') {
    //         $this->db->like('nama_perusahaan', $query);
    //         $this->db->or_like('industri', $query);
    //         $this->db->or_like('kota', $query);
    //     }
    //     $this->db->order_by('id', 'ASC');
    //     return $this->db->get();
    // }

    // create data
    public function postDataPerusahaan($data)
    {
        $this->db->insert('perusahaan', $data);
    }

    public function postDataDepartment($data)
    {
        $this->db->insert('department', $data);
    }

    public function postDataDivisi($data)
    {
        $this->db->insert('divisi', $data);
    }

    public function postDataJabatan($data)
    {
        $this->db->insert('jabatan', $data);
    }

    public function postDataGolongan($data)
    {
        $this->db->insert('golongan', $data);
    }

    public function postDataPosisi($data)
    {
        $this->db->insert('posisi', $data);
    }

    public function postDataPenempatan($data)
    {
        $this->db->insert('penempatan', $data);
    }
}
