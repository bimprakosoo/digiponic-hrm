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
        $this->db->select('data_karyawan.*, detail_karyawan.nama');
        $this->db->from('data_karyawan');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan.karyawan_id', 'left');

        return $this->db->get();
    }

    public function getAllGolongan()
    {
        return $this->db->get('golongan');
    }

    function getAllDepartment()
    {
        return $this->db->get('department');
    }

    public function getDataKaryawan($idkarayawan)
    {
        return $this->db->get_where('data_karyawan', ['karyawan_id' => $idkarayawan])->result();
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
        $this->db->select('mutasi.id,
        mutasi.karyawan_id,
        mutasi.tgl_pengajuan,
        mutasi.jenis_mutasi,
        mutasi.status,
        detail_karyawan.nama AS userID,
        department.nama AS namaDepartment,
        divisi.nama AS namaDivisi,
        jabatan.nama AS namaJabatan,
        golongan.nama AS namaGolongan,
        posisi.nama AS namaPosisi,
        penempatan.nama AS namaPenempatan');
        $this->db->from('mutasi');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = mutasi.karyawan_id', 'left');
        $this->db->join('department', 'department.id = mutasi.department_id', 'left');
        $this->db->join('divisi', 'divisi.id = mutasi.divisi_id', 'left');
        $this->db->join('jabatan', 'jabatan.id = mutasi.jabatan_id', 'left');
        $this->db->join('posisi', 'posisi.id = mutasi.posisi_id', 'left');
        $this->db->join('penempatan', 'penempatan.id = mutasi.penempatan_id', 'left');
        $this->db->join('golongan', 'golongan.id = mutasi.golongan_id', 'left');
        
        return $this->db->get();
    }

    public function update_dataMutasiKaryawan($update_datakaryawan, $IDmutasi)
    {
        // update data karyawan dari mutasi

        $this->db->set($update_datakaryawan);
        $this->db->where('karyawan_id', $IDmutasi);
        $this->db->update('data_karyawan');
    }
    
    public function update_statusMutasi($updateStatus, $IDmutasi)
    {
        // update data karyawan dari mutasi

        $this->db->set($updateStatus);
        $this->db->where('karyawan_id', $IDmutasi);
        $this->db->update('mutasi');
    }
    public function editmutasi($id)
    {
        $this->db->select('data_karyawan.*,
        detail_karyawan.nama,
        department.nama AS nama_department,
        divisi.nama AS nama_divisi,
        jabatan.nama AS nama_jabatan,
        posisi.nama AS nama_posisi,
        penempatan.nama AS nama_penempatan,
        golongan.nama AS nama_golongan');
        $this->db->from('data_karyawan');
        $this->db->join('detail_karyawan', 'detail_karyawan.id = data_karyawan.karyawan_id', 'left');
        $this->db->join('department', 'department.id = data_karyawan.department_id', 'left');
        $this->db->join('divisi', 'divisi.id = data_karyawan.divisi_id', 'left');
        $this->db->join('jabatan', 'jabatan.id = data_karyawan.jabatan_id', 'left');
        $this->db->join('posisi', 'posisi.id = data_karyawan.posisi_id', 'left');
        $this->db->join('penempatan', 'penempatan.id = data_karyawan.penempatan_id', 'left');
        $this->db->join('golongan', 'golongan.id = data_karyawan.golongan_id', 'left');

        $this->db->where('data_karyawan.id', $id);
        return $this->db->get()->row_array();
    }

    public function ajukanMutasi($data)
    {
        $this->db->insert('mutasi', $data);
    }

    // proses mutasi setelah pengajuan
    public function prosesMutasi($data, $IDmutasi)
    {
        // $hasil = $this->db->query("UPDATE tbl_barang SET barang_nama='$nama_barang',barang_satuan='$satuan',barang_harga='$harga' WHERE barang_id='$kode_barang'");

        $this->db->set($data);
        $this->db->where('karyawan_id', $IDmutasi);
        $this->db->update('data_karyawan');
    }

    public function get_DataMutasiId($id)
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
        $this->db->where('mutasi.id', $id);
        $sql = $this->db->get();
        // print_r($this->db->last_query());
        return $sql;
    }
}
