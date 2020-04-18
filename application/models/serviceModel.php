<?php
class serviceModel extends CI_Model
{
    public function createService()
    {
        $data = [
            'nama_service' => htmlspecialchars($this->input->post('nama_produk', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))

        ];
        return $this->db->insert('service', $data);
    }
    public function updateService($id_service)
    {
        $data = [
            'nama_service' => htmlspecialchars($this->input->post('nama_produk', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))

        ];
        $this->db->where('id_service', $id_service);
        return $this->db->insert('service', $data);
    }
    public function getService($id_service)
    {
        $this->db->where('id_service', $id_service);
        return $this->db->get('service')->row_array();
    }
    public function getAllService()
    {
        return $this->db->get('service')->result_array();
    }
    public function deleteService($id_service)
    {
        $this->db->where('id_service', $id_service);
        return $this->db->delete('id_service');
    }
    public function booking()
    {
    }
}
