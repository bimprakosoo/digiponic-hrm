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
            $kontak = $this->db->get('data_lamaran')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('data_lamaran')->result();
        }
        $this->response($kontak, 200);
    }

    // add data pelamar
    function index_post()
    {
        // $response = array();
        $data = array(
            // $id_m                   = $this->post('id');
            'nama'                 => $this->post('nama'),
            'provinsi'              => $this->post('provinsi'),
            'kota_kabupaten'       => $this->post('kota_kabupaten'),
            'kecamatan'            => $this->post('kecamatan'),
            'alamat_lengkap'       => $this->post('alamat_lengkap'),
            'jk'                   => $this->post('jk'),
            'tgl_lahir'            => $this->post('tgl_lahir'),
            'no_telp'              => $this->post('no_telp'),
            'status_perkawinan'    => $this->post('status_perkawinan'),
            'pendidikan_terakhir'  => $this->post('pendidikan_terakhir'),
            'surat_lamaran'            => $this->M_Pelamar->file_lamaran(),     // up_lamaran
            'cv'                  => $this->M_Pelamar->file_cv()          // up_cv
        );

        $insert = $this->db->insert('data_lamaran', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }

        // if ($simpan_data) {
        //     // berhasil
        //     $response['pesan'] = 'berhasil';
        //     $response['hasil'] = true;
        // } else {
        //     // gagal
        //     $response['pesan'] = 'gagal';
        //     $response['hasil'] = false;
        // }

    }

    // next
}
