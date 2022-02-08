<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Absensi extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        // is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');
        $this->load->model('M_kehadiran');
    }

    public function index()
    {
        $data['title'] = 'Absensi';
        $data['user']   = $this->M_auth->getUserRow();
        $role_id        = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();

        $today = date("Y-m-d");

        // $data['getuser'] = $this->M_kehadiran->getUserKehadiran($today)->result_array();
        $data['getuser'] = $this->M_kehadiran->getUserKehadiran2()->result_array();
        $data['gethadir'] = $this->M_kehadiran->getKehadiran()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/kehadiran/absensi/v-detail', $data);
        $this->load->view('dashboard/kehadiran/absensi/v-tablist', $data);
        $this->load->view('dashboard/kehadiran/absensi/v-tab-hadir', $data);
        $this->load->view('dashboard/kehadiran/absensi/v-tab-izin', $data);
        $this->load->view('template/template_admin/footer_ad');
        
        // dibuang ---------------------------------------------------------------
        // $this->load->view('dashboard/kehadiran/absensi/v-tab-tidakhadir', $data);
        // $this->load->view('karyawan/kehadiran/v_absensi_karyawan', $data);
    }

    // Update rating
    public function insertUser()
    {
        $tanggal = date("Y-m-d");
        // $jam = time("H:i:s");
        $jam = date('H:i:s');
        $sts = $this->input->post('status_id');
        $dt = $this->input->post('dates');

        $dt1 = $this->input->post('user_ids');

        foreach ($dt1 as $d) {
            $data = array(
                'user_id'     => $d,
                'tanggal'     => $dt,
                'jam_masuk'   => $jam,
                'status'      => $sts
            );
            $insert = $this->M_kehadiran->insertUser($data);
        }

        if ($insert) {
            $this->session->set_flashdata('status', 'Insert Data Berhasil');
            redirect('admin2/kehadiran/absensi');
        } else {
            $this->session->set_flashdata('status', 'Insert Data Gagal');
            redirect('admin2/kehadiran/absensi');
        }
    }
}
