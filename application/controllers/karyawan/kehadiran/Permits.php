<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Permits extends CI_Controller
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
        $this->load->model('M_upload');
        $this->load->model('M_kehadiran');


        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
    }

    public function index()
    {
        $idUser = $this->session->userdata('id');
        $data['title'] = 'Izin';
        $data['izin']  = $this->M_kehadiran->getIzin($idUser)->result_array();
        $this->load->view('karyawan/kehadiran/v_surat_izin', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data form izin   
    function izinForm()
    {
        $date = date("Y-m-d");
        $time = date('H:i:s');

        if (isset($_POST['submit'])) {

            $data = array(
                'karyawan_id'   =>  $this->input->post('UserId'),
                'date_created'  =>  $date,
                'time_created'  =>  $time,
                'keterangan'    =>  $this->input->post('keterangan'),
                'image'         =>  $this->M_upload->izin()
            );



            $insert = $this->M_kehadiran->postIzin($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Check-in berhasil');
                redirect('karyawan/kehadiran/permits');
            } else {
                $this->session->set_flashdata('status', 'Check-in gagal');
                redirect('karyawan/kehadiran/permits');
            }
        } else {
            redirect('karyawan/kehadiran/permits');
        }
    }
}
