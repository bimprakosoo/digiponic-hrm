<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Admin extends RestController
{
    function __construct()
    {
        parent::__construct();
        // $this->load->library('upload');
        // $this->load->database();
        $this->load->model('M_admin');
    }

    //Menampilkan data kontak
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

    //Mengirim atau menambah data kontak baru
    function index_post()
    {

        // if ($id == '') {
        //     // salah 
        //     var_dump($id);
        //     die;
        // } else {
        //     $this->db->where('id', $id);
        //     $data = $this->db->get('data_lamaran')->result();
        //     foreach ($data as $r) { // loop over results
        //         $insert = $this->db->insert('tbl_karyawan', $r); // insert each row to another table
        //     }
        //     // $insert = $this->db->insert('tbl_karyawan', $data);
        //     if ($insert) {
        //         $this->response($data, 200);
        //     } else {
        //         $this->response(array('status' => 'fail', 502));
        //     }
        // }


        $id = $this->db->get('id');
        $goo = $this->db->where('id', $id);

        $data = $this->db->get('data_lamaran')->result();
        foreach ($data as $r) { // loop over results
            $insert = $this->db->insert('tbl_karyawan', $r); // insert each row to another table
        }
        // $insert = $this->db->insert('tbl_karyawan', $data);
        var_dump($insert);
        die;
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    //Menghapus salah satu data kontak
    function index_delete()
    {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('data_lamaran');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
