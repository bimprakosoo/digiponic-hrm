<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

    public function index()
    {
        $this->load->view('landingpage/landingpage_view');
    }

    public function Tentang()
    {
        $isi['content'] = 'dashboard/home';
        $this->load->view('dashboard/admin',$isi);
    }

    public function departemen()
    {
    $this->load->view('landingpage/departemen_view');
    }
    public function lowongan()
    {
    $this->load->view('landingpage/lowongan_view');
    }

    public function artikel()
    {
    $this->load->view('landingpage/artikel_view');
    }

    public function karyawan()
    {
    $this->load->view('landingpage/karyawan_view');
    }

    public function kontak()
    {
    $this->load->view('landingpage/kontak_view');
    }
    
}
