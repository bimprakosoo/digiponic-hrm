<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Probation extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = $this->API = site_url() . 'api';
        // is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');
        $this->load->model('M_training');
        $this->load->model('M_organisasi');
        $this->load->model('M_dataKaryawan');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Probation';

        // karyawan baru diterima
        $data['karyawan_baru'] = $this->M_training->getData_KaryawanBaru()->result_array();

        // get data
        $data['perusahaan']         = $this->M_training->getData_AllPerusahaan()->result_array();
        $data['type']               = $this->M_training->getData_typePelatihan()->result_array();
        $data['karyawan_training']  = $this->M_training->getData_KaryawanTraining()->result_array();


        $data['data_training'] = $this->M_training->getDataTraining()->result_array();
        $data['all_detailkaryawan'] = $this->M_admin->allDataDetailKaryawan()->result_array();
        $data['perusahaan'] = $this->M_admin->getDataPerusahaan()->result_array();
        $data['roles'] = $this->M_organisasi->getRoles()->result_array();


        $data['karyawan_probation'] = $this->M_dataKaryawan->getDataProbation()->result_array();
        $data['dataprobation'] = $this->M_dataKaryawan->get_DataProbation()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/karyawan/probation/v-detail', $data);
        $this->load->view('dashboard/karyawan/probation/v-karyawan-baru', $data);
        $this->load->view('dashboard/karyawan/probation/v-tabprobation', $data);
        $this->load->view('dashboard/karyawan/probation/v-tabevaluasi', $data);
        $this->load->view('dashboard/karyawan/probation/v-tabselesai', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // menambahkan data karyawan training
    function tambah_ProbationKaryawan($idProbation)
    {
        if (isset($_POST['submit'])) {

            $getdata = $this->M_dataKaryawan->DataProbationByID($idProbation)->result();
            foreach ($getdata as $r) {
                $data = [
                    'probation_id'      =>  $r->id,
                    'deskripsi'         => $this->input->post('deskripsi'),
                    'tgl_mulai'         => $this->input->post('tgl_mulai'),
                    'tgl_selesai'       => $this->input->post('tgl_berakhir')
                ];

                $insert = $this->M_dataKaryawan->insert_DataProbation($data);
            }

            // $getdata = $this->db->get_where('probation', ['id' => $idProbation])->result();
            // $getdata = $this->M_dataKaryawan->DataProbationByID($idProbation)->result();
            $update_status = [
                'status' => 1
            ];

            $this->M_dataKaryawan->update_StatusProbation($update_status, $idProbation);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/karyawan/probation/');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/karyawan/probation/');
            }
        } else {
            redirect('admin2/karyawan/probation/');
        }
    }
}
