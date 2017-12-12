<?php
class laporandb extends CI_Model
  {
    function __construct()
      {
        $this->load->database();
        parent::__construct();
      }
    
    
    //query untuk mengambil dan menampilkan data dari database pengeluaran
    function laporan($tahun, $bulan)
      {
        $this->db->where("DATE_FORMAT(tgl_pengeluaran,'%m')", $bulan);
        $this->db->where("DATE_FORMAT(tgl_pengeluaran,'%Y')", $tahun);
        $query = $this->db->get('pengeluaran');
        return $query->result();
      }
    
    
    //query untuk mengambil dan menampilkan data dari database pemasukan
    function laporanpemasukan($tahun, $bulan)
      {
        $this->db->where("DATE_FORMAT(tgl_bayar,'%m')", $bulan);
        $this->db->where("DATE_FORMAT(tgl_bayar,'%Y')", $tahun);
        $query = $this->db->get('pemasukan');
        return $query->result();
      }
    
    
    //query untuk mengambil dan menampilkan data dari database biaya
    function laporanbiaya($tahun, $bulan)
      {
        $this->db->where("DATE_FORMAT(tanggal,'%m')", $bulan);
        $this->db->where("DATE_FORMAT(tanggal,'%Y')", $tahun);
        $query = $this->db->get('biaya');
        return $query->result();
      }
    
    
    
  }