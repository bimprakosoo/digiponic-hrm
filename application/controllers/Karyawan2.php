<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = $this->API = site_url() . 'api';
        is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/home_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
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
