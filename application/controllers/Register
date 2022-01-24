<?php
defined('BASEPATH') or exit('No direct script access allowed');

// require APPPATH . '/libraries/RestController.php';

use chriskacerguis\RestServer\RestController;


class Register  extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        // Load the user model
        $this->load->model('user');
    }

    public function index()
    {
        $this->form_validation->set_rules('nama_lengkap', 'nama_lengkap', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('template/headerAuth');
            $this->load->view('register');
        } else {
            // validasi success
            $this->registration_post();
        }
    }

    public function registration_post()
    {
        // Get the post data

        $nama_lengkap   = $this->input->post('nama_lengkap');
        $email          = $this->input->post('email');
        $password       = $this->input->post('password');
        // $role_id        = $this->post('role_id', '1');

        // Validate the post data
        if (!empty($nama_lengkap) && !empty($email) && !empty($password)) {

            // Check if the given email already exists
            $con['returnType'] = 'count';
            $con['conditions'] = array(
                'email' => $email,
            );
            $userCount = $this->user->getRows($con);

            if ($userCount > 0) {
                // Set the response and exit
                // $this->response("The given email already exists.", RestController::HTTP_BAD_REQUEST);
            } else {
                // Insert user data
                $userData = array(
                    //  1 => hrd
                    //  2 => karyawan
                    //  3 => pelamar

                    'nama_lengkap'  => $nama_lengkap,
                    'email'         => $email,
                    'password'      => ($password),
                    'role_id'       => 3

                );
                $insert = $this->user->insert($userData);

                // Check if the user data is inserted
                if ($insert) {
                    // Set the response and exit
                    // $this->response([
                    //     'status' => TRUE,
                    //     'message' => 'The user has been added successfully.',
                    //     'data' => $insert
                    // ], RestController::HTTP_OK);
                    // $this->session->set_flashdata('message', 'register berhasil');
                    redirect('login');
                } else {
                    // Set the response and exit
                    // $this->response("Some problems occurred, please try again.", RestController::HTTP_BAD_REQUEST);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> email atau Password salah </div>');
                    redirect('register');
                }
            }
        } else {
            // Set the response and exit
            // $this->response("Provide complete user info to add.", RestController::HTTP_BAD_REQUEST);
        }
    }
}
