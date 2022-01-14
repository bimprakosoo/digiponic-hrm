<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kpi_karyawan extends CI_Controller
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
        $this->load->model('M_mutasi');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'KPI Karyawan';

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/penilaian_kerja/v_kpi_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Data Kpi Karyawan';

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/penilaian_kerja/v_tambah_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function postKPI()
    {
        $dates = date("Y-m-d");

        if (isset($_POST['submit'])) {
            $data = array(
                'tanggal'           =>  $dates,
                'karyawan_id'       =>  $this->input->post('UserId'),
                
            );

            $insert = $this->M_kehadiran->postCheckIn($data);

        //     if ($insert) {
        //         $this->session->set_flashdata('status', 'Check-in berhasil');
        //         redirect('karyawan/kehadiran/absensi');
        //     } else {
        //         $this->session->set_flashdata('status', 'Check-in gagal');
        //         redirect('karyawan/kehadiran/absensi');
        //     }
        // } else {
        //     redirect('karyawan/kehadiran/absensi');
        }
    }
}
