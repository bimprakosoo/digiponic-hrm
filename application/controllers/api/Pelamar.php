<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Pelamar extends RestController
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
        // $this->load->database();
        $this->load->model('M_Pelamar');
    }

    // menampilkan data pelamaran 
    function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('tbl_karyawan')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('tbl_karyawan')->result();
        }
        $this->response($kontak, 200);
    }

    // add data pelamar
    function index_post()
    {
        $response = array();

        // $id_m                   = $this->input->post('id');
        $nama_m                 = $this->input->post('nama');
        $provinsi_m             = $this->input->post('provinsi');
        $kota_kabupaten_m       = $this->input->post('kota_kabupaten');
        $kecamatan_m            = $this->input->post('kecamatan');
        $alamat_lengkap_m       = $this->input->post('alamat_lengkap');
        $jk_m                   = $this->input->post('jk');
        $tgl_lahir_m            = $this->input->post('tgl_lahir');
        $no_telp_m              = $this->input->post('no_telp');
        $status_perkawinan_m    = $this->input->post('status_perkawinan');
        $pendidikan_terakhir_m  = $this->input->post('pendidikan_terakhir');
        // $surat_lamaran_m        = $file_lamaran;    // up_lamaran
        // $cv_m                   = $file_cv;         // up_cv
        $surat_lamaran_m        = $this->M_Pelamar->file_lamaran();     // up_lamaran
        $cv_m                   = $this->M_Pelamar->file_cv();          // up_cv

        $simpan_data = $this->M_Pelamar->insertData(
            // $id_m,
            $nama_m,
            $provinsi_m,
            $kota_kabupaten_m,
            $kecamatan_m,
            $alamat_lengkap_m,
            $jk_m,
            $tgl_lahir_m,
            $no_telp_m,
            $status_perkawinan_m,
            $pendidikan_terakhir_m,
            $surat_lamaran_m,
            $cv_m
        );


        if ($simpan_data) {
            // berhasil
            $response['pesan'] = 'berhasil';
            $response['hasil'] = true;
        } else {
            // gagal
            $response['pesan'] = 'gagal';
            $response['hasil'] = false;
        }

        echo json_encode($response);
    }

    // next
}
