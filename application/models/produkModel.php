<?php
class produkModel extends CI_Model
{
    public function createProduk()
    {
        $data = [
            'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))

        ];
        return $this->db->insert('produk', $data);
    }
    public function updateProduk($id_produk)
    {
        $data = [
            'nama_produk' => htmlspecialchars($this->input->post('nama_produk', true)),
            'kategori' => htmlspecialchars($this->input->post('kategori', true)),
            'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            'harga' => htmlspecialchars($this->input->post('harga', true))

        ];
        $this->db->where('id_produk', $id_produk);
        return $this->db->insert('produk', $data);
    }
    public function getProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->get('produk')->row_array();
    }
    public function getAllProduk()
    {
        return $this->db->get('produk')->result_array();
    }
    public function deleteProduk($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        return $this->db->delete('id_produk');
    }
}
