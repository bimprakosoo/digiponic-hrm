<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function index()
    {
        // $this->load->view('template/headerauth');
        $this->load->view('karyawan/admin');
    }
}
