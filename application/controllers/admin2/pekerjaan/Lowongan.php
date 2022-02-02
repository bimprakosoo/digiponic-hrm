<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lowongan extends CI_Controller
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
        $this->load->model('M_pelamar');
    }

    public function index()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Data lowongan';

        $data['lowongan'] = $this->M_admin->lowongan_ad();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah_lowongan()
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Tambah Data Lowongan';

        $data['perusahaan'] = $this->M_organisasi->getAllPerusahaan()->result_array();
        $data['penempatan'] = $this->M_organisasi->getDataPenempatan()->result_array();
        $data['golongan'] = $this->M_organisasi->getDataGolongan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/tambah_lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function edit($id)
    {
        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['title'] = 'Edit Data Lowongan';
        $data['lowongan'] = $this->M_admin->edit($id);
        $data['perusahaan'] = $this->M_organisasi->getDataPerusahaan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/edit_lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function hapus($id)
    {
        $query = $this->M_admin->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            $this->index();
        }
    }


    function lowongan_post()
    {
        // $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {

            $data = array(
                'nama_lowongan'      => $this->input->post('nama_lowongan'),
                // 'lokasi'             =>  $this->input->post('lokasi'),
                // 'perusahaan'         =>  $this->input->post('perusahaan'),
                // 'industri'           =>  $this->input->post('industri'),
                'tipe_pekerjaan'     =>  $this->input->post('tipe_pekerjaan'),
                'pengalaman_kerja'   =>  $this->input->post('pengalaman_kerja'),
                // 'insentif_lembur'    =>  $this->input->post('insentif_lembur'),
                'level_pekerjaan'    =>  $this->input->post('level_pekerjaan'),
                'pendidikan'         =>  $this->input->post('pendidikan'),
                // 'waktu_bekerja'      =>  $this->input->post('waktu_bekerja'),
                'gaji'               =>  $this->input->post('gaji'),
                'post_date'          =>  $this->input->post('post_date'),
                'deskripsi'          =>  $this->input->post('deskripsi'),
                'ket'                =>  $this->input->post('ket'),
                'syarat_pengalaman'  =>  $this->input->post('syarat_pengalaman'),
                'tunjangan'          =>  $this->input->post('tunjangan'),
                // 'image'              =>     $this->M_admin->file_image()
                
                'perusahaan_id'     =>  $this->input->post('perusahaan'),
                'department_id'     =>  $this->input->post('department'),
                'divisi_id'         =>  $this->input->post('department'),
                'jabatan_id'        =>  $this->input->post('jabatan'),
                'posisi_id'         =>  $this->input->post('posisi'),
                'penempatan_id'     =>  $this->input->post('penempatan'),
                'golongan_id'       =>  $this->input->post('golongan'),

            );

            $insert =  $this->db->insert('lowongan', $data);
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('admin2/pekerjaan/lowongan');
        } else {
            redirect('admin2/pekerjaan/lowongan');
        }
    }

    public function update()
    {
        $id_lowongan = $this->input->post('id_lowongan');
        $data = array(
            // 'id_lowongan' => $this->input->post('id_lowongan'),
            'nama_lowongan'      =>  $this->input->post('nama_lowongan'),
            'lokasi' =>  $this->input->post('lokasi'),
            'perusahaan' =>  $this->input->post('perusahaan'),
            // 'industri' =>  $this->input->post('industri'),
            'tipe_pekerjaan' =>  $this->input->post('tipe_pekerjaan'),
            'pengalaman_kerja' =>  $this->input->post('pengalaman_kerja'),
            // 'insentif_lembur' =>  $this->input->post('insentif_lembur'),
            'level_pekerjaan' =>  $this->input->post('level_pekerjaan'),
            'pendidikan' =>  $this->input->post('pendidikan'),
            // 'waktu_bekerja' =>  $this->input->post('waktu_bekerja'),
            'gaji' =>  $this->input->post('gaji'),
            'post_date' =>  $this->input->post('post_date'),
            'deskripsi' =>  $this->input->post('deskripsi'),
            'ket' =>  $this->input->post('ket'),
            'syarat_pengalaman' =>  $this->input->post('syarat_pengalaman'),
            'tunjangan' =>  $this->input->post('tunjangan'),
            // 'image' =>     $this->M_admin->file_image()
        );
        $this->M_admin->update_low($id_lowongan, $data);
        redirect('admin2/pekerjaan/lowongan/');
    }


    public function getDepartment()
    {
        $iddep =   $this->input->post('id');
        $data   =   $this->M_organisasi->getDataDepartment2($iddep);
        $output =   '<option value="">-- Pilih department --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getDivisi()
    {
        $iddiv =   $this->input->post('id');
        $data   =   $this->M_organisasi->getDataDivisi2($iddiv);
        $output =   '<option value="">-- Pilih divisi --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getJabatan()
    {
        $idjab =   $this->input->post('id');
        $data   =   $this->M_organisasi->getDataJabatan2($idjab);
        $output =   '<option value="">-- Pilih jabatan --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    public function getPosisi()
    {
        $idpos =   $this->input->post('id');
        $data   =   $this->M_organisasi->getDataPosisi2($idpos);
        $output =   '<option value="">-- Pilih posisi --</option>';
        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($output));
    }

    // public function getGolongan()
    // {
    //     $idgol =   $this->input->post('id');
    //     $data   =   $this->M_organisasi->getDataGolongan2($idgol);
    //     $output =   '<option value="">-- Pilih Golongan --</option>';
    //     foreach ($data as $row) {
    //         $output .= ' <option value="' . $row->id . '">' . $row->nama . ' </option>';
    //     }
    //     $this->output->set_content_type('application/json')->set_output(json_encode($output));
    // }
}
