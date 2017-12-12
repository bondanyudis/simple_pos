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
class laporan extends CI_Controller
  {
    
    
    function __construct()
      {
        parent::__construct();
        $this->load->model('laporandb');
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
    
    // function viewlaporan() digunakan untuk mengambil laporan dari database untuk ditampilkan ke view laporan.php
    public function viewlaporan($in)
      {
        $tahun = 0;
        if ($in == '1') //jika $in == 1 maka berarti user menekan tombol cari dan variabel $tahun akan berisi tahun yang dicari oleh user
          {
            $tahun = $this->input->post('cari');
          }
        else 
          {
            $tahun = $in; //jika user tidak menekan tombol cari maka variabel $tahun akan diisi nilai default $in yaitu 2017
          }
        
        //proses pengambilan data pengeluaran mulai bulan januari hingga desember pada tahun tertentu  
        $data['tahun']           = $tahun;
        $data['pengeluaranjan']  = $this->laporandb->laporan($tahun, "01");
        $data['pengeluaranfeb']  = $this->laporandb->laporan($tahun, "02");
        $data['pengeluaranmar']  = $this->laporandb->laporan($tahun, "03");
        $data['pengeluaranapr']  = $this->laporandb->laporan($tahun, "04");
        $data['pengeluaranmei']  = $this->laporandb->laporan($tahun, "05");
        $data['pengeluaranjuni'] = $this->laporandb->laporan($tahun, "06");
        $data['pengeluaranjuli'] = $this->laporandb->laporan($tahun, "07");
        $data['pengeluaranagus'] = $this->laporandb->laporan($tahun, "08");
        $data['pengeluaransep']  = $this->laporandb->laporan($tahun, "09");
        $data['pengeluaranokt']  = $this->laporandb->laporan($tahun, "10");
        $data['pengeluarannov']  = $this->laporandb->laporan($tahun, "11");
        $data['pengeluarandes']  = $this->laporandb->laporan($tahun, "12");
        
        //proses pengambilan data pemasukan mulai bulan januari hingga desember pada tahun tertentu 
        $data['pemasukanjan']  = $this->laporandb->laporanpemasukan($tahun, "01");
        $data['pemasukanfeb']  = $this->laporandb->laporanpemasukan($tahun, "02");
        $data['pemasukanmar']  = $this->laporandb->laporanpemasukan($tahun, "03");
        $data['pemasukanapr']  = $this->laporandb->laporanpemasukan($tahun, "04");
        $data['pemasukanmei']  = $this->laporandb->laporanpemasukan($tahun, "05");
        $data['pemasukanjuni'] = $this->laporandb->laporanpemasukan($tahun, "06");
        $data['pemasukanjuli'] = $this->laporandb->laporanpemasukan($tahun, "07");
        $data['pemasukanagus'] = $this->laporandb->laporanpemasukan($tahun, "08");
        $data['pemasukansep']  = $this->laporandb->laporanpemasukan($tahun, "09");
        $data['pemasukanokt']  = $this->laporandb->laporanpemasukan($tahun, "010");
        $data['pemasukannov']  = $this->laporandb->laporanpemasukan($tahun, "11");
        $data['pemasukandes']  = $this->laporandb->laporanpemasukan($tahun, "12");
        
        //proses pengambilan data biaya mulai bulan januari hingga desember pada tahun tertentu 
        $data['biayajan']  = $this->laporandb->laporanbiaya($tahun, "01");
        $data['biayafeb']  = $this->laporandb->laporanbiaya($tahun, "02");
        $data['biayamar']  = $this->laporandb->laporanbiaya($tahun, "03");
        $data['biayaapr']  = $this->laporandb->laporanbiaya($tahun, "04");
        $data['biayamei']  = $this->laporandb->laporanbiaya($tahun, "05");
        $data['biayajuni'] = $this->laporandb->laporanbiaya($tahun, "06");
        $data['biayajuli'] = $this->laporandb->laporanbiaya($tahun, "07");
        $data['biayaagus'] = $this->laporandb->laporanbiaya($tahun, "08");
        $data['biayasep']  = $this->laporandb->laporanbiaya($tahun, "09");
        $data['biayaokt']  = $this->laporandb->laporanbiaya($tahun, "10");
        $data['biayanov']  = $this->laporandb->laporanbiaya($tahun, "11");
        $data['biayades']  = $this->laporandb->laporanbiaya($tahun, "12");
        
        $data['ha']      = '2';
        $data['modules'] = 'laporan';
        $this->load->view('dashboardpegawai/apps/app', $data);
      }
  }



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */