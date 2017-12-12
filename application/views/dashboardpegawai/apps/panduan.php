<table class="" style="width:100%">
  <tr>
    <td style="width:95%">
      <h3 class="up" >Panduan
      </h3>
    </td>
  </tr>
</table>
<ol class="breadcrumb radius">
  <li>
    <a href="<?php echo site_url('LoginControl/validateUser'); ?>">
      <span class="fa fa-home">
      </span>
    </a>
  </li>
  <li class="active">Panduan
  </li>
</ol>
<ul class="nav nav-tabs">
  <li class="active">
    <a data-toggle="tab" href="#home">Login
    </a>
  </li>
  <li>
    <a data-toggle="tab" href="#menu1">Beranda
    </a>
  </li>
  <li>
    <a data-toggle="tab" href="#menu2">Laporan
    </a>
  </li>
  <li>
    <a data-toggle="tab" href="#menu3">Pemasukan
    </a>
  </li>
  <li>
    <a data-toggle="tab" href="#menu4">Pengeluaran
    </a>
  </li>
  <li>
    <a data-toggle="tab" href="#menu5">Komponen
    </a>
  </li>
</ul>
<div class="tab-content">
  <div id="home" class="tab-pane fade in active" class="img-responsive">
    <br>
    <img src="<?php echo base_url('asset/img/1.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8">
      <STRONG>Keterangan :
      </STRONG>  
      <br> 
      <STRONG>Login
      </STRONG> merupakan fitur yang digunakan untuk masuk ke dalam sistem admin 
      <br>          
      1.  Masukkan username “admin” 
      <br> 
      2.  Masukkan password “password” 
      <br>
      3.  Klik tombol login
    </p> 
  </div>
  <div id="menu1" class="tab-pane fade">
    <br>
    <img src="<?php echo base_url('asset/img/2.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8">   
      <STRONG>Keterangan :
      </STRONG>  
      <br>        
      1.  
      <strong>Jumlah pelanggan
      </strong> adalah jumlah pelanggan yang terdaftar saat ini 
      <br>  
      2.  
      <strong>Jumlah layanan
      </strong> adalah jumlah layanan yang tersediat saat ini 
      <br>
      3.  
      <strong>Piutang pelanggan
      </strong> adalah piutang yang belum dibayarkan pelanggan saat ini 
      <br>
      4.  
      <strong>Total pemasukan
      </strong> adalah akumulasi dari pemasukan saat ini 
      <br>
      5.  
      <strong>Total pengeluaran
      </strong> adalah akumulasi dari pengeluaran saat ini 
      <br>
      6.  
      <strong>Total keuntungan
      </strong> adalah pengeluaran dikurangi pemasukan 
      <br>
      7.  Panduan untuk menggunakan sistem 
      <br>
      8.  Untuk keluar dari sistem 
      <br>
    </p> 
  </div>
  <div id="menu2" class="tab-pane fade">
    <br>
    <img src="<?php echo base_url('asset/img/3.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <img src="<?php echo base_url('asset/img/4.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8">
      <STRONG>Keterangan :
      </STRONG>  
      <br>        
      <STRONG>Laporan
      </STRONG> merupakan catatan informasi keadaan keuangan perusahaan pada periode tertentu. Laporan terdiri dari laporan pemasukan, biaya, dan pengeluaran dalam bentuk grafik. 
      <br>
      1.  Kolom filter untuk menampilkan grafik berdasarkan tahun 
      <br>
      2.  Digunakan untuk mengkonversi grafik ke dalam image atau dokumen pdf 
      <br>
      3.  Tabel keuangan berdasarkan filter tahun  yang telah dimasukkan meliputi Bulan, Pemasukan, Pengeluaran, Biaya, Piutang Pelanggan dan Keuntungan 
      <br>
    </p>
  </div>
  <div id="menu3" class="tab-pane fade">
    <br>
    <p style="font-size: 16px;line-height: 1.8">          
      <STRONG>Pemasukan
      </STRONG> merupakan fitur untuk mendokumentasikan pemasukan yang diperoleh dari hasil penjualan pelayanan perusahaan.
    </p>
    <br>
    <img src="<?php echo base_url('asset/img/5.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8">   
      <STRONG>Keterangan :
      </STRONG>  
      <br>        
      1.Button dengan icon tambah digunakan untuk membuat data pemasukan baru jika ada pelanggan yang berlangganan layanan perusahaan 
      <br>   
      2.Show entries digunakan untuk menampilkan baris pada table pemasukan berdasarkan jumlah yang dipilih 
      <br>
      3.Search digunakan untuk memfilter data yang ingin ditampilkan berdasarkan filter yang dimasukkan 
      <br>
      4.Button Delete digunakan untuk menghapus pemasukan yang nilai piutangnya 0, jika nilai piutang lebih dari 0 maka button delete akan digantikan button piutang 
      <br>
      5.Button Piutang digunakan untuk melunasi sisa piutang pelanggan, jika nilai piutang 0 maka button piutang akan digantikan button delete 
      <br>
      <br>
    </p>
    <img src="<?php echo base_url('asset/img/6.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br>
    <img src="<?php echo base_url('asset/img/7.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br>
    <img src="<?php echo base_url('asset/img/8.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br>
    <img src="<?php echo base_url('asset/img/9.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8">   
      <STRONG>Keterangan :
      </STRONG>  
      <br>        
      1.  Pilih pelanggan yang akan menggunakan layanan perusahaan 
      <br>
      2.  Pilih layanan yang akan digunakan 
      <br>
      3.  Isi jumlah biaya yang akan dibayarkan 
      <br>
      4.  Pilih tanggal pembayaran transaksi pemasukan 
      <br>
      5.  Isi kolom catatan jika terdapat keterangan yang perlu ditambahkan, jika tidak ada, isi dengan “-” 
      <br>
      6.  Klik tombol simpan untuk menyimpan transaksi pemasukan ke dalam database 
      <br>
      7.  Klik tombol batal untuk membatalkan pengisian transaksi pemasukan 
      <br>
    </p>
    <br>
    <legend>Piutang
    </legend>
    <img src="<?php echo base_url('asset/img/10.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8"> 
      <STRONG>Keterangan :
      </STRONG>  
      <br> 
      1.  Masukkan nominal berdasarkan biaya yang dibayarkan pelanggan 
      <br>
      2.  Pilih tanggal transaksi piutang dibayarkan 
      <br>
      3.  Isi catatan jika perlu 
      <br>
      4.  Klik tombol simpan 
      <br>
    </p>
    <br>
  </div>
  <div id="menu4" class="tab-pane fade">
    <p style="font-size: 16px;line-height: 1.8"> 
      <br>         
      <STRONG>Pengeluaran
      </STRONG> merupakan fitur yang digunakan untuk mendokumentasi pengeluaran perusahaan untuk penyediaan layanan    
    </p>
    <br>
    <img src="<?php echo base_url('asset/img/11b.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br> 
    <p style="font-size: 16px;line-height: 1.8"> 
      <STRONG>Keterangan :
      </STRONG>  
      <br> 
      1.Tombol dengan icon tambah digunakan untuk membuat data pengeluaran baru 
      <br>
      2.Tombol edit digunakan untuk mengupdate data pengeluaran 
      <br>
      3.Tombol delete digunakan untuk menghapus data pengeluaran 
      <br>    
    </p>
    <br>
    <legend>Tambah Pengeluaran
    </legend>
    <img src="<?php echo base_url('asset/img/12.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8"> 
      <STRONG>Keterangan :
      </STRONG>  
      <br> 
      1.  Lengkapi pengisian kolom-kolom inputan yang disediakan 
      <br>
      2.  Klik tombol Simpan untuk menyimpan data pengeluaran baru ke dalam database 
      <br>
      3.  Klik tombol Batal untuk membatalkan pengisian data pengeluaran 
      <br>
    </p>
    <br>
    <legend>Edit Pengeluaran
    </legend>
    <img src="<?php echo base_url('asset/img/13.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br>
    <p style="font-size: 16px;line-height: 1.8"> 
      <STRONG>Keterangan :
      </STRONG>  
      <br> 
      1.  Ubah data yang perlu diubah 
      <br>
      2.  Klik tombol Simpan untuk mengupdate data pengeluaran 
      <br>
    </p>
    <br>
  </div>
  <div id="menu5" class="tab-pane fade">
    <br>
    <p style="font-size: 16px;line-height: 1.8"> 
      <STRONG>Komponen 
      </STRONG>merupakan fitur yang digunakan untuk memanajemen data-data pelanggan, biaya dan layanan. Komponen pelanggan adalah pelanggan yang menggunakan layanan perusahaan, komponen layanan adalah layanan yang disediakan perusahaan, komponen biaya adalah biaya yang dikeluarkan oleh pihak CMS sendiri untuk keperluan pribadi perusahaan seperti pembayaran BPJS, Listrik dan PDAM, dan lain-lain. 
      <br> 
    </p>
    <img src="<?php echo base_url('asset/img/14.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br> 
    <img src="<?php echo base_url('asset/img/15.jpg');?>" class="img-thumbnail" alt="Cinque Terre"  width="700"  style="margin-left:9px " >
    <br>
    <br>
    <br> 
    <p style="font-size: 16px;line-height: 1.8"> 
      <STRONG>Keterangan :
      </STRONG>  
      <br> 
      1.Tombol dengan icon mata digunakan untuk menampilkan data komponen berdasarkan komponen yang dipilih (pelanggan, biaya atau layanan) 
      <br>
      2. Tombol dengan icon tambah digunakan untuk membuat data komponen baru (pelanggan, biaya atau layanan) 
      <br>
    </p>
    </p>
  <br>
</div>
</div>
