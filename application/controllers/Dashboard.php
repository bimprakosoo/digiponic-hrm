<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
    }

    public function index()
    {
        // $this->load->view('template/headerauth');
        // $this->load->view('dashboard/admin');
        $isi['content'] = 'dashboard/home';
        $this->load->view('dashboard/admin2', $isi);
    }


    public function lamaran_masuk()
    {
        // $data['datakontak'] = json_decode($this->curl->simple_get($this->API . '/admin'));
        $data['lamaran_masuk'] = $this->M_admin->lamaran_masuk()->result_array();
        $data['lamaran_masuk'] = $this->M_admin->lamaran_masuk()->result_array();


        $this->load->view('dashboard/home/sidebar_ad.php');
        $this->load->view('dashboard/home/header_ad.php');
        $this->load->view('dashboard/lamaran_masuk', $data);
        $this->load->view('dashboard/home/footer_ad.php');
    }


    // delete data kontak
    function delete($id)
    {
        if (empty($id)) {
            redirect('dashboard/lamaran_masuk');
        } else {
            $delete =  $this->curl->simple_delete($this->API . '/admin', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Gagal');
            }
            redirect('dashboard/lamaran_masuk');
        }
    }
}
