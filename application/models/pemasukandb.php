<?php

// kelas yang digunakan untuk melakukan query CRUD pada database pemasukan
class pemasukandb extends CI_Model
  {
    function __construct()
      {
        $this->load->database();
        parent::__construct();
      }

    function deletepemasukan($id)
      {
        $this->db->where('id_pemasukan', $id);
        $this->db->delete('pemasukan');
      }

    function editpemasukan($id, $data)
      {
        
        $this->db->where('id_pemasukan', $id);
        $this->db->update('pemasukan', $data);
      }

    //menampilkan data yang sesuai dengan id
    function Displaypemasukan($id)
      {
        $this->db->select('*');
        $this->db->from('pemasukan');
        $this->db->where('id_pemasukan', $id);
        return $this->db->get();
      }

    function viewpemasukan()
      {
        
        $query = $this->db->get("pemasukan");
        return $query->result();
      }
      
    function tambahpemasukan($data)
      {
        $this->db->insert('pemasukan', $data);
      }
    
  } 