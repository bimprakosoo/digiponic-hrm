<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Absensi extends CI_Controller
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
        $data['title'] = 'Absensi';
        $data['user'] = $this->M_auth->getUserRow();
        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/kehadiran/v_absensi', $data);
        $this->load->view('template/template_admin/footer_ad', $data);
    }
   
}
