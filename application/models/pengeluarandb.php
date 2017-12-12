<?php

// kelas yang digunakan untuk melakukan wuery CRUD pada database pengeluaran
class pengeluarandb extends CI_Model
  {
    function __construct()
      {
        $this->load->database();
        parent::__construct();
      }
    
    function deletepengeluaran($id)
      {
        $this->db->where('id_pengeluaran', $id);
        $this->db->delete('pengeluaran');
      }
    
    function editpengeluaran($id, $data)
      {
        
        $this->db->where('id_pengeluaran', $id);
        $this->db->update('pengeluaran', $data);
      }
    
    function Displaypengeluaran($id)
      {
        $this->db->select('*');
        $this->db->from('pengeluaran');
        $this->db->where('id_pengeluaran', $id);
        return $this->db->get();
      }
    
    function viewpengeluaran()
      {
        
        $query = $this->db->get("pengeluaran");
        return $query->result();
      }
    
    function tambahpengeluaran($data)
      {
        $this->db->insert('pengeluaran', $data);
      }
    
  }