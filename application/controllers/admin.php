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

    // 
    public function editsub($submenu_id)
    {
        // $data['title'] = 'Edit Submenu';
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $data['submenu'] = $this->db->get_where('user_sub_menu', ['id' => $submenu_id])->row_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_ad', $data);
            $this->load->view('templates/sidebar_ad', $data);
            $this->load->view('templates/topbar_ad', $data);
            $this->load->view('menu/edit-submenu', $data);
            $this->load->view('templates/footer_ad', $data);
        } else {
            $submenu_name = $this->input->post('title');
            $data_sub = [
                'title' => $submenu_name,
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'icon' => $this->input->post('icon'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->set($data_sub);
            $this->db->where('id', $submenu_id);
            $this->db->update('user_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Submenu Success!</div>');
            redirect('menu/submenu');
        }
    }

    public function diterima($diterima_id)
    {

        // $this->db->get_where('data_lamaran', ['id' => $diterima_id])->row_array();

        // $data = $this->db->get('data_lamaran')->result();
        $data = $this->db->get_where('data_lamaran', ['id' => $diterima_id])->result();
        foreach ($data as $r) {
            $insert = $this->db->insert('tbl_karyawan', $r); // masukan setiap baris ke tabel lain
        }
        // $insert = $this->db->insert('tbl_karyawan', $data);
        // var_dump($insert);
        // die;
        // if ($insert) {
        //     // $this->response($data, 200);
        // } else {
        //     // $this->response(array('status' => 'fail', 502));
        // }
        redirect('admin/lamaran_masuk');
    }
}
