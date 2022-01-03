<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

date_default_timezone_set('Asia/Jakarta');
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


        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
    }

    public function index()
    {
        $userid    = $this->session->userdata('id');
        $data['user'] = $this->M_auth->getUserRow();
        $data['abse'] = $this->M_kehadiran->getAbsensi($userid)->result_array();


        $this->load->view('karyawan/kehadiran/v_absensi_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data  
    function Absen_CheckIn()
    {
        $dates = date("Y-m-d");
        $times = date('H:i:s');

        if (isset($_POST['submit'])) {
            $data = array(
                'karyawan_id'   =>  $this->input->post('UserId'),
                'jam'           =>  $times,
                'tgl_checkin'   =>  $dates
            );

            $insert = $this->M_kehadiran->postCheckIn($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Check-in berhasil');
                redirect('karyawan/kehadiran/absensi');
            } else {
                $this->session->set_flashdata('status', 'Check-in gagal');
                redirect('karyawan/kehadiran/absensi');
            }
        } else {
            redirect('karyawan/kehadiran/absensi');
        }
    }
    function Absen_CheckOut()
    {
        $dates = date("Y-m-d");
        $times = date('H:i:s');

        if (isset($_POST['submit'])) {
            $data = array(
                'karyawan_id'   =>  $this->input->post('UserId'),
                'jam'           =>  $times,
                'tgl_checkout'  =>  $dates
            );

            $insert = $this->M_kehadiran->postCheckOut($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Check-out berhasil');
                redirect('karyawan/kehadiran/absensi');
            } else {
                $this->session->set_flashdata('status', 'Check-out gagal');
                redirect('karyawan/kehadiran/absensi');
            }
        } else {
            redirect('karyawan/kehadiran/absensi');
        }
    }
}
