<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pengunduran_diri extends CI_Controller
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
        $data['user'] = $this->M_auth->getUser_row();

        $data['resign'] = $this->M_pengajuan->getDataResign()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/cuti/v_pengunduran_diri', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

     public function approveRequest($ids)
    {
        $this->db->get_where('data_resign', ['id' => $ids])->result();
        $update_status = [
            'status' => 2
        ];


        $notif = array(
            'role_id' => 2,
            'jenis_notifikasi' => 'Pengajuan Resign diterima',
            'created_at' => date('Y-m-d H:i:s'),
            'read_status' => 0,
            'status' => 1
        );

        $insert = $this->M_pengajuan->updateResign($update_status, $ids);

        if ($insert) {
            $insert_notif = $this->M_notifikasi->addNotif($notif);
            if ($insert_notif) {
                $this->session->set_flashdata('status', 'Data Ijin Berhasil Masuk');
                redirect('admin2/cuti/pengunduran_diri');
            } else {
                $this->session->set_flashdata('status', 'Data Ijin Gagal Masuk');
                redirect('admin2/cuti/pengunduran_diri');
            }
        } else {
            $this->session->set_flashdata('status', 'Check-in gagal');
            redirect('admin2/cuti/pengunduran_diri');
        }
        // redirect('admin2/cuti/pengunduran_diri');
    }

    public function tolakRequest($ids)
    {
        $this->db->get_where('data_resign', ['id' => $ids])->result();
        $update_status = [
            'status' => 3
        ];
        $notif = array(
            'role_id' => 2,
            'jenis_notifikasi' => 'Pengajuan Resing ditolak',
            'created_at' => date('Y-m-d H:i:s'),
            'read_status' => 0,
            'status' => 1
        );

        $insert = $this->M_pengajuan->updateResign($update_status, $ids);
        if ($insert) {
            $insert_notif = $this->M_notifikasi->addNotif($notif);
            if ($insert_notif) {
                $this->session->set_flashdata('status', 'Data Ijin Berhasil Masuk');
                redirect('admin2/cuti/pengunduran_diri');
            } else {
                $this->session->set_flashdata('status', 'Data Ijin Gagal Masuk');
                redirect('admin2/cuti/pengunduran_diri');
            }
        } else {
            $this->session->set_flashdata('status', 'Check-in gagal');
            redirect('admin2/cuti/pengunduran_diri');
        }
    }
}
