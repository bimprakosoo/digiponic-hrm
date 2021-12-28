<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class LamaranMasuk extends CI_Controller
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
        $this->load->model('M_organisasi');
        $this->load->model('M_pelamar');

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
    }

    public function index()
    {
        $data['title'] = 'Lamaran Masuk';

        $data['lowongan'] = $this->M_admin->lowongan_ad();
        $data['lamaran_masuk'] = $this->M_admin->lamaran_masuk()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/lamaran_masuk', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
