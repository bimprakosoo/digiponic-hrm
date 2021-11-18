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



    // create data

}
