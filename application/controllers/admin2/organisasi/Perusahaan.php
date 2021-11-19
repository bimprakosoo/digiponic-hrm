<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
    }

    public function index()
    {
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_perusahaan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah_perusahaan()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_create_perusahaan');
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data pelamar
    function create_perusahaan()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),

            );


            $insert =  $this->db->insert('tabel', $data);
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
                redirect('perusahaan');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
                redirect('perusahaan');
            }
        } else {
            // $this->lowongan_ad();
        }
    }
}
