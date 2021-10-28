<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/digiponic-hrm/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_admin');
    }

    public function index()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/home_ad');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function lowongan_ad()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lowongan_ad');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function lamaran_masuk()
    {
        $data['lamaran_masuk'] = $this->M_admin->lamaran_masuk()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lamaran_masuk', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function hasil_seleksi()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/hasil_seleksi');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function mutasi()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/mutasi/mutasi');
        $this->load->view('template/template_admin/footer_ad');
    }
    // sidebar karyawan
    public function data_karyawan()
    {
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('karyawan/index', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // delete data kontak
    function delete($id)
    {
        if (empty($id)) {
            redirect('dashboard/lamaran_masuk');
        } else {
            $delete =  $this->curl->simple_delete($this->API . '/admin', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('dashboard/lamaran_masuk');
        }
    }

    public function diterima($diterima_id)
    {

        $data = $this->db->get_where('data_lamaran', ['id' => $diterima_id])->result();
        foreach ($data as $r) {
            $insert = $this->db->insert('tbl_karyawan', $r); // masukan setiap baris ke tabel lain
        }
        redirect('admin/lamaran_masuk');
    }
}
