<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hak_istimewa extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('table');
        $this->load->library('form_validation');

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
    }

    public function index()
    {
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/hak_istimewa/v_hak_istimewa', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function tambah()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/penilaian_kerja/v_tambah_departemen');
        $this->load->view('template/template_admin/footer_ad');
    }
}
