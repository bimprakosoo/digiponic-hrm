<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('M_admin');
        $this->load->library('table');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/dashboard_ad/v_dashboard');
        $this->load->view('template/template_admin/footer_ad');
    }
    // public function lowongan_ad()
    // {

    //     $data['lowongan'] = $this->M_admin->lowongan_ad();

    //     $this->load->view('template/template_admin/sidebar_ad');
    //     $this->load->view('template/template_admin/header_ad');
    //     $this->load->view('dashboard/pekerjaan/lowongan_ad', $data);
    //     $this->load->view('template/template_admin/footer_ad');
    // }
    public function lowongan_ad()
    {


        $data['lowongan'] = $this->M_admin->lowongan_ad();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah_lowongan()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/tambah_lowongan_ad');
        $this->load->view('template/template_admin/footer_ad');
    }

    public function edit($id)
    {
        
        $data['lowongan'] = $this->M_admin->edit($id);

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/edit_lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function update()
    {

        // $data2  = $this->db->get_where('lowongan', ['id_lowongan' => $data3])->row_array();
        // $data   = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();


        $id_lowongan = $this->input->post('id_lowongan');
        $data = array(
            // 'id_lowongan' => $this->input->post('id_lowongan'),
            'nama_lowongan'      =>  $this->input->post('nama_lowongan'),
            'lokasi' =>  $this->input->post('lokasi'),
            'perusahaan' =>  $this->input->post('perusahaan'),
            'industri' =>  $this->input->post('industri'),
            'tipe_pekerjaan' =>  $this->input->post('tipe_pekerjaan'),
            'pengalaman_kerja' =>  $this->input->post('pengalaman_kerja'),
            'insentif_lembur' =>  $this->input->post('insentif_lembur'),
            'level_pekerjaan' =>  $this->input->post('level_pekerjaan'),
            'pendidikan' =>  $this->input->post('pendidikan'),
            'waktu_bekerja' =>  $this->input->post('waktu_bekerja'),
            'gaji' =>  $this->input->post('gaji'),
            'post_date' =>  $this->input->post('post_date'),
            'ket' =>  $this->input->post('ket'),
            'syarat_pengalaman' =>  $this->input->post('syarat_pengalaman'),
            'tunjangan' =>  $this->input->post('tunjangan'),
            'image' =>     $this->M_admin->file_image()
        );
        $this->M_admin->update_low($id_lowongan, $data);
        redirect('admin/lowongan_ad');
    }
    public function hapus($id)
    {
        $query = $this->M_admin->hapus($id);
        if ($query = true) {
            $this->session->set_flashdata('info', 'Data Berhasil di Hapus');
            redirect('admin/lowongan_ad');

        }
    }

    // insert data pelamar
    function create()
    {
        $this->form_validation->set_rules('nama', 'nama', 'required');                // 2

        if (isset($_POST['submit'])) {

            $data = array(
                // 'id'       =>  $this->input->post('id'),
                'nama_lowongan'      =>  $this->input->post('nama_lowongan'),
                'lokasi' =>  $this->input->post('lokasi'),
                'perusahaan' =>  $this->input->post('perusahaan'),
                'industri' =>  $this->input->post('industri'),
                'tipe_pekerjaan' =>  $this->input->post('tipe_pekerjaan'),
                'pengalaman_kerja' =>  $this->input->post('pengalaman_kerja'),
                'insentif_lembur' =>  $this->input->post('insentif_lembur'),
                'level_pekerjaan' =>  $this->input->post('level_pekerjaan'),
                'pendidikan' =>  $this->input->post('pendidikan'),
                'waktu_bekerja' =>  $this->input->post('waktu_bekerja'),
                'gaji' =>  $this->input->post('gaji'),
                'post_date' =>  $this->input->post('post_date'),
                'ket' =>  $this->input->post('ket'),
                'syarat_pengalaman' =>  $this->input->post('syarat_pengalaman'),
                'tunjangan' =>  $this->input->post('tunjangan'),
                'image' =>     $this->M_admin->file_image()

            );
            // var_dump($data);
            // die;

            $insert =  $this->db->insert('lowongan', $data);
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('admin/lowongan_ad');
        } else {
            redirect('admin/lowongan_ad');;
        }
    }

    public function lamaran_masuk()
    {
        $data['lamaran_masuk'] = $this->M_admin->lamaran_masuk()->result_array();
        // var_dump($data);
        // die;
        // $data['pilih'] = $this->M_admin->get_data_lamaran()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/lamaran_masuk', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function hasil_seleksi()
    {
        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/pekerjaan/hasil_seleksi');
        $this->load->view('template/template_admin/footer_ad');
    }


    // sidebar karyawan
    // sidebar karyawan
    public function data_karyawan1()
    {
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('karyawan/index', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function data_karyawan()
    {
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/karyawan/v_detail_karyawan');
        $this->load->view('dashboard/karyawan/v_profil');
        $this->load->view('dashboard/karyawan/v_penilaian');
        $this->load->view('dashboard/karyawan/v_pelacakan');
        $this->load->view('dashboard/karyawan/v_mutasi');
        $this->load->view('dashboard/karyawan/v_detail_training');
        $this->load->view('template/template_admin/footer_ad');
    }

    // delete data kontak
    // function delete($id)
    // {
    //     if (empty($id)) {
    //         redirect('dashboard/lamaran_masuk');
    //     } else {
    //         $delete =  $this->curl->simple_delete($this->API . '/admin', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
    //         if ($delete) {
    //             $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
    //         } else {
    //             $this->session->set_flashdata('hasil', 'Delete Data Gagal');
    //         }
    //         redirect('dashboard/lamaran_masuk');
    //     }
    // }

    public function diterima($dapat_di)
    {
        // pindah data karywaan yang diterima ke tbl_karyawan
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        foreach ($data as $r) {
            $data = [
                'id'                    =>  $r->id,
                'nama'                  =>  $r->nama,
                'provinsi'              =>  $r->provinsi,
                'kota'        =>  $r->kota,
                'kecamatan'             =>  $r->kecamatan,
                'alamat_lengkap'        =>  $r->alamat_lengkap,
                'jk'                    =>  $r->jk,
                'tgl_lahir'             =>  $r->tgl_lahir,
                'no_telp'               =>  $r->no_telp,
                'status_perkawinan'     =>  $r->status_perkawinan,
                'pendidikan_terakhir'   =>  $r->pendidikan_terakhir,

            ];

            $this->M_admin->terima_pelamar($data);
        }

        // update status dari data pelamaran [1 => diterima | 2 => ditolak]
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        $update_status = [
            'status' => 1
        ];
        $this->M_admin->update_status_pelamar($update_status, $dapat_di);

        // delete data lamaran yang telah di action
        $delete =  $this->curl->simple_delete($this->API . '/admin', array('id' => $dapat_di), array(CURLOPT_BUFFERSIZE => 10));
        // $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        // $this->M_admin->delete_pelamar();


        redirect('admin/lamaran_masuk');
    }

    // 
    public function ditolak($dapat_di)
    {
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        $update_status = [
            'status' => 2
        ];
        $this->M_admin->update_status_pelamar($update_status, $dapat_di);

        redirect('admin/lamaran_masuk');
    }
}
