<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Department extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
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
    }

    public function index()
    {
        $data['dept'] = $this->M_organisasi->getDataDepartment()->result_array();
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_departemen', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data 
    function add_Dept()
    {

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'nama'              =>  $this->input->post('department'),
                'perusahaan'        =>  $this->input->post('perusahaan'),
            );

            $insert = $this->M_organisasi->postDataDepartment($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/department');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/department');
            }
        } else {
            redirect('admin2/organisasi/department');
        }
    }
    //edit
    public function edit($id)
    {
        $data['user'] = $this->M_auth->getUserRow();


        $data['dept'] = $this->M_organisasi->editDept($id);
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_departemen_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    //update
    public function update()
    {

        $id_dept = $this->input->post('id');
        $data = array(
            'nama'              =>  $this->input->post('department'),
            'perusahaan'        =>  $this->input->post('perusahaan'),
        );
        $this->M_organisasi->update_dept($id_dept, $data);
        redirect('admin2/organisasi/department/');
    }
    //hapus
    public function hapus($id)
    {
        $this->M_organisasi->hapusdepartemen($id);
        redirect('admin2/organisasi/department/');
    }
}
