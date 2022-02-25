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
        $this->load->model('M_kpi');
        $this->load->model('M_dashboard_karyawan');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $id                 = $this->session->userdata('idusers');
        $role_id            = $this->session->userdata('role_id');
        $data['roleMenu']   = $this->M_menu->userMenu($role_id)->result_array();
        $data['user']       = $this->M_auth->getUser_row();


        $data['statusAbsen'] = $this->M_dashboard_karyawan->get_statusAbsensi($id)->row_array();
        // $data['KPI'] = $this->M_kpi->get_KpiIndikator()->result_array();
        $data['KPI'] = $this->M_kpi->KPIDashboard($id)->row_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('karyawan/v_dashboard', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
