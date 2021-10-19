<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        // $this->load->view('template/headerauth');
        // $this->load->view('dashboard/admin');
        $isi['content'] = 'dashboard/home';
        $this->load->view('dashboard/admin2', $isi);
    }
}
