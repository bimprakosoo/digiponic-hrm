<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_kpi extends CI_Model
{
    public function getKaryawan($idkaryawan)
    {
        //     return $this->db->get_where('data_karyawan', ['department_id' => $iddiv])->result();
        $this->db->select('*, detail_karyawan.nama');
        $this->db->from('data_karyawan');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan.karyawan_id', 'left');
        $this->db->where('divisi_id', $idkaryawan);
        return $this->db->get()->result();
    }

    // public function getKpiIndikator($idkaryawan)
    // {
    //     $this->db->select('kpi_indikator.*');
    //     $this->db->from('kpi_indikator');
    //     $this->db->join('data_karyawan', 'kpi_indikator.jabatan_id = data_karyawan.jabatan_id');
    //     $this->db->where('karyawan_id', $idkaryawan);

    //     return $this->db->get();
    // }

    public function get_KpiIndikator()
    {
        $this->db->select('kpi_indikator.*, divisi.nama AS nama_divisi');
        $this->db->from('kpi_indikator');
        $this->db->join('divisi', 'divisi.id = kpi_indikator.divisi_id', 'left');

        return $this->db->get();
    }

    public function get_prosentase($id)
    {
        $this->db->select('user_id,
        COUNT( user_id ) AS absensi,
        ROUND( ( COUNT( user_id ) / 20 ) * 100, 0 ) AS prosentase ');
        $this->db->from('kehadiran');
        $this->db->where('user_id', $id);

        $this->db->group_by('user_id');

        return $this->db->get();
    }

    public function insert_DataKpi($data)
    {
        $this->db->insert('kpi_karyawan', $data);
    }

    public function getDataDivisi($iddiv)
    {
        return $this->db->get_where('divisi', ['department_id' => $iddiv])->result();
    }

    // KPI => presentase kehadiran
    public function PersentaseKehadiran()
    {
        $this->db->select('id,
        user_id,
        YEAR ( tanggal ),
        MONTH ( tanggal ),
        COUNT( user_id )');
        $this->db->from('kehadiran ');
        $array = array('status' => 1, 'status' => 2);
        $this->db->where($array);
        $this->db->group_by('user_id,
        MONTH ( tanggal )');
        $this->db->order_by('MONTH ( tanggal )', 'desc');

        return $this->db->get();
    }


    // Dashboard karyawan---------------------------------------------------------

    public function KPIDashboard($id)
    {
        $this->db->select('	detail_karyawan.nama,
        kpi_indikator.indikator1,
        kpi_indikator.indikator2,
        kpi_indikator.indikator3,
        indikator_1,
        indikator_2,
        indikator_3,
        b_kerja_tim,
        b_inisiatif');
        $this->db->from('kpi_indikator');
        $this->db->join('data_karyawan', 'data_karyawan.divisi_id = kpi_indikator.divisi_id', 'left');
        $this->db->join('kpi_karyawan', 'kpi_karyawan.karyawan_id = data_karyawan.karyawan_id', 'left');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan.karyawan_id', 'left');
        $this->db->where('detail_karyawan.id', $id);

        return $this->db->get();
    }
}
