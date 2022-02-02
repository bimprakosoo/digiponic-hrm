<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller
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
        $this->load->model('M_mutasi');
        $this->load->model('M_organisasi');
        $this->load->model('M_training');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Management Karyawan';

        $data['all_posisikaryawan'] = $this->M_admin->allDataPosisiKaryawan()->result_array();
        $data['all_detailkaryawan'] = $this->M_admin->allDataDetailKaryawan()->result_array();
        $data['datakaryawan'] = $this->M_admin->data_karyawan()->result_array();
        $data['data_golongan']  = $this->M_admin->getDataGolongan()->result_array();
        $data['department'] = $this->M_admin->getDataDepartment()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();


        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/karyawan/v_detail', $data);
        $this->load->view('dashboard/karyawan/v_kepalacabang', $data);
        $this->load->view('dashboard/karyawan/v_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // menambahkan data karyawan
    function tambah_DataKaryawan()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'karyawan_id'               => $this->input->post('karyawan'),
                'perusahaan_id'             => 11,
                'department_id'             => $this->input->post('department'),
                'divisi_id'                 => $this->input->post('divisi'),
                'jabatan_id'                => $this->input->post('jabatan'),
                'golongan_id'               => $this->input->post('golongan'),
                'posisi_id'                 => $this->input->post('posisi'),
                'penempatan_id'             => $this->input->post('penempatan')
            );

            var_dump($data);
            die;
            $insert = $this->M_admin->insert_DataKaryawan($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/karyawan/karyawan');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/karyawan/karyawan');
            }
        } else {
            redirect('admin2/karyawan/karyawan');
        }
    }
    
    // menambahkan data karyawan training
    function Tambah_DataKaryawan_Training()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'karyawan_id'       => $this->input->post('karyawan'),
                'deskripsi'         => $this->input->post('deskripsi'),
                'type'              => $this->input->post('type'),
                'tgl_mulai'         => $this->input->post('tgl_mulai'),
                'tgl_selesai'       => $this->input->post('tgl_berakhir')
            );

            $insert = $this->M_training->insert_DataKaryawanTraining($data);

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/karyawan/karyawan/training');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/karyawan/karyawan/training');
            }
        } else {
            redirect('admin2/karyawan/karyawan/training');
        }
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

    public function getJabatan()
    {
        $idjab =   $this->input->post('id');
        $data   =   $this->M_mutasi->getDataJabatan($idjab);
        $output =   '<option value="">-- Pilih jabatan --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getPosisi()
    {
        $idpos =   $this->input->post('id');
        $data   =   $this->M_mutasi->getDataPosisi($idpos);
        $output =   '<option value="">-- Pilih posisi --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function training()
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

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/karyawan/v_training_karyawan', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function getKaryawanBaru()
    {
        $idperusahaan =   $this->input->post('id');
        $data   =   $this->M_training->getKaryawanTrain($idperusahaan);
        $output =   '<option value="">-- Pilih Karyawan --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->karyawan_id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function klulus($IDTraining)
    {
        // update status dari data pelamaran [1 => diterima | 2 => ditolak]
        // pindah data karywaan yang diterima ke detail_karyawan
        $data = $this->db->get_where('data_training', ['karyawan_id' => $IDTraining])->result();
        foreach ($data as $r) {
            $data = [
                'karyawan_id'           =>  $r->karyawan_id
            ];

            $this->M_training->k($data, $IDTraining);
        }
        redirect('admin2/karyawan/karyawan/training');
    }

    public function edit()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Management Karyawan Training';

        $data['data_training'] = $this->M_training->getDataTraining()->result_array();
        $data['all_detailkaryawan'] = $this->M_admin->allDataDetailKaryawan()->result_array();
        $data['perusahaan'] = $this->M_admin->getDataPerusahaan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        // $this->load->view('dashboard/karyawan/v_detail', $data);
        $this->load->view('dashboard/karyawan/v_training_edit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
}
