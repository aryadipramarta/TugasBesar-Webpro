<?php

class pasien extends CI_Controller
{

    public function index()
    {
        $session = $this->session->userdata('username');
        if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/customer/home_customer', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function produk()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/customer/pesanproduct_customer', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function service()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/customer/pesanservice_customer', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function profile()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/customer/editprofile_customer', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
}
