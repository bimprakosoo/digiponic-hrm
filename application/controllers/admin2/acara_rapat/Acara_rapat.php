<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Acara_rapat extends CI_Controller
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

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
    }

    public function index()
    {
        $data['user'] = $this->M_auth->getUserRow();
        $data['acara'] = $this->M_admin->getDataAcara()->result_array();


        // $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/acara_rapat/v_acara_rapat', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function tambah()
    {
        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'jenis_kegiatan'              =>  $this->input->post('jenis_kegiatan'),
                'nama_kegiatan'        =>  $this->input->post('nama_kegiatan'),
                'tgl_kegiatan'        =>  $this->input->post('tgl_kegiatan'),
                'waktu_dimulai'        =>  $this->input->post('waktu_dimulai'),
                'waktu_berakhir'        =>  $this->input->post('waktu_berakhir')
            );

            $insert = $this->M_admin->postDataAcaraRapat($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/acara_rapat/acara_rapat');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/acara_rapat/acara_rapat');
            }
        } else {
            redirect('admin2/acara_rapat/acara_rapat');
        }
    }
    // public function lowongan_ad()
    // {

    //     $data['lowongan'] = $this->M_admin->lowongan_ad();

    //     $this->load->view('template/template_admin/sidebar_ad');
    //     $this->load->view('template/template_admin/header_ad');
    //     $this->load->view('dashboard/pekerjaan/lowongan_ad', $data);
    //     $this->load->view('template/template_admin/footer_ad');
    // }

}
