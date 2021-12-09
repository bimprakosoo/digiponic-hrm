<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_organisasi extends CI_Model
{
    // Department
    public function getDataDepartment()
    {
        $this->db->select('*');
        $this->db->from('department');
        $this->db->join('perusahaan', 'perusahaan.id = department.id_departemen');
        return $this->db->get();
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
    public function hapusPerusahaan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('perusahaan');
    }
    public function edit($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('perusahaan')->row_array();
    }
}
