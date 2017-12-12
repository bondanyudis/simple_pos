<?php
/*********************************************************************************************
 * ACCOUNTING AND FINANCE PT. Citra Media Solusindo
 * -------------------------------------------------------------------------------------------
 * Programmed by 1. Irwin Deriyan Ferdiansyah
                 2. Rizky Brama Sakti
                 3. Sofyan Syahri Huzaini
 * Dated : 2017-08-03
 * No HP : 085336648080
 * Noted : PKL Fakultas Ilmu Komputer Universitas Brawijaya Malang / Angkatan 2014
 *********************************************************************************************/


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class controller extends CI_Controller
  {
    
    function __construct()
      {
        parent::__construct();
        $this->load->model('pegawai');
        $this->load->model('Login');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper(array(
            'url'
        ));
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('pagination');
      }
    
    public function index()
      {
        if (isset($this->session->userdata['logged_in']))
          {
            
            $jumpelanggan           = $this->db->query('SELECT * FROM pelanggan');
            $jumlayanan             = $this->db->query('SELECT * FROM layanan');
            $data['jumpelanggan']   = $jumpelanggan->num_rows();
            $data['jumlayanan']     = $jumlayanan->num_rows();
            $data['jumpengeluaran'] = $this->Login->jumlahpengeluaran()->result();
            $data['jumpemasukan']   = $this->Login->jumlahpemasukan()->result();
            $data['jumbiaya']       = $this->Login->jumlahbiaya()->result();
            $data['ha']             = '1';
            $this->load->view('dashboardpegawai/beranda', $data);
          }
        else
          {
            $this->session->sess_destroy();
            $this->load->view('index.html');
          }
      }
    
    //Menampilkan biaya
    public function viewbiaya()
      {
        $data['offset']  = 0;
        $data['ha']      = '5';
        $data['biaya']   = $this->pegawai->viewbiaya();
        $data['modules'] = 'biaya';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }

    //Menampilkan panduan
    public function viewpanduan()
      {
        
        $data['offset'] = 0;
        $data['ha']     = '1';
        
        $data['modules'] = 'panduan';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }
    
    //Menampilkan pelanggan
    public function viewproduk()
      {
        
        
        $data['ha']        = '5';
        $data['pelanggan'] = $this->pegawai->view();
        $data['modules']   = 'produk';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }

    //Menampilkan layanan
    public function viewproduklayanan()
      {
        
        
        $data['offset']  = 0;
        $data['ha']      = '5';
        $data['layanan'] = $this->pegawai->viewlayanan();
        $data['modules'] = 'produklayanan';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }
    
    //Menghapus biaya sesuai id
    public function deletebiaya($id)
      {
        $this->pegawai->deletebiaya($id);
        
        $this->session->set_flashdata('delete', 'biaya');
        redirect(site_url('pegawaiController/viewbiaya'));
      }
    
    //Menghapus pelanggan sesuai id
    public function deletepelanggan($id)
      {
        $this->pegawai->deletepelanggan($id);
        
        $this->session->set_flashdata('delete', 'pelanggan');
        redirect(site_url('pegawaiController/viewproduk'));
      }
    //Menghapus layanan sesuai id
    public function deletelayanan($id)
      {
        $this->pegawai->deletelayanan($id);
        
        $this->session->set_flashdata('delete', 'layanan');
        redirect(site_url('pegawaiController/viewproduklayanan'));
      }
    //Membuat biaya baru
    public function tambahbiaya()
      {
        
        $data['jns_pengeluaran'] = $this->input->post('1');
        $data['nominal']         = $this->input->post('2');
        $data['tanggal']         = $this->input->post('3');
        $data['ket']             = $this->input->post('4');

        $this->pegawai->tambahbiaya($data);
        $this->session->set_flashdata('tambah', 'biaya');
        $this->viewbiaya();
        // redirect(site_url('pegawaiController'));
        
        redirect(site_url('pegawaiController/viewbiaya'));
      }
    //Membuat pelanggan baru
    public function tambah()
      {
        
        $data['nm_pelanggan'] = $this->input->post('1');
        $data['alamat']       = $this->input->post('2');
        $data['notelp']       = $this->input->post('3');
        $data['email']        = $this->input->post('4');
        $data['piutang']      = $this->input->post('5');

        $this->pegawai->tambahpelanggan($data);
        $this->session->set_flashdata('tambah', 'pelanggan');
        $this->viewproduk();
        // redirect(site_url('pegawaiController'));
        
        redirect(site_url('pegawaiController/viewproduk'));
      }
    //Membuat layanan baru
    public function tambahlayanan()
      {
        
        $data['nama']         = $this->input->post('1');
        $data['harga']        = $this->input->post('2');
        $data['biaya_instal'] = $this->input->post('3');
        
        if ($this->input->post('4') == 'ppn')
          {
            # code...
            $data['ppn'] = $data['harga'] * 10 / 100;
          }
        else
          {
            $data['ppn'] = 0;
          }

        $this->pegawai->tambahlayanan($data);
        $this->session->set_flashdata('tambah', 'layanan');
        $this->viewproduk();
        // redirect(site_url('pegawaiController'));
        
        redirect(site_url('pegawaiController/viewproduklayanan'));
      }
    //Mengambil data layanan sesuai id untuk diproses lebih lanjut di function edit1()
    public function editlayanan($id)
      {
        $data['modules'] = 'produkeditlayanan';
        $data['layanan'] = $this->pegawai->Displaylayanan($id)->row();
        $data['ha']      = '5';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }
    //Mengambil data pelanggan sesuai id untuk diproses lebih lanjut di function edit()
    public function editpelanggan($id)
      {
        $data['modules']   = 'produkeditpelanggan';
        $data['pelanggan'] = $this->pegawai->Displaypelanggan($id)->row();
        $data['ha']        = '5';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }
    //Mengambil data biaya sesuai id untuk diproses lebih lanjut di function editb()
    public function editbiaya($id)
      {
        $data['modules'] = 'editbiaya';
        $data['biaya']   = $this->pegawai->Displaybiaya($id)->row();
        $data['ha']      = '5';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }
    //Mengedit data pelanggan sesuai id
    public function edit($id)
      {
        
        $data['nm_pelanggan'] = $this->input->post('1');
        $data['alamat']       = $this->input->post('2');
        $data['notelp']       = $this->input->post('3');
        $data['email']        = $this->input->post('4');
        $data['piutang']      = $this->input->post('5');
        
        
        $this->pegawai->editpelanggan($id, $data);
        
        $this->session->set_flashdata('edit', 'pelanggan');
        redirect(site_url('pegawaiController/viewproduk'));
      }
    //Mengedit data layanan sesuai id
    public function editl($id)
      {
        
        $data['nama']         = $this->input->post('1');
        $data['harga']        = $this->input->post('2');
        $data['biaya_instal'] = $this->input->post('3');
        $data['ppn']          = $data['harga'] * 10 / 100;
        if ($this->input->post('4') == 'ppn')
          {
            # code...
            $data['ppn'] = $data['harga'] * 10 / 100;
          }
        else
          {
            $data['ppn'] = 0;
          }
        
        $this->pegawai->editlayanan($id, $data);
        
        $this->session->set_flashdata('edit', 'layanan');
        redirect(site_url('pegawaiController/viewproduklayanan'));
      }
    //Mengedit data biaya sesuai id
    public function editb($id)
      {
        
        $data['jns_pengeluaran'] = $this->input->post('1');
        $data['nominal']         = $this->input->post('2');
        $data['tanggal']         = $this->input->post('3');
        $data['ket']             = $this->input->post('4');
        
        $this->pegawai->editbiaya($id, $data);
        
        $this->session->set_flashdata('edit', 'biaya');
        redirect(site_url('pegawaiController/viewbiaya'));
      }
    
  }

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */