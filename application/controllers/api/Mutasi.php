<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Mutasi extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    function create_post()
    {
        // $response = array();
        $data = array(

            // 'tgl_mutasi'                => $this->input->post(''),  // date
            'karyawan_id'               => $this->input->post('karyawan'),
            'department_id'             => $this->input->post('department'),
            'divisi_id'                 => $this->input->post('divisi'),
            'jabatan_id'                => $this->input->post('jabatan'),
            'posisi_id'                 => $this->input->post('posisi'),
            'penempatan_id'             => $this->input->post('penempatan'),
            'jenis_mutasi'              => $this->input->post('jenis_mutasi'),   // promosi | mutasi | demosi
            'status'                    => 0  // peding | approve[hrd]
        );


        $insert = $this->db->insert('mutasi', $data);
        var_dump($data);
        die;
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('hasil' => 'fail', 502));
        }
    }
}
