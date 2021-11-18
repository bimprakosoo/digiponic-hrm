<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mutasi extends CI_Controller
{
    // MUTASI

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }


    public function index()
    {
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();
        $data['dept'] = $this->M_admin->getDataDepartment()->result_array();

        // $data['status'] = $this->M_admin->data_departemen()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/mutasi/mutasi', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function update_mutasi($data_id)
    {

        $data['m_db'] = $this->db->get_where('tbl_karyawan', ['id' => $data_id])->row_array();
        $data['dept'] = $this->db->get('department')->result_array();
        // $data['data'] = $this->Datamaster_model->edits($data_id);
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('id_departemen', 'Id_Departemen', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/template_admin/sidebar_ad');
            $this->load->view('template/template_admin/header_ad');
            $this->load->view('dashboard/mutasi/update', $data);
            $this->load->view('template/template_admin/footer_ad');
        } else {
            // $submenu_name = $this->input->post('nama');
            $nama = $this->input->post('nama');
            $id_departemen = $this->input->post('id_depatemen');

            $data_sub = [
                'nama' => $nama,
                'id_depatemen' => $id_departemen
            ];
            // var_dump($data_sub);
            // die;
            $this->db->set($data_sub);
            $this->db->where('id', $data_id);
            $this->db->update('tbl_karyawan');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Data Success!</div>');
            redirect('dashboard/mutasi/mutasi');
        }
    }
}
