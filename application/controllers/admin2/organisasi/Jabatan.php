<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Jabatan extends CI_Controller
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
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
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
    //edit
    public function edit($id)
    {
        $data['jabatan'] = $this->M_organisasi->editJab($id);
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_jabatan_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    //update
    public function update()
    {

        $id_jab = $this->input->post('id');
        $data = array(
            // 'id'         =>  $this->input->post('id'),
            'nama'             =>  $this->input->post('jabatan'),
            'divisi_id'        =>  $this->input->post('divisi'),
        );
        $this->M_organisasi->update_jab($id_jab, $data);
        redirect('admin2/organisasi/jabatan/');
    }
    //hapus
    public function hapus($id)
    {
        $this->M_organisasi->hapusJabatan($id);
        redirect('admin2/organisasi/jabatan/');
    }
}
