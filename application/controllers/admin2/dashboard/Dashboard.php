<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $this->load->model('M_organisasi');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Dashboard';

        $data['getMutasi'] = $this->M_mutasi->get_DataMutasi2()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/dashboard_ad/v_dashboard', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // ini buat apa lupa aku
    public function tambah()
    {
        $this->load->view('dashboard/penilaian_kerja/v_tambah_departemen');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function profile()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Profile';

        $data['getMutasi'] = $this->M_admin->get_DataMutasi()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/profil', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function profileEdit()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Edit Profile';

        $data['getMutasi'] = $this->M_admin->get_DataMutasi()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/profil_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // update
    public function profileEditPass()
    {
        $iduser   = $this->session->userdata('id');
        $data = array(
            'password'  =>  password_hash($this->input->post('pass'), PASSWORD_DEFAULT),

        );
        // var_dump($data, $iduser); die;
        $this->M_organisasi->update_profile($iduser, $data);
        redirect('admin2/dashboard/dashboard/profile');
    }

    public function terimaMutasi($IDmutasi)
    {

        $data = $this->db->get_where('mutasi', ['karyawan_id' => $IDmutasi])->result();
        foreach ($data as $r) {
            $update_datakaryawan = [
                'department_id'     =>  $r->department_id,
                'divisi_id'         =>  $r->divisi_id,
                'jabatan_id'        =>  $r->jabatan_id,
                'posisi_id'         =>  $r->posisi_id,
                'penempatan_id'     =>  $r->penempatan_id,
                'golongan_id'       =>  $r->golongan_id
            ];

            $this->M_mutasi->update_dataMutasiKaryawan($update_datakaryawan, $IDmutasi);
        }
        // update status dari tbl mutasi [1 => diterima | 2 => ditolak] 
        $updateStatus = array(
            'status' => 1,
            'hari_efektif' => $this->input->post('hari_efektif')
        );

        $this->M_mutasi->update_statusMutasi($updateStatus, $IDmutasi);

        redirect('admin2/dashboard/dashboard');
    }
}
