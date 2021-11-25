<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/digiponic-hrm/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('upload');
        $this->load->library('form_validation');
        // Load the user model
        $this->load->model('user');

        // if ($this->session->userdata('status') != true) {
        //     redirect(base_url("login"));
        // }
    }

    public function index()
    {

        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerAuth');
            $this->load->view('login');
        } else {
            // validasi success
            $this->login_post();
        }
    }

    private function login_post()
    {

        // Get the post data
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('users', ['email' => $email])->row_array();
        // Validate the post data
        if (!empty($email) && !empty($password)) {

            // Check if any user exists with the given credentials
            $con['returnType'] = 'single';
            $con['conditions'] = array(
                'email' => $email,
                'password' => ($password),
                'status' => 1
            );
            $user['users'] = $this->user->getRows($con);

            // var_dump($user);
            // die;
            if ($user) {
                $data = [
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                // var_dump($user);
                // die;
                // ke halaman user
                if ($user['role_id'] == 1) {
                    redirect('admin');
                } else if ($user['role_id'] == 2) {
                    redirect('karyawan');
                } else {
                    redirect('pelamar');
                }

                // Set the response and exit
                // $this->response([
                //     'status' => TRUE,
                //     'message' => 'User Berhasil Login .',
                //     'data' => $user
                // ], RestController::HTTP_OK);

                // $this->session->set_flashdata('message', 'login berhasils');
                // redirect('Dashboard');
            } else {
                // Set the response and exit
                //BAD_REQUEST (400) being the HTTP response code
                // $this->response("email atau password salah.", RestController::HTTP_BAD_REQUEST);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> email atau Password salah </div>');
                redirect('login');
            }
        } else {
            // Set the response and exit
            // $this->response("Provide email and password.", RestController::HTTP_BAD_REQUEST);
        }
    }
}
