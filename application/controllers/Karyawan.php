<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function index()
    {
        // $this->load->view('template/headerauth');
        $this->load->view('dashboard/admin');
    }

    public function lowongan_detail()
    {
        // $this->load->view('template/headerauth');
        $this->load->view('lowongan/lowongan_detail_view');
    }

    public function lamaran()
    {
        // $this->load->view('template/headerauth');
        $this->load->view('lowongan/lowongan_lamaran_view');
    }
}
