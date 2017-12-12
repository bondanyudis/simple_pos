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
class pengeluaran extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('pengeluarandb');
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
    
    //Function yang digunakan untuk mendelete pengeluaran
    public function deletepengeluaran($id)
    {
        $this->pengeluarandb->deletepengeluaran($id);
        
        $this->session->set_flashdata('delete', 'pengeluaran');
        redirect(site_url('pengeluaran/viewpengeluaran'));
    }
    //Function yang digunakan untuk mengedit pengeluaran
    public function editpenge($id)
    {
        
        $data['nm_pelanggan']    = $this->input->post('1');
        $data['tgl_pengeluaran'] = $this->input->post('2');
        $data['pekerjaan']       = $this->input->post('3');
        $data['perangkat']       = $this->input->post('4');
        $data['jml']             = $this->input->post('5');
        $data['satuan']          = $this->input->post('6');
        $data['hrg_satuan']      = $this->input->post('7');
        $data['hrg_total']       = $data['hrg_satuan'] * $data['jml'];
        $data['tmpt_pemasangan'] = $this->input->post('8');
        $data['ket']             = $this->input->post('9');
        
        
        $this->pengeluarandb->editpengeluaran($id, $data);
        
        $this->session->set_flashdata('edit', 'pengeluaran');
        redirect(site_url('pengeluaran/viewpengeluaran'));
        
    }
    //Function yang digunakan untuk mengambil data yang ingin diedit
    public function editpengeluaran($id)
    {
        $data['modules']     = 'editpengeluaran';
        $data['pengeluaran'] = $this->pengeluarandb->Displaypengeluaran($id)->row();
        $data['ha']          = '4';
        $this->load->view('dashboardpegawai/apps/app', $data);
        
    }
    //Function yang digunakan untuk menambah data pengeluaran
    public function tambahpengeluaran()
    {
        
        $data['nm_pelanggan']    = $this->input->post('1');
        $data['tgl_pengeluaran'] = $this->input->post('2');
        $data['pekerjaan']       = $this->input->post('3');
        $data['perangkat']       = $this->input->post('4');
        $data['jml']             = $this->input->post('5');
        
        $data['satuan']          = $this->input->post('6');
        $data['hrg_satuan']      = $this->input->post('7');
        $data['hrg_total']       = $data['hrg_satuan'] * $data['jml'];
        $data['tmpt_pemasangan'] = $this->input->post('9');
        $data['ket']             = $this->input->post('10');
        
        
        $this->pengeluarandb->tambahpengeluaran($data);
        
        redirect(site_url('pengeluaran/viewpengeluaran'));
        
    }

    //Function yang digunakan untuk menampilkan pengeluaran ke halaman pengeluaran
    public function viewpengeluaran()
    {
        
        $data['offset']      = 0;
        $data['ha']          = '4';
        $data['pengeluaran'] = $this->pengeluarandb->viewpengeluaran();
        $data['modules']     = 'pengeluaran';
        $this->load->view('dashboardpegawai/apps/app', $data);
        
        
    }
    
    //Function yang digunakan untuk menampilkan halaman tambah pengeluaran
    public function viewtambahpengeluaran()
    {
        $data['modules'] = 'tambahpengeluaran';
        $data['ha']      = '4';
        $this->load->view('dashboardpegawai/apps/app', $data);
    }
    
    
    
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */