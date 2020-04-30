<?php
class authModel extends CI_Model
{
    public function createUser()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'role_id' => 2
        ];
        $this->db->insert('user', $data);
    }

    public function login($data)
    {
        $result = $this->db->get_where('user', ['username' => $data['username']])->row_array();
        if ($result) {
            if (password_verify($data['password'], $result['password'])) {
                $user = [
                    'id_user' => $result['id_user'],
                    'username' => $result['username'],
                    'name' => $result['name'],
                    'role_id' => $result['role_id']
                ];
                $this->session->set_userdata($user);
                if ($user['role_id'] == 1) {
                    redirect('dokter');
                } else if ($user['role_id'] == 2) {
                    redirect('pasien');
                } else {
                    redirect('admin');
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function get_profile($profile)
    {
        $result = $this->db->get_where('user', ['username' => $profile])->result_array();
        if (!$result) return false;
        return $result;
    }
    public function editUser($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $result = $this->db->update('user', $data);
        return $result;
    }
    public function deleteUser($username)
    {
        $this->db->where('username', $username);
        $this->db->delete('user');
        //$this->session->unset_userdata()
    }
    public function createDokter()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'role_id' => 1
        ];
        $this->db->insert('user', $data);
    }
    public function editDokter($id_user, $data)
    {

        $this->db->where('id_user', $id_user);
        $result = $this->db->update('user', $data);
        return $result;
    }
    public function deleteDokter($id_user)
    {
        $this->db->where('id_user', $id_user);
        $result = $this->db->delete('user');
        return $result;
        //$this->session->unset_userdata()
    }
    public function getAllDokter($role)
    {
        $this->db->where('role_id', $role);
        $result = $this->db->get('user')->result_array();
        return $result;
    }
    public function getNamaDokter($role, $id_user)
    {
        $this->db->select('name');
        $this->db->from('user');
        $this->db->where('id_user', $id_user);
        $this->db->where('role_id', $role);
        $result = $this->db->get()->result_array();
        return $result;
    }
}
