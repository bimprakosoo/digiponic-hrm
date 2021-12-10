<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_organisasi');
        $this->load->model('M_Pelamar');
    }

    public function index()
    {
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['provinsi'] = $this->M_Pelamar->getDataprov();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_perusahaan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }


    // insert data pelamar
    function create_perusahaan()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'nama_perusahaan'       =>  $this->input->post('perusahaan'),
                'industri'       =>  $this->input->post('industri'),
                'provinsi'       =>  $this->input->post('provinsi'),
                'kota'       =>  $this->input->post('kota'),
                'email'       =>  $this->input->post('email'),
                'alamat'       =>  $this->input->post('alamat'),
                'telp'       =>  $this->input->post('telp'),
            );
            // var_dump($data);
            // die;

            $insert = $this->M_organisasi->postDataPerusahaan($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/perusahaan');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/perusahaan');
            }
        } else {
            redirect('admin2/organisasi/perusahaan');
        }
    }
    public function getKota()
    {
        $idprov =   $this->input->post('id');
        $data ['kota']  =   $this->M_Pelamar->getDataKota($idprov);
        $output =   '<option value="">-- Pilih Kota --</option>';
        foreach ($data as $row) {
            if ($row->id == $row->idprov) {
                $output .= ' <option value="' . $row->id . '" selected>' . $row->nama . ' </option>';
            } else{
                $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';

            }
        }
        // foreach ($data as $row) {
        //     $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        // }
        
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    public function edit($id)
    {
        $idprov =   $this->input->post('id');
        $data['perusahaan'] = $this->M_organisasi->edit($id);
        $data['provinsi'] = $this->M_Pelamar->getDataprov();
        $data ['kota']  =   $this->M_Pelamar->getDataKota($idprov);

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/organisasi/v_perusahaan_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function hapus($id)
    {
        $this->M_organisasi->hapusPerusahaan($id);
        redirect('admin2/organisasi/perusahaan/');
    }
}
