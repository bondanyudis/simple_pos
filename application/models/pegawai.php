<?php
class pegawai extends CI_Model
  {

    function __construct()
      {
        $this->load->database();
        parent::__construct();
      }
    
    //query untuk mengambil dan menampilkan data biaya
    function viewbiaya()
      {   
        $query = $this->db->get("biaya");
        return $query->result();
      }

    //query untuk mengambil dan menampilkan data pelanggan
    function view()
      {               
        $query = $this->db->get("pelanggan");
        return $query->result();
      }    
    
    //query untuk mengambil dan menampilkan data layanan
    function viewlayanan()
      {        
        $query = $this->db->get("layanan");
        return $query->result();
      }
    
    //query untuk mengambil dan menampilkan data pengeluaran
    function viewpengeluaran($num, $offset)
      {
        
        $query = $this->db->get("pengeluaran", $num, $offset);
        return $query->result();
      }
    
    //query untuk mengambil dan menampilkan data biaya berdasarkan id
    function Displaybiaya($id)
      {
        $this->db->select('*');
        $this->db->from('biaya');
        $this->db->where('id_biaya', $id);
        return $this->db->get();
      }
    
    //query untuk mengambil dan menampilkan data pelanggan berdasarkan id
    function Displaypelanggan($id)
      {
        $this->db->select('*');
        $this->db->from('pelanggan');
        $this->db->where('id_pelanggan', $id);
        return $this->db->get();
      }
      
    //query untuk mengambil dan menampilkan data layanan berdasarkan id
    function Displaylayanan($id)
      {
        $this->db->select('*');
        $this->db->from('layanan');
        $this->db->where('id_layanan', $id);
        return $this->db->get();
      }
    
    //query untuk menghapus data biaya berdasarkan id
    function deletebiaya($id)
      {
        $this->db->where('id_biaya', $id);
        $this->db->delete('biaya');
      }

    //query untuk menghapus data pelanggan berdasarkan id
    function deletepelanggan($id)
      {
        $this->db->where('id_pelanggan', $id);
        $this->db->delete('pelanggan');
      }

    //query untuk menghapus data layanan berdasarkan id
    function deletelayanan($id)
      {
        $this->db->where('id_layanan', $id);
        $this->db->delete('layanan');
      }
    
    //query untuk menambah data biaya
    function tambahbiaya($data)
      {
        $this->db->insert('biaya', $data);
      }

    //query untuk menambah data pelanggan
    function tambahpelanggan($data)
      {
        $this->db->insert('pelanggan', $data);
      }
    
    //query untuk menambah data layanan
    function tambahlayanan($data)
      {
        $this->db->insert('layanan', $data);
      }
    
    //query untuk mengedit data biaya
    function editbiaya($id, $data)
      {        
        $this->db->where('id_biaya', $id);
        $this->db->update('biaya', $data);
      }

    //query untuk mengedit data pelanggan
    function editpelanggan($id, $data)
      {        
        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $data);
      }

    //query untuk mengedit data layanan
    function editlayanan($id, $data)
      {        
        $this->db->where('id_layanan', $id);
        $this->db->update('layanan', $data);
      }


  }