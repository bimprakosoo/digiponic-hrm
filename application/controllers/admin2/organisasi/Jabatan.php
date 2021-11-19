<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
    }

    public function index()
    {
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_jabatan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
