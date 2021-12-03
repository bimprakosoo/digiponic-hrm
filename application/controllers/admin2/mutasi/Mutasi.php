<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mutasi extends CI_Controller
{
    // MUTASI

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_mutasi');
        $this->load->model('M_organisasi');
    }


    public function index()
    {
        $data['dkaryawan']  = $this->M_mutasi->getAllKaraywan()->result_array();

        // // organisasi
        // $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['department'] = $this->M_mutasi->getAllDepartment()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/mutasi/v_mutasi', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    // public function getDepartment()
    // {
    //     $iddept =   $this->input->post('id');
    //     $data   =   $this->M_mutasi->getDataDepartment($iddept);
    //     $output =   '<option value="">-- Pilih department --</option>';
    //     foreach ($data as $row) {
    //         $output .= ' <option value="' . $row->id . '">' . $row->department_id . ' </option>';
    //     }
    //     $this->output->set_content_type('application/json')->set_output(json_encode($output));
    // }

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

                'tgl_mutasi'                => $this->post(''),  // date
                'karyawan_id'               => $this->post('karyawan_id'),
                'department_id'             => $this->post('department_id'),
                'divisi_id'                 => $this->post('divisi_id'),
                'jabatan_id'                => $this->post('jabatan_id'),
                'posisi_id'                 => $this->post('posisi_id'),
                'penempatan_id'             => $this->post('penempatan_id'),
                'jenis_mutasi'              => $this->post('jenis_mutasi'),   // promosi | mutasi | demosi
                'status'                    => $this->post('status'),  // peding | approve[hrd]
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
