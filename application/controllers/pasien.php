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
        $user = $this->session->userdata('id_user');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $this->load->model('produkModel');
        // $user = $this->authModel->get_profile($session);
        // $produk = $this->produkModel->getAllProduk();
        $data['user'] = $this->authModel->get_profile($session);
        $data['produk'] = $this->produkModel->getAllProduk();
        $data['pesanP'] = $this->produkModel->getPesenProduk($user);
        $this->load->view('user/pasien/pesanproduct_pasien', $data);
        $this->load->view('template/menu_footer');
    }
    public function service()
    {
        $session = $this->session->userdata('username');
        $user = $this->session->userdata('id_user');
        $role = 1;
        $this->load->model('authModel');
        $this->load->model('serviceModel');
        $data['user'] = $this->authModel->get_profile($session);
        $data['service'] = $this->serviceModel->getAllService();
        $data['dokter'] = $this->authModel->getAllDokter($role);
        $data['pesanS'] = $this->serviceModel->getPesanService($user);
        $this->load->view('user/pasien/pesanservice_pasien', $data);
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
    public function feedback()
    {
        $session = $this->session->userdata('username');
        //if (!isset($session)) redirect('auth');
        $this->load->model('authModel');
        $user = $this->authModel->get_profile($session);
        $this->load->view('user/pasien/feedback_pasien', ['data' => $user]);
        $this->load->view('template/menu_footer');
    }
    public function addFeedback()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email already taken!',
            'valid_email' => 'Email is not valid!'
        ]);
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');
        $this->load->model('serviceModel');
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
        ];
        if ($this->form_validation->run()) {
            //echo "success";
            $array = array(
                'success' => '<div class="alert alert-success">Thank you for your feedback!</div>'
            );

            // $this->serviceModel->addFeedback($data);
            // redirect('pasien/feedback', 'refresh');
            //redirect('pasien/profile', 'refresh');
        } else {
            $array = array(

                'error' => true,
                'name_error' => form_error('name'),
                'email_error' => form_error('email'),
                'pesan_error' => form_error('pesan')
            );
            echo json_encode($array);
        }
    }
    public function editProfile($id_user)
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
        $this->load->model('serviceModel');
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
        ];
        $dataS = [
            'nama_pasien' => htmlspecialchars($this->input->post('name', true))
        ];
        if ($this->form_validation->run() == false) {
            echo 'gagal';
            //redirect('pasien/profile', 'refresh');
        } else {

            $this->authModel->editUser($id_user, $data);
            $this->serviceModel->editNamaPasien($id_user, $dataS);
            $result = $this->db->get_where('user', ['username' => $data['username']])->row_array();
            $user = [
                'name' => $result['name'],
                'username' => $result['username'],
                'role_id' => $result['role_id']
            ];
            $this->session->set_userdata($user);
            redirect('pasien/profile', 'refresh');
        }
    }
    public function pesanProduk()
    {
        $this->load->model('produkModel');
        $user = $this->session->userdata('id_user');
        $id_produk = $this->input->post('nama_produk', true);
        $produk = $this->produkModel->getNamaProduk($id_produk);
        foreach ($produk as $p) {
            $result = $p['nama_produk'];
        }
        $data = [
            'id_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'id_user' => htmlspecialchars($user),
            'nama_produk' => htmlspecialchars($result),
            'jumlahpesanan' => htmlspecialchars($this->input->post('jumlahpesanan', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true))
        ];
        $cek = $this->produkModel->pesenProduk($data);
        // var_dump($cek);
        // exit();
        redirect('pasien/produk', 'refresh');
    }


    public function pesanService()
    {
        $this->load->model('serviceModel');
        $this->load->model('authModel');
        $role = 1;
        $user = $this->session->userdata('id_user');
        $nama_pasien = $this->session->userdata('name');
        $id_service = $this->input->post('service', true);
        $service = $this->serviceModel->getNamaHargaService($id_service);
        foreach ($service as $s) {
            $result = $s['nama_service'];
            $harga = $s['harga'];
        }
        $id_user = $this->input->post('name', true);
        $dokter = $this->authModel->getNamaDokter($role, $id_user);
        foreach ($dokter as $d) {
            $result1 = $d['name'];
        }

        $data = [
            'id_user' => htmlspecialchars($user),
            'id_service' => htmlspecialchars($this->input->post('service', true)),
            'id_dokter' => htmlspecialchars($this->input->post('name', true)),
            'nama_dokter' => htmlspecialchars($result1),
            'nama_pasien' => htmlspecialchars($nama_pasien),
            'nama_service' => htmlspecialchars($result),
            'bookingdate' => htmlspecialchars($this->input->post('booking', true)),
            'keluhan' => htmlspecialchars($this->input->post('keluhan', true)),
            'harga' => htmlspecialchars($harga)
        ];
        $this->serviceModel->pesanService($data);
        redirect('pasien/service', 'refresh');
    }
}
