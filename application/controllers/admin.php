<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/home_ad');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function lowongan_ad()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lowongan_ad');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function lamaran_masuk()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lamaran_masuk');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function hasil_seleksi()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/hasil_seleksi');
        $this->load->view('template/template_admin/footer_ad');
    }
}
