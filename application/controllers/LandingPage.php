<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        // model
        $this->load->model('M_auth');
        $this->load->model('M_admin');
        $this->load->model('M_menu');
        $this->load->model('M_landingpage');

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenuPage($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $this->load->view('template/header', $data);
    }

    public function index()
    {
        $data['start'] = $this->uri->segment(3);
        $data['lowongan'] = $this->M_landingpage->lowongan_lan(3, $data['start']);
        $data['dept'] = $this->M_landingpage->departemen(3, $data['start']);
        $data['artikel'] = $this->M_landingpage->artikel(3, $data['start']);

        // $this->load->view('template/header');
        $this->load->view('landingpage/landingpage_view', $data);
        $this->load->view('template/footer');
    }

    // Page Deksripsi Tentang Perusahaan
    public function Tentang()
    {
        // $this->load->view('template/header');
        $this->load->view('landingpage/tentang_view');
        $this->load->view('template/footer');;
    }

    public function departemen()
    {
        // $this->load->view('template/header');
        $this->load->view('landingpage/departemen_view');
        $this->load->view('template/footer');
    }

    // Page Lowongan Kerja DiPerusahaan
    public function lowongan()
    {

        $data['lowongan'] = $this->M_landingpage->lowongan();


        // $this->load->view('template/header');
        $this->load->view('landingpage/lowongan_view', $data);
        $this->load->view('template/footer');
        // var_dump($data);
    }
    public function lowongan_detail($data_id)
    {
        // $data['lowongan'] = $this->M_admin->lowongan_ad()->result_array();
        $data['lowongan'] = $this->db->get_where('lowongan', ['id_lowongan' => $data_id])->row_array();

        // var_dump($data);
        // die;
        // $this->load->view('template/headerauth');
        // $this->load->view('template/header');
        $this->load->view('lowongan/lowongan_detail_view', $data);
        $this->load->view('template/footer');
    }


    public function artikel()
    {
        // $this->load->view('template/header');
        $this->load->view('landingpage/artikel_view');
        $this->load->view('template/footer');
    }

    public function karyawan()
    {
        // $this->load->view('template/header');
        $this->load->view('landingpage/karyawan_view');
        $this->load->view('template/footer');
    }

    public function kontak()
    {
        // $this->load->view('template/header');
        $this->load->view('landingpage/kontak_view');
        $this->load->view('template/footer');
    }
}
