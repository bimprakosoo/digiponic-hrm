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
        $this->load->model('M_notifikasi');
    }

    function PengajuanCuti_post()
    {
        $dates = date("Y-m-d");
        $data = array(
            'karyawan_id'           => $this->input->post('karyawan_id'),
            'tgl_mulai'             => $this->input->post('tgl_mulai'),
            'tgl_selesai'           => $this->input->post('tgl_selesai'),
            'keterangan'            => $this->input->post('keterangan'),
            'tanggal_create'        => $dates
        );

        $notif = array(
            'role_id' => 1,
            'jenis_notifikasi' => 'Pengajuan Cuti',
            'created_at' => date('Y-m-d H:i:s'),
            'read_status' => 0,
            'status' => 1
        );
        // $insert = $this->db->insert('data_lamaran', $data);
        // $insert = $this->M_pengajuan->insert_pengajuanCuti($data);
        $insert = $this->db->insert('data_cuti', $data);

        if ($insert) {
            $insert_notif = $this->M_notifikasi->addNotif($notif);
            $this->response([
                'message'   => 'Data Pengajuan Cuti telah Terkirim.',
                'data'      => $data,
                'status'    => $insert
            ], RestController::HTTP_OK);
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


    // API Resing --------------------------------------------------------------------------------

    function ListPengajuanResing_get()
    {
        $id = $this->get('karyawan_id');
        if ($id == '') {
            $resign = $this->db->get('data_resign')->result();
        } else {
            $this->db->where('karyawan_id', $id);
            $resign = $this->db->get('data_resign')->result();
        }
        $this->response($resign, 200);
    }

    function PengajuanResign_post()
    {
        $dates = date("Y-m-d");
        $data = array(
            'karyawan_id'           => $this->input->post('karyawan_id'),
            'tgl_resign'            => $this->input->post('tgl_resign'),
            'keterangan'            => $this->input->post('keterangan'),
            'tanggal_pengajuan'      => $dates
        );

        $insert = $this->db->insert('data_resign', $data);

        if ($insert) {
            $this->response([
                'message'   => 'Data Pengajuan Resign telah Terkirim.',
                'data'      => $data,
                'status'    => $insert
            ], RestController::HTTP_OK);
        } else {
            $this->response(array('hasil' => 'fail', 502));
        }
    }
}
