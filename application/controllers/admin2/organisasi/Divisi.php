<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Divisi extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_organisasi');
    }

    public function index()
    {
        $data['user'] = $this->M_auth->getUserRow();

        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['department'] = $this->M_organisasi->getDataDepartment()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_divisi', $data);
        $this->load->view('template/template_admin/footer_ad', $data);
    }

    // insert data 
    function add_dev()
    {

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'         =>  $this->input->post('id'),
                'nama'          =>  $this->input->post('divisi'),
                'department_id' =>  $this->input->post('department'),
            );

            $insert = $this->M_organisasi->postDataDivisi($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/divisi');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/divisi');
            }
        } else {
            redirect('admin2/organisasi/divisi');
        }
    }
}
