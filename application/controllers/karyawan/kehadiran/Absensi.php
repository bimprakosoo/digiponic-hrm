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
        $iduser    = $this->session->userdata('id');
        $data['user'] = $this->M_auth->getUserRow();
        // $data['idabsen'] = $this->M_kehadiran->getAbsensi();
        $data['absen'] = $this->M_kehadiran->getAbsensi($iduser)->result_array();


        $this->load->view('karyawan/kehadiran/v_absensi_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert  
    function Absen_CheckIn()
    {
        $dates = date("Y-m-d");
        $times = date('H:i:s');

        if (isset($_POST['submit'])) {
            $data = array(
                'karyawan_id'   =>  $this->input->post('UserId'),
                'tanggal'           =>  $dates,
                'jam_masuk'   =>  $times
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


    // update 
    function Absen_CheckOut()
    {

        $iduser   = $this->session->userdata('id');

        $karyawan_id     = $this->M_kehadiran->getDateToday($iduser);
        $tanggal     = $this->M_kehadiran->getDateToday('tanggal');
        $jam_masuk     = $this->M_kehadiran->getDateToday('jam_masuk');
        $times = date('H:i:s');
        $dates = date("Y-m-d");
        $data = array(
            'jam_keluar'    =>  $times
        );
        $this->M_kehadiran->updateAbsen($dates, $data, $iduser);
        redirect('karyawan/kehadiran/absensi');
    }
}
