<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Top_kerja extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');
        $this->load->model('M_organisasi');
        $this->load->model('M_pelamar');

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
    }

    public function index()
    {
        $data['title'] = 'User Access';

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('karyawan/penilaian_kerja/v_penilaian_kerja', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah()
    {
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/penilaian_kerja/v_tambah_departemen');
        $this->load->view('template/template_admin/footer_ad');
    }
}
