<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Penempatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_organisasi');
        $this->load->model('M_pelamar');
    }


    public function index()
    {
        $data['user'] = $this->M_auth->getUserRow();

        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['provinsi']   = $this->M_pelamar->getDataprov();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_penempatan', $data);
        $this->load->view('template/template_admin/footer_ad', $data);
    }

    // insert data 
    function add_pen()
    {

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'         =>  $this->input->post('id'),
                'nama'             =>  $this->input->post('penempatan'),
                'perusahaan_id'             =>  $this->input->post('perusahaan'),
                'lokasi_cabang'        =>  $this->input->post('kota'),
                'provinsi'        =>  $this->input->post('provinsi')
            );
            $insert = $this->M_organisasi->postDataPenempatan($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/organisasi/penempatan');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/organisasi/penempatan');
            }
        } else {
            redirect('admin2/organisasi/penempatan');
        }
    }

    public function getKota()
    {
        $idprov =   $this->input->post('id');
        $data   =   $this->M_pelamar->getDataKota($idprov);
        $output =   '<option value="">-- Pilih Kota --</option>';
        foreach ($data as $row) {
            if ($row->id == $row->idprov) {
                $output .= ' <option value="' . $row->id . '" selected>' . $row->nama . ' </option>';
            } else {
                $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }
    //edit
    public function edit($id)
    {
        $data['user'] = $this->M_auth->getUserRow();


        $data['penempatan'] = $this->M_organisasi->editPenempatan($id);
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['provinsi'] = $this->M_pelamar->getDataprov();
        
// var_dump($data['penempatan']); die;
        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/organisasi/v_penempatan_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    //update
    public function update()
    {

        $id_pos = $this->input->post('id');
        $data = array(
            // 'id'         =>  $this->input->post('id'),
            'nama'             =>  $this->input->post('penempatan'),
            'perusahaan_id'             =>  $this->input->post('perusahaan'),
            'lokasi_cabang'        =>  $this->input->post('kota'),
            'provinsi'        =>  $this->input->post('provinsi')
        );
        $this->M_organisasi->update_penempatan($id_pos, $data);
        redirect('admin2/organisasi/penempatan/');
    }
    //hapus
    public function hapus($id)
    {
        $this->M_organisasi->hapusPenempatan($id);
        redirect('admin2/organisasi/penempatan/');
    }
}
