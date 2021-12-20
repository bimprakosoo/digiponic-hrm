<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mutasi extends CI_Controller
{
    // MUTASI

    function __construct()
    {
        parent::__construct();

        is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');
        $this->load->model('M_mutasi');
        $this->load->model('M_organisasi');

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
    }


    public function index()
    {
        $data['title'] = 'Mutasi';
        $data['dkaryawan']  = $this->M_mutasi->getAllKaraywan()->result_array();

        // // organisasi
        // $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['department'] = $this->M_mutasi->getAllDepartment()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/mutasi/v_mutasi', $data);
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

    public function getGolongan()
    {
        $idgol =   $this->input->post('id');
        $data   =   $this->M_mutasi->getDataGolongan($idgol);
        $output =   '<option value="">-- Pilih Golongan --</option>';
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
    // next

    // insert data 
    function create()
    {
        if (isset($_POST['submit'])) {

            $data = array(

                'tgl_mutasi'                => $this->input->post(''),  // date
                'karyawan_id'               => $this->input->post('karyawan_id'),
                'department_id'             => $this->input->post('department_id'),
                'divisi_id'                 => $this->input->post('divisi_id'),
                'jabatan_id'                => $this->input->post('jabatan_id'),
                'posisi_id'                 => $this->input->post('posisi_id'),
                'penempatan_id'             => $this->input->post('penempatan_id'),
                'jenis_mutasi'              => $this->input->post('jenis_mutasi'),   // promosi | mutasi | demosi
                'status'                    => $this->input->post('status'),  // peding | approve[hrd]
            );

            // var_dump($data);
            // die;

            $insert =  $this->curl->simple_post($this->API . '/mutasi/create', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
                redirect('mutasi');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
                redirect('mutasi');
            }
            // redirect('pelamar');
            // var_dump($insert);
        } else {
            $this->load->view('mutasi/mutasi');
        }
    }
}
