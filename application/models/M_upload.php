<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_upload extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    // izin from 
    function izin()
    {
        // upload file surat izin--------------------------------------------------------------------------------------
        $config['upload_path'] = "./assets/image/izin/";
        $config['allowed_types'] = "jpg|jpeg";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('izin')) {
            // it's wrong
            $response['pesan'] = 'gambar gagal' . $this->upload->display_errors();
            $response['hasil'] = false;
            echo json_encode($response);
        } else {
            $data_upload    = $this->upload->data();
            $fileIzin       = $data_upload['file_name'];
        }
        return $fileIzin;
    }
}
