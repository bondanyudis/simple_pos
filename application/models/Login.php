<?php
class Login extends CI_Model
  {
    public function __construct()
      {
        parent::__construct();
        $this->load->database();
      }

    // cek keberadaan user di sistem
    function validateUser($username, $password)
      {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
      }
    
    //untuk mengambil semua data dari database pengeluaran
    function jumlahpengeluaran()
      {
        $this->db->select('*');
        $this->db->from('pengeluaran');
        return $this->db->get();
      }
    
    //untuk mengambil semua data dari database pemasukan
    function jumlahpemasukan()
      {
        $this->db->select('*');
        $this->db->from('pemasukan');
        return $this->db->get();
      }
    
    //untuk mengambil semua data dari database biaya
    function jumlahbiaya()
      {
        $this->db->select('*');
        $this->db->from('biaya');
        return $this->db->get();
      }
    
    
    //untuk mengambil semua data dari database pegawai yang memiliki 
    //username dan passwor yang sesuai parameter
    function pegawai($username, $password)
      {
        $this->db->select('*');
        $this->db->from('pegawai');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
      }

    //untuk mengambil semua data dari database admin yang memiliki 
    //username dan passwor yang sesuai parameter
    function admin($username, $password)
      {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
      }
    
    
  }