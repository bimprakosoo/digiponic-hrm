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
    public function lowongan_ad($limit, $start)
    {
        // $this->db->select('*');
        // $this->db->from('lowongan');

        // $this->db->where('role_id', 1);
        return $this->db->get('lowongan', $limit, $start)->result_array();
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


    // btn lamaran diterima
    public function diterima()
    {
        // get or post
    }

    // btn lamaran di tolak
    public function ditolak()
    {
        // delete or change status
    }

    // function insert_into()
    // {

    //     $q = $this->db->get('data_lamaran')->result(); // get first table
    //     foreach ($q as $r) { // loop over results
    //         $this->db->update('tbl_karyawan', $r, array('id' => $r->id)); // insert each row to another table
    //     }
    // }

    public function terima_pelamar($data)
    {
        // pindah data karywaan yang diterima ke tbl_karyawan
        $this->db->insert('tbl_karyawan', $data);
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
}
