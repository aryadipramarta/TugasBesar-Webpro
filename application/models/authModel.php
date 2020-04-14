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
                    'username' => $result['username'],
                    'role_id' => $result['role_id']
                ];
                $this->session->set_userdata($user);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function get_profile($profile)
    {
        $result = $this->db->get_where('user', ['username' => $profile]);
    }
}
