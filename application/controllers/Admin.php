<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');

        $this->load->library('table');
        $this->load->library('form_validation');
        is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->M_auth->getUserRow();
        // $data['roleid'] = $this->M_auth->getRoleId();

        // $role_id    = $this->session->userdata('role_id');
        // $data['qmenu'] = $this->M_auth->queryMenu($role_id);

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/dashboard_ad/v_dashboard', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function hasil_seleksi()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/hasil_seleksi');
        $this->load->view('template/template_admin/footer_ad');
    }

    // detail karyawan
    public function data_karyawan()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->M_auth->getUserRow();
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/karyawan/v_detail_karyawan');
        $this->load->view('dashboard/karyawan/v_profil');
        $this->load->view('dashboard/karyawan/v_penilaian');
        $this->load->view('dashboard/karyawan/v_pelacakan');
        $this->load->view('dashboard/karyawan/v_mutasi');
        $this->load->view('dashboard/karyawan/v_detail_training');
        $this->load->view('template/template_admin/footer_ad');
    }

    // delete data kontak
    // function delete($id)
    // {
    //     if (empty($id)) {
    //         redirect('dashboard/lamaran_masuk');
    //     } else {
    //         $delete =  $this->curl->simple_delete($this->API . '/admin', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
    //         if ($delete) {
    //             $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
    //         } else {
    //             $this->session->set_flashdata('hasil', 'Delete Data Gagal');
    //         }
    //         redirect('dashboard/lamaran_masuk');
    //     }
    // }

    // public function diterima($dapat_di)
    // {
    //     // pindah data karywaan yang diterima ke tbl_karyawan
    //     $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
    //     foreach ($data as $r) {
    //         $data = [
    //             'id'                    =>  $r->id,
    //             'nama'                  =>  $r->nama,
    //             'provinsi'              =>  $r->provinsi,
    //             'kota'        =>  $r->kota,
    //             'kecamatan'             =>  $r->kecamatan,
    //             'alamat_lengkap'        =>  $r->alamat_lengkap,
    //             'jk'                    =>  $r->jk,
    //             'tgl_lahir'             =>  $r->tgl_lahir,
    //             'no_telp'               =>  $r->no_telp,
    //             'status_perkawinan'     =>  $r->status_perkawinan,
    //             'pendidikan_terakhir'   =>  $r->pendidikan_terakhir,

    //         ];

    //         $this->M_admin->terima_pelamar($data);
    //     }

    //     // update status dari data pelamaran [1 => diterima | 2 => ditolak]
    //     $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
    //     $update_status = [
    //         'status' => 1
    //     ];
    //     $this->M_admin->update_status_pelamar($update_status, $dapat_di);

    //     // delete data lamaran yang telah di action
    //     $delete =  $this->curl->simple_delete($this->API . '/admin', array('id' => $dapat_di), array(CURLOPT_BUFFERSIZE => 10));
    //     // $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
    //     // $this->M_admin->delete_pelamar();


    //     redirect('admin/lamaran_masuk');
    // }

    // // 
    // public function ditolak($dapat_di)
    // {
    //     $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
    //     $update_status = [
    //         'status' => 2
    //     ];
    //     $this->M_admin->update_status_pelamar($update_status, $dapat_di);

    //     redirect('admin/lamaran_masuk');
    // }
}
