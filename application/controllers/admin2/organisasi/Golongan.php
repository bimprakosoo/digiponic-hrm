<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Golongan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
    }

    public function index()
    {
        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_golongan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data 
    function add_gol()
    {

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'         =>  $this->input->post('id'),
                'nama'          =>  $this->input->post('golongan'),
                'jabatan_id'   =>  $this->input->post('jabatan')
            );
            $insert = $this->M_organisasi->postDataGolongan($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/golongan');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/golongan');
            }
        } else {
            redirect('admin2/organisasi/golongan');
        }
    }
}
