<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/digiponic-hrm/api";
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
        $this->load->view('dashboard/home_ad');
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
        //library pagination
        $this->load->library('pagination');

        //config
        $config['base_url'] = site_url() . 'admin/lowongan_ad';
        $config['total_rows'] = $this->M_admin->countAllLowongan();
        $config['per_page'] = 2;

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link']        = 'Last';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';

        $config['next_link']        = '&raquo';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tagl_close']  = '</li>';

        $config['prev_link']        = '&laquo';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']     = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close']    = '</a></li>';

        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';

        $config['full_tag_open']    = '<nav class="m-3"><ul class="pagination justify-content-end">';
        $config['full_tag_close']   = ' </ul></nav>';

        $config['attributes'] = array('class' => 'page-link');

        //initialize
        $this->pagination->initialize($config);
        $data['start'] = $this->uri->segment(3);

        $data['lowongan'] = $this->M_admin->lowongan_ad($config['per_page'],  $data['start']);

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
            $this->lowongan_ad();
        } else {
            $this->lowongan_ad();
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

    public function mutasi()
    {
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();
        $data['dept'] = $this->db->get('department')->result_array();

        // $data['status'] = $this->M_admin->data_departemen()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('dashboard/mutasi/mutasi', $data);
        $this->load->view('template/template_admin/footer_ad');
    }
    public function update_mutasi($data_id)
    {

        $data['m_db'] = $this->db->get_where('tbl_karyawan', ['id' => $data_id])->row_array();
        $data['dept'] = $this->db->get('department')->result_array();
        // $data['data'] = $this->Datamaster_model->edits($data_id);
        // var_dump($data);
        // die;
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('id_departemen', 'Id_Departemen', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/template_admin/sidebar_ad');
            $this->load->view('template/template_admin/header_ad');
            $this->load->view('dashboard/mutasi/update', $data);
            $this->load->view('template/template_admin/footer_ad');
        } else {
            // $submenu_name = $this->input->post('nama');
            $nama = $this->input->post('nama');
            $id_departemen = $this->input->post('id_depatemen');

            $data_sub = [
                'nama' => $nama,
                'id_depatemen' => $id_departemen
            ];
            // var_dump($data_sub);
            // die;
            $this->db->set($data_sub);
            $this->db->where('id', $data_id);
            $this->db->update('tbl_karyawan');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Data Success!</div>');
            redirect('dashboard/mutasi/mutasi');
        }
    }
    // sidebar karyawan
    public function data_karyawan()
    {
        $data['m_db'] = $this->M_admin->data_karyawan()->result_array();

        $this->load->view('template/template_admin/sidebar_ad');
        $this->load->view('template/template_admin/header_ad');
        $this->load->view('karyawan/index', $data);
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
                'kota_kabupaten'        =>  $r->kota_kabupaten,
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
