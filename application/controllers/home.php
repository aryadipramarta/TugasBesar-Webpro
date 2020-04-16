<?php

class home extends CI_Controller
{

    public function index()
    {
        $this->load->view('user/homepage_view');
        $this->load->view('template/menu_footer');
    }
}
