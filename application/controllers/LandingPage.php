<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/landingpage_view');
    }
    public function departemen()
    {
    $this->load->view('departemen/departemen_view');
    }
    public function lowongan()
    {
    $this->load->view('lowongan/lowongan_view');
    }

    public function artikel()
    {
    $this->load->view('artikel/artikel_view');
    }

    public function karyawan()
    {
    $this->load->view('lowongan/lowongan_view');
    }

    public function kontak()
    {
    $this->load->view('kontak/kontak_view');
    }
    
}
