<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Permohonan_cuti extends CI_Controller
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

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
    }

    public function index()
    {
        $data['user'] = $this->M_auth->getUserRow();
        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/cuti/v_permohonan_cuti', $data);
        $this->load->view('template/template_admin/footer_ad', $data);
    }
    // public function lowongan_ad()
    // {

    //     $data['lowongan'] = $this->M_admin->lowongan_ad();

    //     $this->load->view('template/template_admin/sidebar_ad');
    //     $this->load->view('template/template_admin/header_ad');
    //     $this->load->view('dashboard/pekerjaan/lowongan_ad', $data);
    //     $this->load->view('template/template_admin/footer_ad');
    // }
    public function lowongan_ad()
    {
        //library pagination
        $this->load->library('pagination');

        //config
        $config['base_url'] = site_url() . 'admin/lowongan_ad';
        $config['total_rows'] = $this->M_admin->countAllLowongan();
        $config['per_page'] = 2;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';

        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '</li>';

        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']    = '</a></li>';

        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';

        $config['full_tag_open']    = '<nav class="m-3"><ul class="pagination justify-content-end">';
        $config['full_tag_close']   = ' </ul></nav>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['lowongan'] = $this->M_admin->lowongan_ad($config['per_page'],  $data['start']);

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah_lowongan()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/tambah_lowongan_ad');
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data pelamar
    function create()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'nama_lowongan'      =>  $this->input->post('nama_lowongan'),
                'lokasi' =>  $this->input->post('lokasi'),
                'perusahaan' =>  $this->input->post('perusahaan'),
                'industri' =>  $this->input->post('industri'),
                'tipe_pekerjaan' =>  $this->input->post('tipe_pekerjaan'),
                'pengalaman_kerja' =>  $this->input->post('pengalaman_kerja'),
                'insentif_lembur' =>  $this->input->post('insentif_lembur'),
                'level_pekerjaan' =>  $this->input->post('level_pekerjaan'),
                'pendidikan' =>  $this->input->post('pendidikan'),
                'waktu_bekerja' =>  $this->input->post('waktu_bekerja'),
                'gaji' =>  $this->input->post('gaji'),
                'post_date' =>  $this->input->post('post_date'),
                'ket' =>  $this->input->post('ket'),
                'syarat_pengalaman' =>  $this->input->post('syarat_pengalaman'),
                'tunjangan' =>  $this->input->post('tunjangan'),
                'image' =>     $this->M_admin->file_image()
            );
            // var_dump($data);
            // die;

            $insert =  $this->db->insert('lowongan', $data);
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            $this->lowongan_ad();
        } else {
            $this->lowongan_ad();
        }
    }

    public function lamaran_masuk()
    {
        $data['lamaran_masuk'] = $this->M_admin->lamaran_masuk()->result_array();
        // var_dump($data);
        // die;
        // $data['pilih'] = $this->M_admin->get_data_lamaran()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lamaran_masuk', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
