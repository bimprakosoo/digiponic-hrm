<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Golongan extends CI_Controller
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
        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_golongan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data 
    function add_gol()
    {

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'         =>  $this->input->post('id'),
                'nama'          =>  $this->input->post('golongan')
                // 'jabatan_id'   =>  $this->input->post('jabatan')
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
    //edit
    public function edit($id)
    {
        $data['golongan'] = $this->M_organisasi->editGol($id);
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_golongan_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    //update
    public function update()
    {

        $id_gol = $this->input->post('id');
        $data = array(
            // 'id'         =>  $this->input->post('id'),
            'nama'          =>  $this->input->post('golongan'),
            'jabatan_id'   =>  $this->input->post('jabatan')
        );
        $this->M_organisasi->update_gol($id_gol, $data);
        redirect('admin2/organisasi/golongan/');
    }
    //hapus
    public function hapus($id)
    {
        $this->M_organisasi->hapusGolongan($id);
        redirect('admin2/organisasi/golongan/');
    }
}
