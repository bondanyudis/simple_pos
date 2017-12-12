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
class pemasukan extends CI_Controller
  {
    
    
    function __construct()
      {
        parent::__construct();
        $this->load->model('pemasukandb');
        $this->load->model('pegawai');
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
        $this->load->helper('cookie');
        
      }
    
    public function index()
      {
        $this->load->view('dashboardpegawai/beranda');
      }
    
    //Menghapus pemasukan dari database
    public function deletepemasukan($id)
      {
        $this->pemasukandb->deletepemasukan($id);
        
        $this->session->set_flashdata('delete', 'pemasukan');
        redirect(site_url('pemasukan/viewpemasukan'));
      }
    //Function yang digunakan untuk mengedit pemasukan sesuai id yang diinginkan user
    public function editpema($id)
      {
        
        $data['ket']       = $this->input->post('1');
        // $data['id_pelanggan'] = $this->input->post('3');
        // $data['id_layanan'] = $this->input->post('4');
        // $data['nm_layanan'] = $this->input->post('5');
        // $data['nm_pelanggan'] = $this->input->post('6');
        // $data['harga'] = $this->input->post('7');
        // $data['ppn'] = $this->input->post('8');
        // $data['biaya_instal'] = $this->input->post('9');
        $data['tgl_bayar'] = $this->input->post('2');
        $sebelumnya        = get_cookie("sebelumnya");
        $data['bayar']     = get_cookie("bayar") + (int) $sebelumnya;
        $data['piutang']   = get_cookie("piutang");
        
        $this->pemasukandb->editpemasukan($id, $data);
        
        $this->session->set_flashdata('edit', 'pemasukan');
        redirect(site_url('pemasukan/viewpemasukan'));
        
      }
    //Function yang digunakan untuk mengambil data piutang dari database sesuai id
    public function editpiutang($id)
      {
        $data['modules']   = 'piutang';
        $data['pemasukan'] = $this->pemasukandb->Displaypemasukan($id)->row();
        $data['ha']        = '3';
        $this->load->view('dashboardpegawai/apps/app', $data);
        
      }
    //Function yang digunakan untuk menambahkan data pemasukan
    public function tambahpemasukan()
      {
        
        $data['tgl_bayar']    = $this->input->post('1');
        $data['id_pelanggan'] = $this->input->post('3');
        $data['id_layanan']   = $this->input->post('4');
        $data['nm_layanan']   = $this->input->post('5');
        $data['nm_pelanggan'] = $this->input->post('6');
        $data['harga']        = $this->input->post('7');
        $data['ppn']          = $this->input->post('8');
        $data['biaya_instal'] = $this->input->post('9');
        $data['total_bayar']  = $this->input->post('10');
        $data['bayar']        = get_cookie("bayar");
        $data['piutang']      = get_cookie("piutang");
        // $data['bayar_piutang'] = $this->input->post('13');
        // $data['tgl_bayar_piutang'] = $this->input->post('14');
        $data['ket']          = $this->input->post('13');
        
        
        $this->pemasukandb->tambahpemasukan($data);
        
        redirect(site_url('pemasukan/viewpemasukan'));
        
      }
    //Function yang digunakan untuk melihat halaman pemasukan
    public function viewpemasukan()
      {
        
        
        $data['offset']    = 0;
        $data['ha']        = '3';
        $data['pemasukan'] = $this->pemasukandb->viewpemasukan();
        $data['modules']   = 'pemasukan';
        $this->load->view('dashboardpegawai/apps/app', $data);
        
        
      }
    
    //Function yang digunakan untuk melihat halaman tambah pemasukan
    public function viewtambahpemasukan()
      {
        
        
        $data['offset']    = 0;
        $data['ha']        = '3';
        $data['pelanggan'] = $this->pegawai->view();
        $data['modules']   = 'tambahpemasukan';
        $this->load->view('dashboardpegawai/apps/app', $data);
        
      }
    
    //Function yang digunakan untuk melihat halaman tambah pemasukan dengan inputan pelanggan
    public function viewtambahpemasukan2($id_pelanggan = 0, $offset = 0)
      {
        
        
        $data['offset']       = 0;
        $data['id_pelanggan'] = $id_pelanggan;
        $data['pelanggan']    = $this->pegawai->Displaypelanggan($id_pelanggan)->row();
        
        $data['layanan'] = $this->pegawai->viewlayanan();
        $data['modules'] = 'tambahpemasukan2';
        $data['ha']      = '3';
        $this->load->view('dashboardpegawai/apps/app', $data);
        
      }
    //Function yang digunakan untuk melihat halaman tambah pemasukan dengan inputan layanan
    public function viewtambahpemasukan3($id_layanan, $id_pelanggan)
      {
        
        
        $data['pelanggan'] = $this->pegawai->Displaypelanggan($id_pelanggan)->row();
        $data['layanan']   = $this->pegawai->Displaylayanan($id_layanan)->row();
        
        $data['ha']      = '3';
        $data['modules'] = 'tambahpemasukan3';
        $this->load->view('dashboardpegawai/apps/app', $data);
        
      }
    
    
  }



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */