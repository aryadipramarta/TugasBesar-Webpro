<?php
class authModel extends CI_Model
{
    public function insertnewuser()
    {
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            //htmlspecialchars($this->input->post('name', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            //htmlspecialchars($this->input->post('username', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            //htmlspecialchars($this->input->post('email', true)),
            'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            'role_id' => 2
        ];
        $this->db->insert('user', $data);
    }
}
