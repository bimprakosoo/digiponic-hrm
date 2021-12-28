<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller
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
        $this->load->model('M_organisasi');


        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
    }

    public function index()
    {
        $data['artikel'] = $this->M_organisasi->getDataArtikel()->result_array();


        // $this->load->view('template/template_admin/sidebar_ad', $data);
        // $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/artikel/v_artikel', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function tambah()
    {
        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'judul_artikel'              =>  $this->input->post('judul_artikel'),
                'isi_artikel'        =>  $this->input->post('perusahaan'),
                'image' =>     $this->M_admin->file_image1(),
                'post_date'        =>  $this->input->post('post_date'),
            );

            $insert = $this->M_organisasi->postDataArtikel($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/artikel/artikel');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/artikel/artikel');
            }
        } else {
            redirect('admin2/artikel/artikel');
        }
    }
}
