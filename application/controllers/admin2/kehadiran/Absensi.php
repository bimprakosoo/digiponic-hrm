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

        $data['getuser'] = $this->M_kehadiran->getUserKehadiran()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('karyawan/kehadiran/v_absensi_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // Update rating
    public function insertUser()
    {
        // $dates = date("Y-m-d");
        // POST values
        // $dates = date("Y-m-d");
        $sts = $this->input->post('status_id');
        $dt = $this->input->post('dates');

        $dt1 = $this->input->post('user_ids');

        // $dt2 = 1;
        foreach ($dt1 as $d) {
            // $array = array($d);
            $data = array(
                'user_id'     => $d,
                'tanggal'     => $dt,
                'status'     => $sts
            );
        }

        // foreach ($data as $d) {
        // 	$array = array('user_id' => $d);
        // }
        // insert records
        $insert = $this->M_kehadiran->insertUser($data);

        if ($insert) {
            $this->session->set_flashdata('status', 'Insert Data Berhasil');
            redirect('admin2/kehadiran/absensi');
        } else {
            $this->session->set_flashdata('status', 'Insert Data Gagal');
            redirect('admin2/kehadiran/absensi');
        }
    }
}
