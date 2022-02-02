<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class LamaranMasuk extends CI_Controller
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
        $this->load->model('M_dataKaryawan');
    }

    public function index()
    {
        $data['title']      = 'Lamaran Masuk';
        $role_id            = $this->session->userdata('role_id');
        $data['roleMenu']   = $this->M_menu->userMenu($role_id)->result_array();
        $data['user']       = $this->M_auth->getUserRow();

        $menunggu = 0;
        $data['lowongan']       = $this->M_admin->lowongan_ad();
        $data['lamaran_masuk']  = $this->M_admin->getDataLamaranMasuk()->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/v-detail', $data);
        $this->load->view('dashboard/pekerjaan/v-tablist', $data);
        $this->load->view('dashboard/pekerjaan/v-tabproses', $data);
        $this->load->view('dashboard/pekerjaan/v-tabterima', $data);
        $this->load->view('dashboard/pekerjaan/v-tabtolak', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function diProses($dapat_id)
    // Action pelamar sendang diprose 
    // value : 1
    {
        // update status dari data pelamaran [1 => proses | 3 => ditolak]
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_id])->result();
        $update_status = [
            'status' => 1
        ];

        $this->M_admin->update_status_pelamar($update_status, $dapat_id);

        redirect('admin2/pekerjaan/lamaranMasuk');
    }

    public function diterima($dapat_id)
    // Action Terima Karyawan
    {
        // pindah data karywaan yang diterima ke detail_karyawan
        // $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        $data = $this->M_dataKaryawan->getDataLamaran2($dapat_id)->result();
        foreach ($data as $r) {
            $data = [
                // 'id'                    =>  $r->id,
                'nama'                  =>  $r->nama,
                'provinsi'              =>  $r->provinsi,
                'kota'                  =>  $r->kota,
                'kecamatan'             =>  $r->kecamatan,
                'alamat_lengkap'        =>  $r->alamat_lengkap,
                'jk'                    =>  $r->jk,
                'tgl_lahir'             =>  $r->tgl_lahir,
                'no_telp'               =>  $r->no_telp,
                'pendidikan_terakhir'   =>  $r->pendidikan_terakhir,
                'perusahaan_id'     =>  $r->perusahaan_id,
                'department_id'     =>  $r->department_id,
                'divisi_id'         =>  $r->divisi_id,
                'jabatan_id'        =>  $r->jabatan_id,
                'posisi_id'         =>  $r->posisi_id,
                'penempatan_id'     =>  $r->penempatan_id,
                'golongan_id'       =>  $r->golongan_id
            ];

            // $this->M_admin->terima_pelamar($data);
            $this->M_dataKaryawan->insertKaryawanProbation($data);
        }

        /*  kirim data id => detail_karyawan to data_karyawan
            id, perusahaan_id[dari db lowongan]
        */
        // $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        // foreach ($data as $r) {
        //     $data = [
        //         'karyawan_id'           =>  $r->id,
        //         'perusahaan_id'         =>  $r->perusahaan_id
        //     ];

        //     $this->M_admin->terima_pelamar2($data);
        // }

        // update status dari data pelamaran [1 => diterima | 2 => ditolak]
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_id])->result();
        $update_status = [
            'status' => 2
        ];

        $this->M_admin->update_status_pelamar($update_status, $dapat_id);

        // delete data lamaran yang telah di action
        // $delete =  $this->curl->simple_delete($this->API . '/admin', array('id' => $dapat_di), array(CURLOPT_BUFFERSIZE => 10));
        // $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        // $this->M_admin->delete_pelamar();


        redirect('admin2/pekerjaan/lamaranMasuk');
    }


    public function ditolak($dapat_di)
    {
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        $update_status = [
            'status' => 3
        ];
        $this->M_admin->update_status_pelamar($update_status, $dapat_di);

        redirect('admin2/pekerjaan/pekerjaanmaster/lamaranMasuk');
    }
}
