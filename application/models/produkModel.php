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
    public function getProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->get('produk')->row_array();
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
    public function pesenProduk()
    {
    }
}
