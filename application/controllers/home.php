<?php

class home extends CI_Controller
{

    public function index()
    {
        
        $this->load->view('user/homepage_view');
        $this->load->view('template/menu_footer');
    }

    function about(){
        $this->load->view('user/homepage_about');
        $this->load->view('template/menu_footer');
    }

    function contact(){
        $this->load->view('user/homepage_view');
        $this->load->view('template/menu_footer');
    }
    function product(){
        $this->load->view('user/homepage_view');
        $this->load->view('template/menu_footer');
    }
}
