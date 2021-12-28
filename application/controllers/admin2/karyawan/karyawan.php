<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
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
        $data['user'] = $this->M_auth->getUserRow();
        $data['datakaryawan'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('karyawan/index', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
