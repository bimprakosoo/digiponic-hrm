<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class PenilaianKinerja extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        // is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->M_auth->getUserRow();
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('dashboard/karyawan/v_detail_karyawan');
        $this->load->view('dashboard/karyawan/v_profil');
        $this->load->view('dashboard/karyawan/v_penilaian');
        $this->load->view('dashboard/karyawan/v_pelacakan');
        $this->load->view('dashboard/karyawan/v_mutasi');
        $this->load->view('dashboard/karyawan/v_detail_training');
        $this->load->view('template/template_admin/footer_ad');
    }
}
