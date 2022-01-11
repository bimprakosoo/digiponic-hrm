<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Izin extends CI_Controller
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
    }

    public function index()
    {
        $data['title'] = 'layanan Izin';
        $data['pengajuan']   = $this->M_kehadiran->getAllIzinPengajuan();
        $data['terima'] = $this->M_kehadiran->getAllTerimaPengajuan();
        $data['tolak']  = $this->M_kehadiran->getAllTolakPengajuan();
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/kehadiran/v_sakit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function approveIzin($ids)
    {
        $this->db->get_where('izin', ['id' => $ids])->result();
        $update_status = [
            'izin.status' => 1
        ];
        $data = $this->M_kehadiran->updateIzin($update_status, $ids);
        var_dump($data);
        die;

        redirect('admin2/kehadiran/izin');
    }

    public function tolakIzin($ids)
    {
        $this->db->get_where('izin', ['id' => $ids])->result();
        $update_status = [
            'izin.status' => 2
        ];
        $data = $this->M_kehadiran->updateIzin($update_status, $ids);
        var_dump($data);
        die;

        redirect('admin2/kehadiran/izin');
    }

    public function updateStatus()
    {
        // code
    }
}
