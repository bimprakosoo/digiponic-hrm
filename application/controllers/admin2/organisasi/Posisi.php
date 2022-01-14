<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Posisi extends CI_Controller
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
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();

        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_posisi', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // insert data 
    function add_pos()
    {

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'         =>  $this->input->post('id'),
                'nama'             =>  $this->input->post('posisi'),
                'jabatan_id'        =>  $this->input->post('jabatan')
            );

            $insert = $this->M_organisasi->postDataPosisi($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/posisi');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/posisi');
            }
        } else {
            redirect('admin2/organisasi/posisi');
        }
    }
    //edit
    public function edit($id)
    {
        $data['posisi'] = $this->M_organisasi->editPos($id);
        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_posisi_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    //update
    public function update()
    {

        $id_pos = $this->input->post('id');
        $data = array(
            // 'id'         =>  $this->input->post('id'),
            'nama'             =>  $this->input->post('posisi'),
            'golongan_id'        =>  $this->input->post('golongan')
        );
        $this->M_organisasi->update_pos($id_pos, $data);
        redirect('admin2/organisasi/posisi/');
    }
    //hapus
    public function hapus($id)
    {
        $this->M_organisasi->hapusPosisi($id);
        redirect('admin2/organisasi/posisi/');
    }
}
