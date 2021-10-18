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
        $this->load->model('M_Pelamar');
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
                'up_lamaran' =>     $this->M_Pelamar->file_lamaran(),
                'up_cv' =>          $this->M_Pelamar->file_cv()
            );
            var_dump($data);
            die;

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
