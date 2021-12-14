<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_pelamar extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    public function getUserRow()
    {
        return $this->db->get_where('users', ['email' =>
        $this->session->userdata('email')])->row_array();
    }
    // next

    function file_lamaran()
    {
        // upload file surat lamaran--------------------------------------------------------------------------------------
        $config['upload_path'] = "./assets/dokumen/surat_lamaran";
        $config['allowed_types'] = "pdf";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('up_lamaran')) {
            // salah
            $response['pesan'] = 'gambar gagal' . $this->upload->display_errors();
            $response['hasil'] = false;
            echo json_encode($response);
        } else {
            $data_upload    = $this->upload->data();
            $file_lamaran      = $data_upload['file_name'];
        }
        return $file_lamaran;
    }

    function file_cv()
    {
        // uplaod file cv--------------------------------------------------------------------------------------
        $config['upload_path'] = "./assets/dokumen/cv";
        $config['allowed_types'] = "pdf";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('up_cv')) {
            // salah
            $response['pesan'] = 'gambar gagal' . $this->upload->display_errors();
            $response['hasil'] = false;
            echo json_encode($response);
        } else {
            $data_upload    = $this->upload->data();
            $file_cv      = $data_upload['file_name'];
        }

        return $file_cv;
    }

    // provinsi
    public function getDataprov()
    {
        return $this->db->get('wilayah_provinsi')->result_array();
    }
    // kota
    public function getDataKota($idprov)
    {
        return $this->db->get_where('wilayah_kota', ['provinsi_id' => $idprov])->result();
    }
    // kecamatan
    public function getDataKecamatan($idkota)
    {
        return $this->db->get_where('wilayah_kecamatan', ['kota_id' => $idkota])->result();
    }
}
