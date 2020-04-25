<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('authModel');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'SkinSaver-Login';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('template/auth_footer');
        } else {
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $result = $this->authModel->login($data);
            if (!$result) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password or Username is wrong!</div>');
                redirect('auth');
                //redirect('pasien');
                // $session = $this->session->userdata('username');
                // if (!isset($session)) redirect('auth');
                // $user = $this->authModel->get_profile($session);
                // $this->load->view('user/customer/home_customer', ['data' => $user]);
                // $this->load->view('template/menu_footer');
                //redirect('home');
            }
        }
    }


    public function register()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[3]|max_length[12]|is_unique[user.username]', [
            'min_length' => 'Your Username is too short!',
            'max_length' => 'Your Username is too long!',
            'is_unique' => 'Your Username already taken!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Your Email already taken!',
            'valid_email' => 'Your Email is not valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[check_password]', [
            'matches' => 'Your Password is not match!',
            'min_length' => 'Your Password too short!'
        ]);
        $this->form_validation->set_rules('check_password', 'Repeat Password', 'required|trim|min_length[3]|matches[password]');


        if ($this->form_validation->run() == false) {

            $data['title'] = 'SkinSaver-Register';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('template/auth_footer');
        } else {
            $this->authModel->createUser();
            redirect('auth', 'refresh');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
        $this->load->view('template/menu_header');
        $this->load->view('landingpage/homepage_view');
        $this->load->view('template/menu_footer');
    }
    public function editUser()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'SkinSaver-Edit Profile';
        } else {
        }
    }
    public function deleteUser()
    {
        $username = $this->session->userdata('username');
        $this->authModel->deleteUser($username);
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        redirect('home');
    }
}
