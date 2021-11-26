<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jabatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
    }

    public function index()
    {
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_jabatan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data 
    function add_jab()
    {

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'         =>  $this->input->post('id'),
                'nama'             =>  $this->input->post('jabatan'),
                'divisi_id'        =>  $this->input->post('divisi'),
            );

            $insert = $this->M_organisasi->postDataJabatan($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/jabatan');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/jabatan');
            }
        } else {
            redirect('admin2/organisasi/jabatan');
        }
    }
}
