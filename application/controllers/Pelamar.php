<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pelamar extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
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
        $this->load->view('template/header');
        $this->load->view('landingpage/landingpage_view');
        $this->load->view('template/footer');
    }

    // insert data pelamar
    function create()
    {
        // $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {
            // $ch = curl_init();
            $data = array(
                // 'id'=>  $this->input->post('id'),
                'nama'                  =>  $this->input->post('nama'),
                'provinsi'              =>  $this->input->post('provinsi'),
                'kota_kabupaten'        =>  $this->input->post('kota_kabupaten'),
                'kecamatan'             =>  $this->input->post('kecamatan'),
                'alamat_lengkap'        =>  $this->input->post('alamat_lengkap'),
                'jk'                    =>  $this->input->post('jk'),
                'tgl_lahir'             =>  $this->input->post('tgl_lahir'),
                'no_telp'               =>  $this->input->post('no_telp'),
                'status_perkawinan'     =>  $this->input->post('status_perkawinan'),
                'pendidikan_terakhir'   =>  $this->input->post('pendidikan_terakhir'),
                'surat_lamaran'         =>  $this->M_Pelamar->file_lamaran(),
                'cv'                    =>  $this->M_Pelamar->file_cv()
            );

            // $url = site_url() . 'api/pelamar/create';
            // $res = $this->curl->post_multi($url, $data);
            $insert =  $this->curl->simple_post($this->API . '/pelamar/create', $data, array(CURLOPT_BUFFERSIZE => 10));
            // echo curl_getinfo($ch) . '<br/>';
            // echo curl_errno($ch) . '<br/>';
            // echo curl_error($ch) . '<br/>';
            // va`r_dump($insert);
            // die;`
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
                // redirect('landingPage/lowongan');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('pelamar');
            // var_dump($insert);
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
