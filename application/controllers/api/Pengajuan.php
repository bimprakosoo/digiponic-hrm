<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Pengajuan extends RestController
{
    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_pengajuan');
    }

    function PengajuanCuti_post()
    {
        // $response = array();
        $data = array(
            'karyawan_id'         => $this->input->post('karyawan_id'),
            'tgl_mulai'         => $this->input->post('tgl_mulai'),
            'tgl_selesai'       => $this->input->post('tgl_selesai'),
            'keterangan'       => $this->input->post('keterangan')
        );

        // $insert = $this->db->insert('data_lamaran', $data);
        // $insert = $this->M_pengajuan->insert_pengajuanCuti($data);
        $insert = $this->db->insert('data_cuti', $data);

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

    function AmbilDataCuti_get()
    {
        $id = $this->get('karyawan_id');
        if ($id == '') {
            $cuti = $this->db->get('data_cuti')->result();
        } else {
            $this->db->where('karyawan_id', $id);
            $cuti = $this->db->get('data_cuti')->result();
        }
        $this->response($cuti, 200);
    }
}
