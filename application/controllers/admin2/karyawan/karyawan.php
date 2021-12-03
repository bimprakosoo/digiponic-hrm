<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }

    public function data_karyawan()
    {
        $data['datakaryawan'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('karyawan/index', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
