<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mutasi extends CI_Controller
{
    // MUTASI
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        // is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');
        $this->load->model('M_mutasi');
        $this->load->model('M_organisasi');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Mutasi';

        $data['mutasiData'] = $this->M_mutasi->get_DataMutasi2()->result_array();
        $data['dkaryawan']  = $this->M_mutasi->getAllKaraywan()->result_array();
        // $data['data_golongan']  = $this->M_mutasi->getAllGolongan()->result_array();

        // organisasi
        // $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['department'] = $this->M_mutasi->getAllDepartment()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/mutasi/v-detail', $data); 
        $this->load->view('dashboard/mutasi/v-tablistkaryawan', $data);
        $this->load->view('dashboard/mutasi/v-tabpengajuanmutasi', $data);
        $this->load->view('dashboard/mutasi/v-tabhistory', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function getkaryawan()
    {
        $idkarayawan =   $this->input->post('id');
        $data   =   $this->M_mutasi->getDataKaryawan($idkarayawan);
        $output =   '<option value="">-- Pilih D --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
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

    // menambahkan data mutasi
    // function tambah_DataMutasi()
    function prosesMutasi()
    {
        if (isset($_POST['submit'])) {
            // $user_id = $this->session->userdata('email');
            $dates = date("Y-m-d");
            $data = array(


                'tgl_pengajuan'             => $dates,
                'karyawan_id'               => $this->input->post('IDkaryawan'),
                'department_id'             => $this->input->post('department'),
                'divisi_id'                 => $this->input->post('divisi'),
                'jabatan_id'                => $this->input->post('jabatan'),
                'golongan_id'               => $this->input->post('golongan'),
                'posisi_id'                 => $this->input->post('posisi'),
                'penempatan_id'             => $this->input->post('penempatan'),
                'jenis_mutasi'              => $this->input->post('jenis_mutasi'),   // promosi | mutasi | demosi
                'status'                    => 0,  // peding | approve[hrd]
                'pengaju'                   => $this->input->post('user_id')
            );

            $insert = $this->M_admin->insert_DataMutasi($data);
            // $this->laporan_pdf();

            if ($insert) {
                $this->session->set_flashdata('status', 'Insert Data Berhasil');
                redirect('admin2/mutasi/mutasi');
            } else {
                $this->session->set_flashdata('status', 'Insert Data Gagal');
                redirect('admin2/mutasi/mutasi');
            }
        } else {
            redirect('admin2/mutasi/mutasi');
        }
    }
    
    public function edit($id)
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Edit Mutasi';

        // $data['mutasiData'] = $this->M_mutasi->get_DataMutasi2()->result_array();
        $data['detail_karyawan']  = $this->M_mutasi->getAllKaraywan()->result_array();
        $data['data_golongan']  = $this->M_mutasi->getAllGolongan()->result_array();

        // organisasi

        $data['karyawan'] = $this->M_mutasi->editmutasi($id);
        // $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();
        $data['department'] = $this->M_organisasi->getDataDepartment()->result_array();
        $data['divisi'] = $this->M_organisasi->getDataDivisi()->result_array();
        $data['jabatan'] = $this->M_organisasi->getDataJabatan()->result_array();
        $data['posisi'] = $this->M_organisasi->getDataPosisi()->result_array();
        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/mutasi/v_mutasiedit', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    //update
    public function update()
    {
        $id_dept = $this->input->post('id');
        $data = array(
            'nama'              =>  $this->input->post('department'),
            'perusahaan'        =>  $this->input->post('perusahaan'),
            'deskripsi'         =>  $this->input->post('deskripsi'),
            'fungsi'            =>  $this->input->post('fungsi'),
            'peran'             =>  $this->input->post('peran'),
            'image'             => $this->M_organisasi->file_image()
        );
        $this->M_organisasi->update_dept($id_dept, $data);
        redirect('admin2/organisasi/department/');
    }

    public function laporan_pdf($id){
        $data['mutasi'] = $this->M_mutasi->get_DataMutasiId($id)->row();
		$this->load->library('pdf');
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "laporan-data-mutasi.pdf";
		$this->pdf->load_view('dashboard/mutasi/laporan_mutasi', $data);
        // var_dump($data);
    }
}
