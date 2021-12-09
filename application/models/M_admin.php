<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Admin extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    // get data lowongan
    public function lowongan_ad()
    {
        // $this->db->select('*');
        // $this->db->from('lowongan');

        // $this->db->where('role_id', 1);
        return $this->db->get('lowongan')->result_array();
    }
    //edit lowongan
    public function edit($id)
    {
        $this->db->where('id_lowongan', $id);
        return $this->db->get('lowongan')->row_array();
    }
    public function update_low($id_lowongan, $data)
    {
        $this->db->where('id_lowongan', $id_lowongan);
        $this->db->update('lowongan', $data);
    }
    // hapus lowongan
    public function hapus($id)
    {
        $this->db->where('id_lowongan', $id);
        $this->db->delete('lowongan');
    }

    // get jumlah data lowongan
    public function countAllLowongan()
    {
        return $this->db->get('lowongan')->num_rows();
    }

    // get data lamaran masuk
    public function lamaran_masuk()
    {
        $this->db->select('*');
        $this->db->from('data_lamaran');
        // $this->db->where('role_id', 1);
        return $this->db->get();
    }

    // get data lamaran masuk
    public function data_karyawan()
    {
        $this->db->select('*');
        $this->db->from('tbl_karyawan');
        $this->db->join('department', 'tbl_karyawan.id_departemen = department.id_departemen');

        // $this->db->where('role_id', 1);
        return $this->db->get();
    }

    public function get_data_lamaran()
    {
        $this->db->select('*');
        $this->db->from('data_lamaran');

        return $this->db->get();
    }

    public function terima_pelamar($data)
    {
        // pindah data karywaan yang diterima ke tbl_karyawan
        $this->db->insert('tbl_karyawan', $data);
    }

    public function delete_pelamar($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('lamaran');
    }

    public function update_status_pelamar($update_status, $diterima_id)
    {
        // update status dari data pelamaran [1 => diterima | 2 => ditolak]

        $this->db->set($update_status);
        $this->db->where('id', $diterima_id);
        $this->db->update('data_lamaran');
    }

    function file_image()
    {
        // upload file surat lamaran--------------------------------------------------------------------------------------
        $config['upload_path'] = "./assets/image/lowongan/";
        $config['allowed_types'] = "jpg|jpeg|png|svg";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            // salah
            $response['pesan'] = 'gambar gagal' . $this->upload->display_errors();
            $response['hasil'] = false;
            echo json_encode($response);
        } else {
            $data_upload    = $this->upload->data();
            $file_image      = $data_upload['file_name'];
        }
        return $file_image;
    }

    public function getDataDepartment()
    {
        return $this->db->get('department');
    }
}
