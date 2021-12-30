<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = $this->API = site_url() . 'api';


        // model
        $this->load->model('M_auth');
        $this->load->model('M_menu');
    }

    public function index()
    {
        $data['title'] = 'Menu';
        $data['user'] = $this->M_auth->getUserRow();

        $data['menu'] = $this->M_menu->userMenu()->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/template_admin/sidebar_ad', $data);
            $this->load->view('template/template_admin/header_ad', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('template/template_admin/footer_ad');
        } else {
            $data = [
                'menu'  =>   $this->input->post('menu')
            ];
            $this->M_menu->postMenu($data);

            $this->session->set_flashdata('menu', '<div class="alert alert-success" role="alert">Menu baru telah ditambahkan</div>');
            redirect('menu-access/menu/menu');
        }
    }

    public function subMenu()
    {
        $data['title'] = 'Sub Menu';
        $data['user'] = $this->M_auth->getUserRow();

        $data['subMenu'] = $this->M_menu->userSubMenu()->result_array();
        $data['menu'] = $this->M_menu->userMenu()->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/template_admin/sidebar_ad', $data);
            $this->load->view('template/template_admin/header_ad', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('template/template_admin/footer_ad');
        } else {
            $data = [
                'title'         =>   $this->input->post('title'),
                'menu_id'       =>   $this->input->post('menu_id'),
                'url'           =>   $this->input->post('url'),
                'icon'          =>   $this->input->post('icon'),
                'is_active'     =>   1,
                'drops'        =>   $this->input->post('drops')
            ];
            $this->M_menu->postSubMenu($data);

            $this->session->set_flashdata('menu', '<div class="alert alert-success" role="alert">Menu baru telah ditambahkan</div>');
            redirect('menu-access/menu/menu/subMenu');
        }
    }
}
