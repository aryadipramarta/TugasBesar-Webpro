<?php

class dokter extends CI_Controller
{

    public function index()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/dokter/home_dokter', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }

    public function datapasien()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/dokter/lihatpasien', ['data' => $user]);
        $this->load->view('template/menu_footer');  
    }
    public function editprofiledokter()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/dokter/editprofiledokter', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
}
