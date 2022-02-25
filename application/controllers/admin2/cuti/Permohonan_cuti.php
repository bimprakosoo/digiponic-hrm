<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Permohonan_cuti extends CI_Controller
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
        $this->load->model('M_notifikasi');
    }

    public function index()
    {

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $data['cuti'] = $this->M_pengajuan->getDataCuti()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/cuti/v_permohonan_cuti', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function approveRequest($ids)
    {
        $this->db->get_where('data_cuti', ['id' => $ids])->result();
        $update_status = [
            'status' => 2
        ];


        $notif = array(
            'role_id' => 1,
            'jenis_notifikasi' => 'Pengajuan Cuti diterima',
            'created_at' => date('Y-m-d H:i:s'),
            'read_status' => 0,
            'status' => 1
        );

        $insert = $this->M_pengajuan->updateCuti($update_status, $ids);

        if ($insert) {
            $insert_notif = $this->M_notifikasi->addNotif($notif);
            if ($insert_notif) {
                $this->session->set_flashdata('status', 'Data Ijin Berhasil Masuk');
                redirect('admin2/cuti/permohonan_cuti');
            } else {
                $this->session->set_flashdata('status', 'Data Ijin Gagal Masuk');
                redirect('admin2/cuti/permohonan_cuti');
            }
        } else {
            $this->session->set_flashdata('status', 'Check-in gagal');
            redirect('admin2/cuti/permohonan_cuti');
        }
        // redirect('admin2/cuti/permohonan_cuti');
    }

    public function tolakRequest($ids)
    {
        $this->db->get_where('data_cuti', ['id' => $ids])->result();
        $update_status = [
            'status' => 3
        ];
        $notif = array(
            'role_id' => 1,
            'jenis_notifikasi' => 'Pengajuan Cuti ditolak',
            'created_at' => date('Y-m-d H:i:s'),
            'read_status' => 0,
            'status' => 1
        );

        $insert = $this->M_pengajuan->updateCuti($update_status, $ids);
        if ($insert) {
            $insert_notif = $this->M_notifikasi->addNotif($notif);
            if ($insert_notif) {
                $this->session->set_flashdata('status', 'Data Ijin Berhasil Masuk');
                redirect('admin2/cuti/permohonan_cuti');
            } else {
                $this->session->set_flashdata('status', 'Data Ijin Gagal Masuk');
                redirect('admin2/cuti/permohonan_cuti');
            }
        } else {
            $this->session->set_flashdata('status', 'Check-in gagal');
            redirect('admin2/cuti/permohonan_cuti');
        }
    }

   
}
