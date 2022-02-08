<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Karyawan extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kehadiran');
    }

    function AmbilDataAbsensi_get()
    {
        $id = $this->get('user_id');
        if ($id == '') {
            $absensi = $this->db->get('kehadiran')->result();
        } else {
            $this->db->where('user_id', $id);
            $absensi = $this->db->get('kehadiran')->result();
        }
        $this->response($absensi, 200);
    }

    function CheckIn_post()
    {

        $dates = date("Y-m-d");
        $times = date('H:i:s');
        // $response = array();
        $data = array(
            'user_id'   =>  $this->input->post('UserId'),
            'tanggal'   =>  $dates,
            'jam_masuk'       =>  $times,
            'lokasi'    =>  $this->input->post('lokasi'),
            'foto'      =>  $this->input->post('foto'),
            'status'    =>  1

        );

        // var_dump($data);
        // die;

        $insert = $this->db->insert('kehadiran', $data);

        
        if ($insert) {
            // $this->response($data, 200);
            $this->response([
                'message'   => 'data kehadiran berhasil dikirim .',
                'data'      => $data,
                'status'    => $insert
            ], RestController::HTTP_OK);
        } else {
            $this->response(array('hasil' => 'fail', 502));
        }
    }

    function checkout_put()
    {

        $dates = date("Y-m-d");
        $times = date('H:i:s');
        // $response = array();
        $iduser   = $this->session->userdata('id');
        $data = array(
            'jam_keluar'    =>  $times
        );

        // var_dump($data);
        // die;

        $insert = $this->M_kehadiran->updateAbsen($dates, $data, $iduser);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('hasil' => 'fail', 502));
        }
    }
}
