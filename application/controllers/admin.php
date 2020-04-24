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
        $this->load->view('user/admin/produk/lihatproduk_admin', ['data' => $decode_data]);
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
        if ($cek) $this->session->set_flashdata('info', 'Product Berhasil ditambah!');
        else $this->session->set_flashdata('info', 'Product Gagal ditambah!');
        redirect('admin/produk', 'refresh');
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
        $cek = $this->produkModel->updateProduk($id_produk, $data);
        if ($cek) $this->session->set_flashdata('info', 'Product Berhasil diupdate!');
        else $this->session->set_flashdata('info', 'Product Gagal diupdate!');
        redirect('admin/produk', 'refresh');
    }
    public function form_update($id_produk)
    {
        $this->load->model('produkModel');
        $data['title'] = 'SkinSaver-Form Update';
        $data['produk'] = $this->produkModel->getProduk($id_produk);
        $this->load->view('user/admin/produk/form_update', $data);
        $this->load->view('template/menu_footer');
    }
    public function deleteProduk($id_produk)
    {
        $this->load->model('produkModel');
        $cek = $this->produkModel->deleteProduk($id_produk);
        // if ($cek) $this->session->set_flashdata('info', '<div class="alert alert-success" role="alert">Product Berhasil dihapus!</Product>');
        // else $this->session->set_flashdata('info', '<div class="alert alert-danger" role="alert">Product Gagal dihapus!</div>');
        redirect('admin/produk', 'refresh');
    }
    public function service()
    {
        $this->load->model('serviceModel');
        $service = $this->serviceModel->getAllService();
        // $encode_data = json_encode($service);
        // $decode_data = json_decode($encode_data);
        $this->load->view('user/admin/service/service_admin', ['data' => $service]);
        $this->load->view('template/menu_footer');
    }
    public function createService()
    {
        $this->load->model('serviceModel');
        $cek = $this->serviceModel->createService();
        if ($cek) $this->session->set_flashdata('info', 'Service Berhasil ditambah!');
        else $this->session->set_flashdata('info', 'Service Gagal ditambah!');
        redirect('admin/service', 'refresh');
    }
    public function form_tambah_service()
    {
        $data['title'] = 'Skinsaver-Form Tambah';
        $this->load->view('user/admin/service/form_tambah', $data);
    }
    public function updateService($id_service)
    {
        $this->load->model('serviceModel');
        $data = [
            'nama_service' => htmlspecialchars($this->input->post('nama_service', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))

        ];

        //$service = $this->input->post('nama_service');
        //$data['service'] = $this->serviceModel->getService($id_service);
        //$this->load->view('user/admin/service/service_admin',$data); 
        $cek = $this->serviceModel->updateService($id_service, $data);
        if ($cek) $this->session->set_flashdata('info', 'Service Berhasil ditambah!');
        else $this->session->set_flashdata('info', 'Service Gagal ditambah!');
        redirect('admin/service', 'refresh');
    }
    public function deleteService($id_service)
    {
        $this->load->model('serviceModel');
        $cek = $this->serviceModel->deleteService($id_service);
        redirect('admin/service', 'refresh');
    }
    public function dokter()
    {

        $this->load->model('authModel');
        $role = 1;
        $dokter = $this->authModel->getAllDokter($role);
        // $encode_data = json_encode($service);
        // $decode_data = json_decode($encode_data);
        $this->load->view('user/admin/dokter/dokter_admin', ['data' => $dokter]);
        $this->load->view('template/menu_footer');
    }
    public function createDokter()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[3]|max_length[12]|is_unique[user.username]', [
            'min_length' => 'Username is too short!',
            'max_length' => 'Username is too long!',
            'is_unique' => 'Username already taken!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email already taken!',
            'valid_email' => 'Email is not valid!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|max_length[12]', [
            'min_length' => 'Password is too short!',
            'max_length' => 'Password is too long!'
        ]);
        if ($this->form_validation->run() == false) {

            $this->load->view('user/admin/dokter/dokter_admin');
            $this->load->view('template/auth_footer');
        } else {
            $this->load->model('authModel');
            $this->authModel->createDokter();
            redirect('admin/dokter', 'refresh');
        }
    }
    public function updateDokter($id_user)
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[3]|max_length[12]|is_unique[user.username]', [
            'min_length' => 'Username is too short!',
            'max_length' => 'Username is too long!',
            'is_unique' => 'Username already taken!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email already taken!',
            'valid_email' => 'Email is not valid!'
        ]);
        $this->load->model('authModel');
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
        ];
        if ($this->form_validation->run() == false) {
            $this->load->view('user/admin/dokter/dokter_admin');
            $this->load->view('template/menu_footer');
        } else {
            $cek = $this->authModel->editDokter($id_user, $data);
            redirect('admin/dokter', 'refresh');
        }
    }
    public function deleteDokter($id_user)
    {
        $this->load->model('authModel');
        $cek = $this->authModel->deleteDokter($id_user);
        redirect('admin/dokter', 'refresh');
    }
}
