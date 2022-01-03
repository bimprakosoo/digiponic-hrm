<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_auth');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'Digiponic Login';
            $this->load->view('template/headerAuth', $data);
            $this->load->view('auth/login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email  =   $this->input->post('email');
        $password  =   $this->input->post('password');

        $user = $this->M_auth->getUser($email);
        // jika user ada
        if ($user) {
            if ($user['is_active'] == 1) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'id'  =>  $user['id'],
                        'email'  =>  $user['email'],
                        'role_id'    =>  $user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin2/dashboard/dashboard');
                    } else if ($user['role_id'] == 2) {
                        redirect('karyawan/dashboard/dashboard');
                    } else if ($user['role_id'] == 4) {
                        redirect('karyawan/dashboard/dashboard');
                    } else {
                        redirect('pelamar/dashboard/dashboard');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum diaktivkan!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terfdatar</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email telah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Digiponic Registration';
            $this->load->view('template/headerAuth', $data);
            $this->load->view('auth/registration');
        } else {
            $data = [
                'nama'  =>  htmlspecialchars($this->input->post('nama', true)),
                'email' =>  htmlspecialchars($this->input->post('email', true)),
                'image' =>  'default.jpg',
                'password'  =>  password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id'   =>  3, // default pelamar
                'is_active' =>  1, // 1=>aktiv | 0=>nonaktiv
                'date_created'  =>  time()
            ];

            $this->M_auth->postRegistration($data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Registration Berhasi!, Silakan Login </div>');
            redirect('auth');
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logged out!</div>');
        redirect('auth');
    }

    public function blocked()
    {
        echo 'access denied';
    }
}
