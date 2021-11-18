<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Penempatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
    }


    public function index()
    {
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_penempatan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
