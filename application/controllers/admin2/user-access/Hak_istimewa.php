<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Hak_istimewa extends CI_Controller
{
    var $API = "";

    function __construct()
    {
        parent::__construct();
        $this->API = site_url() . 'api';
        // is_logged_in();

        // model
        $this->load->model('M_admin');
        $this->load->model('M_auth');
        $this->load->model('M_menu');
    }

    public function index()
    {
        $data['title']  = 'User Access';
        $role_id        = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();
        $data['role'] = $this->M_menu->Role()->result_array();


        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/hak_istimewa/index', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function roleaccess($role_id)
    {
        $data['title']  = 'User Access';
        $role_id        = $this->session->userdata('role_id');
        $data['roleMenu'] = $this->M_menu->userMenu($role_id)->result_array();
        $data['user'] = $this->M_auth->getUserRow();

        $data['role'] = $this->M_menu->RoleAccess($role_id)->row_array();


        $this->db->where('id !=', 1);
        // $data['menu'] = $this->menu->getUserMenuAll();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('template/template_admin/sidebar_ad', $data);
        $this->load->view('template/template_admin/header_ad', $data);
        $this->load->view('dashboard/hak_istimewa/role-access', $data);
        $this->load->view('template/template_admin/footer_ad');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];
        $result = $this->db->get_where('user_access_menu', $data);
        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Access Changed! </div>');
    }
}
