<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cuti extends CI_Controller
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
        $this->load->model('M_pengajuan');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Pengajuan Cuti';


        // $data['cuti'] = $this->M_pengajuan->pengajuanCuti();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('karyawan/pengajuan/v_cuti', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // menambahkan data pengajuan cuti karyawan
    public function kirim_pengajuan_cuti()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                
                'tgl_mulai'         => $this->input->post('tgl_mulai'),
                'tgl_selesai'       => $this->input->post('tgl_berakhir'),
                'keterangan'       => $this->input->post('keterangan')
            );

            $insert = $this->M_pengajuan->insert_pengajuanCuti($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('karyawan/pengajuan/cuti');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('karyawan/pengajuan/cuti');
            }
        } else {
            redirect('karyawan/pengajuan/cuti');
        }
    }
}
