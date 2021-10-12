<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/digiponic-hrm/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('form_validation');
        // if ($this->session->userdata('status') != true) {
        //     redirect(base_url("login"));
        // }
    }

    public function index()
    {

        // $this->load->view('template/headerauth');
        // $this->load->view('pelamar/admin');
        $this->load->view('landingpage/landingpage_view');
    }

    // insert data pelamar
    function create()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {
            // upload file surat lamaran--------------------------------------------------------------------------------------
            $config['upload_path'] = "./dokumen/surat_lamaran";
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

            // uplaod file cv--------------------------------------------------------------------------------------
            $config['upload_path'] = "./dokumen/cv";
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

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'provinsi' =>  $this->input->post('provinsi'),
                'kota_kabupaten' =>  $this->input->post('kota_kabupaten'),
                'kecamatan' =>  $this->input->post('kecamatan'),
                'alamat_lengkap' =>  $this->input->post('alamat_lengkap'),
                'jk' =>  $this->input->post('jk'),
                'tgl_lahir' =>  $this->input->post('tgl_lahir'),
                'no_telp' =>  $this->input->post('no_telp'),
                'status_perkawinan' =>  $this->input->post('status_perkawinan'),
                'pendidikan_terakhir' =>  $this->input->post('pendidikan_terakhir'),
                'up_lamaran' =>     $file_lamaran,
                'up_cv' =>          $file_cv
            );
            // var_dump($data);
            // die;

            $insert =  $this->curl->simple_post($this->API . '/pelamar', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('pelamar');
        } else {
            $this->load->view('lowongan/lowongan_lamaran_view');
        }
    }

    public function lamaran()
    {
        // $this->load->view('template/headerauth');
        $this->load->view('lowongan/lowongan_lamaran_view');
    }
}
