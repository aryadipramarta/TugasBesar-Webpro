<?php

class home extends CI_Controller
{

    public function index()
    {

        $this->load->view('template/menu_header');
        $this->load->view('landingpage/homepage_view');
        $this->load->view('template/menu_footer');
    }

    function about()
    {
        $this->load->view('template/menu_header');
        $this->load->view('landingpage/homepage_about');
        $this->load->view('template/menu_footer');
    }

    function contact()
    {
        $this->load->view('template/menu_header');
        $this->load->view('landingpage/homepage_contact');
        $this->load->view('template/menu_footer');
    }
    function product()
    {
        $this->load->model('produkModel');
        $data = $this->produkModel->getAllProduk();
        $encode_data = json_encode($data);
        $decode_data = json_decode($encode_data);
        $this->load->view('template/menu_header');
        $this->load->view('landingpage/homepage_product', ['data' => $decode_data]);
        $this->load->view('template/menu_footer');
    }
}
