<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/digiponic-hrm/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_admin');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('landingpage/landingpage_view');
        $this->load->view('template/footer');
    }

    public function Tentang()
    {
        $this->load->view('template/header');
        $this->load->view('landingpage/tentang_view');
        $this->load->view('template/footer');;
    }

    public function departemen()
    {
        $this->load->view('template/header');
        $this->load->view('landingpage/departemen_view');
        $this->load->view('template/footer');
    }
    public function lowongan()
    {
        $data['lowongan'] = $this->M_admin->lowongan_ad()->result_array();


        $this->load->view('template/header');
        $this->load->view('landingpage/lowongan_view',$data);
        $this->load->view('template/footer');
    }
    public function lowongan_detail($data_id)
    {
        // $data['lowongan'] = $this->M_admin->lowongan_ad()->result_array();
        $data['lowongan'] = $this->db->get_where('lowongan', ['id_lowongan' => $data_id])->row_array();
        
        // var_dump($data);
        // die;
        // $this->load->view('template/headerauth');
        $this->load->view('template/header');
        $this->load->view('lowongan/lowongan_detail_view', $data);
        $this->load->view('template/footer');
    }


    public function artikel()
    {
        $this->load->view('template/header');
        $this->load->view('landingpage/artikel_view');
        $this->load->view('template/footer');
    }

    public function karyawan()
    {
        $this->load->view('template/header');
        $this->load->view('landingpage/karyawan_view');
        $this->load->view('template/footer');
    }

    public function kontak()
    {
        $this->load->view('template/header');
        $this->load->view('landingpage/kontak_view');
        $this->load->view('template/footer');
    }
}
