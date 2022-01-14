<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Artikel extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    function index_get()
    {
        $id = $this->get('id');
        if ($id == '') {
            $kontak = $this->db->get('artikel')->result();
        } else {
            $this->db->where('id', $id);
            $kontak = $this->db->get('artikel')->result();
        }
        $this->response($kontak, 200);
    }

    function create_post()
    {
        // $response = array();
        $data = array(

            'judul_artikel'              =>  $this->input->post('judul_artikel'),
            'isi_artikel'        =>  $this->input->post('isi_artikel'),
            'image'             => $this->M_admin->file_image1(),
            'post_date'        =>  $this->input->post('post_date')
        );


        $insert = $this->M_admin->postDataArtikel($data);
        var_dump($data);
        die;
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('hasil' => 'fail', 502));
        }
    }
    function update_put()
    {
        $id = $this->put('id');
        $data = array(
            'judul_artikel'          => $this->put('judul_artikel'),
            'image'             => $this->M_admin->file_image1(),
            'post_date'        =>  $this->input->post('post_date')
        );
        $this->db->where('id', $id);
        $update = $this->db->update('artikel', $data);
        var_dump($data);
        die;
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
