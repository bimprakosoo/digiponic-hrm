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
        $data['lowongan'] = $this->M_admin->lowongan_ad()->result_array();

        // $this->load->view('template/headerauth');
        $this->load->view('template/header');
        $this->load->view('lowongan/lowongan_detail_view');
        $this->load->view('template/footer');;
    }

    public function lamaran()
    {
        // $this->load->view('template/headerauth');
        $this->load->view('template/header');
        $this->load->view('lowongan/lowongan_lamaran_view');
        $this->load->view('template/footer');;
    }
}
