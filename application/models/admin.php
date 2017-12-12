<?php
class admin extends CI_Model {
function __construct(){
parent::__construct();
}

function view($num, $offset)  {
  
  /*variable num dan offset digunakan untuk mengatur jumlah
    data yang akan dipaging, yang kita panggil di controller*/
  
  $query = $this->db->get("pegawai",$num, $offset);
  return $query->result();
}


// cek keberadaan user di sistem
function DisplayAllMem(){
$this->db->select('*');
$this->db->from('pegawai');
$this->db->order_by('level', 'desc');
return $this->db->get();
}

function Displaymem($id){
$this->db->select('*');
$this->db->from('pegawai');
$this->db->where('id',$id);
return $this->db->get();
}


function deleteuser($id){
$this->db->where('id', $id);
$this->db->delete('pegawai');
}


function tambahpegawai($data){
$this->db->insert('pegawai', $data);
}

function editpegawai($id,$data){

$this->db->where('id', $id);
$this->db->update('pegawai', $data);
}


}



