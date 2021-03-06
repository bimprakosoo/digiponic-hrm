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
        $this->load->model('M_pelamar');
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
    function create_post($data)
    {
        // $response = array();
        $data = array(

            'nama'                 => $this->post('nama'),
            'provinsi'             => $this->post('provinsi'),
            'kota'                 => $this->post('kota'),
            'kecamatan'            => $this->post('kecamatan'),
            'alamat_lengkap'       => $this->post('alamat_lengkap'),
            'jk'                   => $this->post('jk'),
            'tgl_lahir'            => $this->post('tgl_lahir'),
            'no_telp'              => $this->post('no_telp'),

            'pendidikan_terakhir'  => $this->post('pendidikan_terakhir'),
            'surat_lamaran'        => $this->M_pelamar->file_lamaran(),     // up_lamaran
            'cv'                   => $this->M_pelamar->file_cv()          // up_cv
        );

        $insert = $this->db->insert('data_lamaran', $data);

        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('hasil' => 'fail', 502));
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
