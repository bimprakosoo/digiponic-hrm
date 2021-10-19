<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

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
        $this->load->view('template/header');
        $this->load->view('landingpage/lowongan_view');
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
