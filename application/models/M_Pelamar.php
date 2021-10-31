<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_Pelamar extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->library('upload');
    }

    public function index()
    {
        // get data
    }

    public function insertData(
        // $id_m,
        $nama_m,
        $provinsi_m,
        $kota_kabupaten_m,
        $kecamatan_m,
        $alamat_lengkap_m,
        $jk_m,
        $tgl_lahir_m,
        $no_telp_m,
        $status_perkawinan_m,
        $pendidikan_terakhir_m,
        $surat_lamaran_m,
        $cv_m
    )
    // add data
    {
        $data                   = array();

        // $data['id']                     = $id_m;
        $data['nama']                   = $nama_m;
        $data['provinsi']               = $provinsi_m;
        $data['kota_kabupaten']         = $kota_kabupaten_m;
        $data['kecamatan']              = $kecamatan_m;
        $data['alamat_lengkap']         = $alamat_lengkap_m;
        $data['jk']                     = $jk_m;
        $data['tgl_lahir']              = $tgl_lahir_m;
        $data['no_telp']                = $no_telp_m;
        $data['status_perkawinan']      = $status_perkawinan_m;
        $data['pendidikan_terakhir']    = $pendidikan_terakhir_m;
        $data['surat_lamaran']          = $surat_lamaran_m;
        $data['cv']                     = $cv_m;

        return $this->db->insert('tbl_karyawan', $data);
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
}
