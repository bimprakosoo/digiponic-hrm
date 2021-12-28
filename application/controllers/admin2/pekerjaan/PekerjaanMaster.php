<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class PekerjaanMaster extends CI_Controller
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

        $role_id    = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $this->load->view('template/template_admin/sidebar_ad', $data);
    }

    public function index()
    {
        $data['title'] = 'Data lowongan';

        $data['lowongan'] = $this->M_admin->lowongan_ad();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function lamaranMasuk()
    {
        $data['title'] = 'Lamaran Masuk';

        $data['lowongan'] = $this->M_admin->lowongan_ad();
        $data['lamaran_masuk'] = $this->M_admin->lamaran_masuk()->result_array();

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/lamaran_masuk', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function tambah_lowongan()
    {
        $data['title'] = 'Tambah Data Lowongan';

        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/pekerjaan/tambah_lowongan_ad', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function edit($id)
    {
        $data['lowongan'] = $this->M_admin->edit($id);

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

            $insert =  $this->db->insert('lowongan', $data);
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Insert Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Insert Data Gagal');
            }
            redirect('admin2/pekerjaan/pekerjaanmaster');
        } else {
            redirect('admin2/pekerjaan/pekerjaanmaster');
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

    public function diterima($dapat_di)
    {
        // pindah data karywaan yang diterima ke tbl_karyawan
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        foreach ($data as $r) {
            $data = [
                'id'                    =>  $r->id,
                'nama'                  =>  $r->nama,
                'provinsi'              =>  $r->provinsi,
                'kota'                  =>  $r->kota,
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


        redirect('admin2/pekerjaan/pekerjaanmaster/lamaranMasuk');
    }

    // 
    public function ditolak($dapat_di)
    {
        $data = $this->db->get_where('data_lamaran', ['id' => $dapat_di])->result();
        $update_status = [
            'status' => 2
        ];
        $this->M_admin->update_status_pelamar($update_status, $dapat_di);

        redirect('admin2/pekerjaan/pekerjaanmaster/lamaranMasuk');
    }
}
