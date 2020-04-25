<?php
class produkModel extends CI_Model
{
    public function createProduk($data)
    {
        $result = $this->db->insert('produk', $data);
        return $result;
    }
    public function updateProduk($id_produk, $data)
    {
        $this->db->where('id_produk', $id_produk);
        $result = $this->db->update('produk', $data);
        return $result;
    }
    public function getNamaProduk($id_produk)
    {
        $this->db->select('nama_produk');
        $this->db->from('produk');
        $this->db->where('id_produk', $id_produk);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function getProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $result = $this->db->get('produk')->row_array();
        return $result;
    }
    public function getAllProduk()
    {
        $result = $this->db->get('produk')->result_array();
        return $result;
    }
    public function deleteProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->delete('produk');
    }
    public function pesenProduk($data)
    {
        $result = $this->db->insert('pesan_produk', $data);
        return $result;
    }
    public function getPesenProdukAll()
    {
        $result = $this->db->get('pesan_produk')->result_array();
        return $result;
    }
    public function getPesenProduk($id_user)
    {
        $this->db->where('id_user', $id_user);
        $result = $this->db->get('pesan_produk')->result_array();
        return $result;
    }
}
