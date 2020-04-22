<?php

class admin extends CI_Controller
{

    public function index()
    {
        $session = $this->session->userdata('username');
        if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/admin/home_admin', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function produk()
    {
        $this->load->model('produkModel');
        $produk = $this->produkModel->getAllProduk();
        $encode_data = json_encode($produk);
        $decode_data = json_decode($encode_data);
        $this->load->view('user/admin/lihatproduk_admin', ['data' => $decode_data]);
        $this->load->view('template/menu_footer');
    }
    public function createProduk()
    {
        $this->load->model('produkModel');
        $config['upload_path']          =  './assets/image';
        $config['allowed_types']        =  'gif|jpg|png';
        $config['max_size']             =  40240;
        $config['max_width']            =  1920;
        $config['max_height']           =  1080;
        $this->load->library('upload', $config);
        $this->upload->do_upload('gambar');
        $image = $this->upload->data();
        $data = [
            'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true)),
            'produk_img' => $image['file_name']
        ];
        $cek = $this->produkModel->createProduk($data);
        if ($cek) $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Product Berhasil ditambah!</div>');
        else $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Product Gagal ditambah!</div>');
        redirect('admin', 'refresh');
    }
    public function form_tambah()
    {
        $data['title'] = 'SkinSaver-Form Tambah';
        $this->load->view('user/admin/produk/form_tambah', $data);
        // $this->load->view('template/menu_footer');
    }
    public function updateProduk($id_produk)
    {
        $this->load->model('produkModel');
        $cek = $this->produkModel->updateProduk($id_produk);
        if ($cek) $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Product Berhasil diupdate!</div>');
        else $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Product Gagal diupdate!</div>');
        redirect('admin', 'refresh');
    }
    public function form_update()
    {
        $data['title'] = 'SkinSaver-Form Update';
        $this->load->view('user/admin/produk/form_update', $data);
        $this->load->view('template/menu_footer');
    }
    public function deleteProduk($id_produk)
    {
        $this->load->model('produkModel');
        $cek = $this->produkModel->deleteProduk($id_produk);
        if ($cek) $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Product Berhasil dihapus!</div>');
        else $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Product Gagal dihapus!</div>');
        redirect('admin', 'refresh');
    }
}
