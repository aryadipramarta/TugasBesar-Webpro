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
        $user = $this->session->userdata('id_user');
        $this->load->model('authModel');
        $this->load->model('serviceModel');
        $data['user'] = $this->authModel->get_profile($session);
        $data['pesanS'] = $this->serviceModel->getLiatService($user);
        $this->load->view('user/dokter/lihatpasien', $data);
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
