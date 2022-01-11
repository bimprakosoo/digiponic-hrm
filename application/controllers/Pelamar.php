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
        $this->load->model('M_pelamar');
        $this->load->model('M_auth');
        // if ($this->session->userdata('status') != true) {
        //     redirect(base_url("login"));
        // }
    }

    public function index()
    {
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/header', $data);
        $this->load->view('landingpage/landingpage_view', $data);
        $this->load->view('template/footer', $data);


        // echo 'selamar data ' . $data['user']['nama'];
    }

    public function lamaran()
    {
        // $this->load->view('template/headerauth');
        $data['provinsi'] = $this->M_pelamar->getDataprov();
        $this->load->view('lowongan/lowongan_lamaran_view', $data);
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
                'kota'                  =>  $this->input->post('kota'),
                'kecamatan'             =>  $this->input->post('kecamatan'),
                'alamat_lengkap'        =>  $this->input->post('alamat_lengkap'),
                'jk'                    =>  $this->input->post('jk'),
                'tgl_lahir'             =>  $this->input->post('tgl_lahir'),
                'no_telp'               =>  $this->input->post('no_telp'),
                'status_perkawinan'     =>  $this->input->post('status_perkawinan'),
                'pendidikan_terakhir'   =>  $this->input->post('pendidikan_terakhir'),
                'surat_lamaran'         =>  $this->M_pelamar->file_lamaran(),
                'cv'                    =>  $this->M_pelamar->file_cv()
            );
            $insert =  $this->curl->simple_post($this->API . '/pelamar/create', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
                redirect('pelamar');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
                redirect('pelamar');
            }
            // redirect('pelamar');
            // var_dump($insert);
        } else {
            $this->load->view('lowongan/lowongan_lamaran_view');
        }
    }

    public function getKota()
    {
        $idprov =   $this->input->post('id');
        $data   =   $this->M_pelamar->getDataKota($idprov);
        $output =   '<option value="">-- Pilih Kota --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getKecamatan()
    {
        $idkota =   $this->input->post('id');
        $data   =   $this->M_pelamar->getDataKecamatan($idkota);
        $output =   '<option value="">-- Pilih Kecamatan --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
}
