<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Posisi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
    }


    public function index()
    {
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
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
                'golongan_id'        =>  $this->input->post('golongan')
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
}
