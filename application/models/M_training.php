<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_training extends CI_Model
{
    public function getDataTraining()
    {
        return $this->db->get('data_training');
    }

    public function getData_KaryawanBaru()
    {
        $this->db->select('data_karyawan_training.id,
        data_karyawan_training.karyawan_id,
        data_karyawan_training.perusahaan_id,
        data_karyawan_training.status_training,
        detail_karyawan.nama,
        perusahaan.nama_perusahaan');
        $this->db->from('data_karyawan_training');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan_training.karyawan_id', 'left');
        $this->db->join('perusahaan', 'perusahaan.id = data_karyawan_training.perusahaan_id', 'left');

        return $this->db->get();
    }

    function getData_AllPerusahaan()
    // get semua data tbl perusahaan
    {
        return $this->db->get('perusahaan');
    }

    function getData_typePelatihan()
    // get semua data tbl perusahaan
    {
        return $this->db->get('type_pelatihan');
    }

    public function getKaryawanTrain($idperusahaan)
    {
        // return $this->db->get_where('data_karyawan_training', ['perusahaan_id' => $idperusahaan])->result();
        $this->db->select('data_karyawan_training.id,
        data_karyawan_training.karyawan_id,
        data_karyawan_training.perusahaan_id,
        data_karyawan_training.status_training,
        detail_karyawan.nama');
        $this->db->from('data_karyawan_training');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan_training.karyawan_id', 'left');
        $this->db->where('perusahaan_id', $idperusahaan);

        return $this->db->get()->result();
    }

    public function getData_KaryawanTraining()
    {
        $this->db->select('data_training.*,
        detail_karyawan.nama,
        type_pelatihan.kategori');
        $this->db->from('data_training');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_training.karyawan_id', 'left');
        $this->db->join('type_pelatihan', 'type_pelatihan.id = data_training.type', 'left');

        return $this->db->get();
    }

    // insert ----------------------------------------------------------------
    public function insert_DataKaryawanTraining($data)
    {
        $this->db->insert('data_training', $data);
    }
}
