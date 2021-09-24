<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LandingPage extends CI_Controller
{

    public function index()
    {
        $this->load->view('home/landingpage_view');
    }
    public function lowongan()
    {
    $this->load->view('lowongan/lowongan_view');
    }
}
