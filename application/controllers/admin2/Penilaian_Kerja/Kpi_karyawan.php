<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kpi_karyawan extends CI_Controller
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
        $this->load->model('M_organisasi');
        $this->load->model('M_mutasi');
        $this->load->model('M_kpi');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUser_row();
        $data['title'] = 'KPI Karyawan';

        // qeury
        $data['dkaryawan']  = $this->M_mutasi->getAllKaraywan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/kpi/kpi-karyawan/v-detail', $data);
        $this->load->view('dashboard/kpi/kpi-karyawan/v-tablist', $data);
        $this->load->view('dashboard/kpi/kpi-karyawan/v-tabkpi', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // page melakukan kpi per user
    public function proses_kpi($id)
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUser_row();
        $data['title'] = 'Proses KPI';

        $data['detail_karyawan']  = $this->M_mutasi->getAllKaraywan()->result_array();
        // organisasi

        $data['karyawan'] = $this->M_mutasi->editmutasi($id);
        $data['KPI'] = $this->M_kpi->get_KpiIndikator()->result_array();
        $data['kehadiran'] = $this->M_kpi->get_prosentase($id)->row_array();
        // $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['department'] = $this->M_organisasi->getDataDepartment()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/kpi/kpi-karyawan/v-action/v-proses-kpi', $data);
        $this->load->view('template/template_admin/footer_ad');
    }


    function proses_data()
    {
        if (isset($_POST['submit'])) {
            // $user_id = $this->session->userdata('email');
            // $dates = date("Y-m-d");
            $data = array(

                'karyawan_id'               => $this->input->post('IDkaryawan'),
                'kehadiran'                 => $this->input->post('kehadiran'),
                'indikator_1'                => $this->input->post('indikator1'),
                'indikator_2'                => $this->input->post('indikator2'),
                'indikator_3'                => $this->input->post('indikator3'),
                'b_kerja_tim'               => $this->input->post('tim'),
                'b_inisiatif'               => $this->input->post('inisiatif'),
                'status'                    => 0,
            );

            // var_dump($data);
            // die;
            $insert = $this->M_kpi->insert_DataKpi($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/penilaian_kerja/kpi_karyawan');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/penilaian_kerja/kpi_karyawan');
            }
        } else {
            redirect('admin2/penilaian_kerja/kpi_karyawan');
        }
    }

    public function tambah()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUser_row();
        $data['title'] = 'Data Kpi Karyawan';

        $data['department'] = $this->M_organisasi->getDataDepartment()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['kehadiran'] = $this->M_kpi->PersentaseKehadiran()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/penilaian_kerja/v_tambah_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function getDivisi()
    {
        $iddiv =   $this->input->post('id');
        $data   =   $this->M_mutasi->getDataDivisi($iddiv);
        $output =   '<option value="">-- Pilih divisi --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getkaryawanByDivisi()
    {
        $idkaryawan =   $this->input->post('id');
        $data       =   $this->M_kpi->getKaryawan($idkaryawan);
        $output =   '<option value="">-- Pilih karyawan --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getIndikator()
    {
        $idkaryawan =   $this->input->post('id');
        $data       =   $this->M_kpi->getKpiIndikator($idkaryawan);
        $output =   '<option value="">-- Pilih karyawan --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }


    public function postKPI()
    {
        $dates = date("Y-m-d");

        if (isset($_POST['submit'])) {
            $data = array(
                'tanggal'           =>  $dates,
                'karyawan_id'       =>  $this->input->post('UserId'),

            );

            $insert = $this->M_kehadiran->postCheckIn($data);

            //     if ($insert) {
            //         $this->session->set_flashdata('status', 'Check-in berhasil');
            //         redirect('karyawan/kehadiran/absensi');
            //     } else {
            //         $this->session->set_flashdata('status', 'Check-in gagal');
            //         redirect('karyawan/kehadiran/absensi');
            //     }
            // } else {
            //     redirect('karyawan/kehadiran/absensi');
        }
    }
}
