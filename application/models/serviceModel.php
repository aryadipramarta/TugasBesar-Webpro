<?php
class serviceModel extends CI_Model
{
    public function createService()
    {
        $data = [
            'nama_service' => htmlspecialchars($this->input->post('nama_service', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))

        ];
        return $this->db->insert('service', $data);
    }
    public function updateService($id_service, $data)
    {

        $this->db->where('id_service', $id_service);
        $result = $this->db->update('service', $data);
        return $result;
    }
    public function getService($id_service)
    {
        $this->db->where('id_service', $id_service);
        return $this->db->get('service')->row_array();
    }
    public function getAllService()
    {
        $result = $this->db->get('service')->result_array();
        return $result;
    }
    public function deleteService($id_service)
    {
        $this->db->where('id_service', $id_service);
        $result = $this->db->delete('service');
        return $result;
    }
    public function pesanService($data)
    {
        $result = $this->db->insert('pesan_service', $data);
        return $result;
    }
    public function getPesanService($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->order_by('bookingdate', 'ASC');
        $result = $this->db->get('pesan_service')->result_array();
        return $result;
    }
    public function getLiatService($id_dokter)
    {
        $this->db->where('id_dokter', $id_dokter);
        $this->db->order_by('bookingdate', 'ASC');
        $result = $this->db->get('pesan_service')->result_array();
        return $result;
    }
    public function getNamaHargaService($id_service)
    {
        $this->db->select('nama_service,harga');
        $this->db->from('service');
        $this->db->where('id_service', $id_service);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function editNamaPasien($id_user, $data)
    {
        $this->db->where('id_user', $id_user);
        $result = $this->db->update('pesan_service', $data);
        return $result;
    }
    public function addFeedback($data)
    {
        $result = $this->db->insert('feedback', $data);
        return $result;
    }
}
