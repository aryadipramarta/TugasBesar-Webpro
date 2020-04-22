<?php

class pasien extends CI_Controller
{

    public function index()
    {
        $session = $this->session->userdata('username');
        if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/pasien/home_pasien', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function produk()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/pasien/pesanproduct_pasien', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function service()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/pasien/pesanservice_pasien', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function profile()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/pasien/editprofile_pasien', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
}
