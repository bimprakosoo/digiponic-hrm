<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = $this->API = site_url() . 'api';
        // is_logged_in();

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

        $data['getMutasi'] = $this->M_admin->get_DataMutasi()->result_array();
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/dashboard_ad/v_dashboard', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah()
    {
        $this->load->view('dashboard/penilaian_kerja/v_tambah_departemen');
        $this->load->view('template/template_admin/footer_ad');
    }
    public function profile()
    {
        $data['title'] = 'Dashboard';

        $data['getMutasi'] = $this->M_admin->get_DataMutasi()->result_array();
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/profil', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function profileEdit()
    {
        $data['title'] = 'Dashboard';

        $data['getMutasi'] = $this->M_admin->get_DataMutasi()->result_array();
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/profil_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
