<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_organisasi extends CI_Model
{
    // Department
    public function getDataDepartment()
    {
        return $this->db->get('department');
    }
    // Devisi
    public function getDataDevisi()
    {
        return $this->db->get('devisi');
    }

    // Jabatan
    public function getDataJabatan()
    {
        return $this->db->get('jabatan');
    }

    // Posisi
    public function getDataPosisi()
    {
        return $this->db->get('posisi');
    }

    // Gologan
    public function getDataGologan()
    {
        return $this->db->get('gologan');
    }

    // Penempatan
    public function getDataPenempatan()
    {
        return $this->db->get('penempatan');
    }

    // Perusahaan
    public function getDataPerusahaan()
    {
        return $this->db->get('perusahaan');
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

}
