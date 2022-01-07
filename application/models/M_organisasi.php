<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_organisasi extends CI_Model
{
    // Perusahaan
    public function getDataPerusahaan()
    {
        $this->db->select('*, perusahaan.id, wilayah_kota.nama AS nama_kota, wilayah_provinsi.nama AS nama_provinsi');
        $this->db->from('perusahaan');
        $this->db->join('wilayah_provinsi', 'wilayah_provinsi.id = perusahaan.provinsi');
        $this->db->join('wilayah_kota', 'wilayah_kota.id = perusahaan.kota');
        return $this->db->get();
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
        return $this->db->get();
    }
    public function update_perusahaan($id_perusahaan, $data)
    {
        $this->db->where('id', $id_perusahaan);
        $this->db->update('perusahaan', $data);
    }
    // Department----------------------------------------------------------------------------------------------------
    public function getDataDepartment()
    {
        
        $this->db->select('department.id AS dept_id, department.nama, perusahaan.nama_perusahaan');
        $this->db->from('department');
        $this->db->join('perusahaan', 'perusahaan.id = department.perusahaan');
        return $this->db->get();
    }
    public function editDept($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('department')->row_array();
    }
    public function update_dept($id_dept, $data)
    {
        $this->db->where('id', $id_dept);
        $this->db->update('department', $data);
    }
    public function hapusdepartemen($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('department');
    }

    // Devisi----------------------------------------------------------------------------------------------------
    public function getDataDivisi()
    {
        // return $this->db->get('divisi');
        $this->db->select('divisi.id AS div_id, divisi.nama , department.nama AS nama_dept');
        $this->db->from('divisi');
        $this->db->join('department', 'department.id = divisi.department_id');
        return $this->db->get();
    }
    public function editDiv($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('divisi')->row_array();
    }
    public function update_div($id_dept, $data)
    {
        $this->db->where('id', $id_dept);
        $this->db->update('divisi', $data);
    }
    public function hapusDivisi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('divisi');
    }


    // Jabatan----------------------------------------------------------------------------------------------------
    public function getDataJabatan()
    {
        // return $this->db->get('jabatan');
        $this->db->select('jabatan.id AS jab_id, jabatan.nama, divisi.nama AS nama_divisi');
        $this->db->from('jabatan');
        $this->db->join('divisi', 'divisi.id = jabatan.divisi_id');
        return $this->db->get();
    }
    public function editJab($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('jabatan')->row_array();
    }
    public function update_jab($id_jab, $data)
    {
        $this->db->where('id', $id_jab);
        $this->db->update('jabatan', $data);
    }
    public function hapusJabatan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jabatan');
    }

    // Gologan----------------------------------------------------------------------------------------------------
    public function getDataGolongan()
    {
        $this->db->select('golongan.id AS gol_id, golongan.nama, jabatan.nama AS nama_jabatan');
        $this->db->from('golongan');
        $this->db->join('jabatan', 'jabatan.id = golongan.jabatan_id');

        return $this->db->get();
    }
    public function editGol($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('golongan')->row_array();
    }
    public function update_gol($id_jab, $data)
    {
        $this->db->where('id', $id_jab);
        $this->db->update('golongan', $data);
    }
    public function hapusGolongan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('golongan');
    }

    // Posisi----------------------------------------------------------------------------------------------------
    public function getDataPosisi()
    {
        $this->db->select('posisi.id AS pos_id, posisi.nama, golongan.nama AS nama_golongan');
        $this->db->from('posisi');
        $this->db->join('golongan', 'golongan.id = posisi.golongan_id');

        return $this->db->get();
    }
    public function editPos($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('posisi')->row_array();
    }
    public function update_pos($id_jab, $data)
    {
        $this->db->where('id', $id_jab);
        $this->db->update('posisi', $data);
    }
    public function hapusPosisi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('posisi');
    }


    // Penempatan----------------------------------------------------------------------------------------------------
    public function getDataPenempatan()
    {
        $this->db->select('penempatan.id, penempatan.nama, perusahaan.nama_perusahaan, wilayah_kota.nama AS nama_kota, wilayah_provinsi.nama AS nama_provinsi');
        $this->db->from('penempatan');
        $this->db->join(' perusahaan', 'perusahaan.id = penempatan.perusahaan_id');
        $this->db->join(' wilayah_kota', 'wilayah_kota.id = penempatan.lokasi_cabang');
        $this->db->join(' wilayah_provinsi', 'wilayah_provinsi.id = penempatan.provinsi');
        return $this->db->get();
    }
    public function editPenempatan($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('penempatan')->row_array();
    }
    public function update_penempatan($id_jab, $data)
    {
        $this->db->where('id', $id_jab);
        $this->db->update('penempatan', $data);
    }
    public function hapusPenempatan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penempatan');
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
