<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        // liblary

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
    }

    public function index()
    {
        $data['title'] = 'Kehadiran';
        $data['user'] = $this->M_auth->getUserRow();
        // $data['roleid'] = $this->M_auth->getRoleId();

        // menu
        $role_id    = $this->session->userdata('role_id');
        $data['qmenu'] = $this->M_auth->queryMenu($role_id);

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/home_ad', $data);
        $this->load->view('template/template_admin/footer_ad', $data);
    }

    // public function index()
    // {
    //     // $this->load->view('template/headerauth');
    //     $this->load->view('dashboard/admin');
    // }

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
