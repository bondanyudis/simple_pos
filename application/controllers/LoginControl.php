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

session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class LoginControl extends CI_Controller
  {
    
    
    function __construct()
      {
        parent::__construct();
        
        $this->load->model('Login');
        $this->load->helper('url');
        $this->load->helper('form');
        
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('session');
      }

    //melihat halaman login
    public function index()
      {
        if (isset($this->session->userdata['logged_in'])) //jika session user sudah logged_in
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
        else // jika belum akan diarahkan ke index.html atau halaman login
          {
            $this->load->view('index.html');
          }
        
      }
    
    
    
    
    
    
    public function validateUser()
      {
        
        $username     = $this->input->post('username', 'true');
        $password     = md5($this->input->post('password', 'true'));
        $temp_account = $this->Login->validateUser($username, $password)->row();
        
        // check account
        $num_account = count($temp_account);
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE)
          {
            redirect(site_url('LoginControl'));
          }
        else
          {
            if ($num_account > 0)
              {
                // kalau ada set session
                $array_items = array(
                    'id' => $temp_account->id,
                    'username' => $temp_account->username,
                    'level' => $temp_account->level,
                    'logged_in' => true
                );
                $this->session->set_userdata($array_items);
                
                
                redirect(site_url('controller/'));
              }
            else
              {
                
                $this->session->set_flashdata('notification', 'gagallogin');
                redirect(site_url('LoginControl'));
              }
          }
      }
    
    
    public function logout()
      {
        $this->session->sess_destroy();
        
        $this->session->set_userdata(array(
            'username' => '',
            'password' => '',
            'is_logged_in' => ''
        ));
        redirect(site_url('LoginControl'));
      }
    
  }
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */