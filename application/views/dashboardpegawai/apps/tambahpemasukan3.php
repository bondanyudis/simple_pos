<table class="" style="width:100%">
  <tr>
    <td style="width:100%">
      <h3 class="up" >Tambah Pemasukan 
      </h3>
    </td>
    <td> 
      <a class="btn btn-default btn-circle"   href="javascript:window.history.go(-1);" role="button">
        <i class="fa fa-chevron-left" aria-hidden="true">
        </i>
      </a>
    </td>
    <td>
  </tr>
</table> 
<ol class="breadcrumb radius">
  <li>
    <a href="#">
      <span class="fa fa-home">
      </span>
    </a>
  </li>
  <li class="active">Pemasukan
  </li>
  <li class="active">Tambah
  </li>
</ol>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-plus-sign">
    </i>
  </div>
  <div class="update-text">Pilihan Pelanggan
  </div>
</div>
<br>
<div class="container-fluid">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <label>Nama
    </label>
    <div class="input-group b radius">
      <span class="input-group-addon radius">
        <i class="fa fa-user">
        </i>
      </span>
      <input id="username" value="<?php echo $pelanggan->nm_pelanggan?>" type="text" class="form-control radius" name="1" readonly>
    </div>
    <br>
    <label>Alamat
    </label>
    <div class="input-group b radius">
      <span class="input-group-addon radius">
        <i class="fa fa-map-marker">
        </i>
      </span>
      <input id="password" value="<?php echo $pelanggan->alamat;?>" type="text" class="form-control radius" name="2" readonly>
    </div>
    <br>
    <label>Telepon
    </label>
    <div class="input-group b radius">
      <span class="input-group-addon radius">
        <i class="fa fa-phone">
        </i>
      </span>
      <input id="username" value="<?php echo $pelanggan->notelp;?>" type="text" class="form-control radius" name="3" readonly>
    </div>
    <br>
    <label>email
    </label>
    <div class="input-group b radius">
      <span class="input-group-addon radius">
        <i class="fa fa-envelope-o">
        </i>
      </span>
      <input id="password" value="<?php echo $pelanggan->email;?>" type="text" class="form-control radius" name="4" readonly>
    </div>
    <br> 
    <br>
  </div>
</div>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-plus-sign">
    </i>
  </div>
  <div class="update-text">Pilihan Layanan
  </div>
</div>
<div class="container-fluid">
  <br>
</div>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td>
        <table class="table table-hover table-bordered table-striped">
          <thead>
            <tr>
              <th>No
              </th>
              <th>Id
              </th>
              <th>Nama
              </th>
              <th>Harga
              </th>
              <th>PPN
              </th>
              <th>Biaya Instal
              </th>
            </tr>
          </thead>
          <?php 
$no=0;
?>
          <tbody>
            <tr>
              <td>
                <?php echo  ++$no?>
              </td>
              <td>LYN
                <?php echo $layanan->id_layanan;?>
              </td>
              <td>
                <?php echo $layanan->nama;?>
              </td>
              <td>
                <?php echo "Rp.".number_format($layanan->harga);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($layanan->ppn);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($layanan->biaya_instal);?>
              </td>
            </tr>
          </tbody>
          <?php  ?>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<form action="<?php echo site_url('pemasukan/tambahpemasukan'); ?>" method="post" enctype="multipart/form-data" role="form" id="form1">
  <div class="container-fluid">
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
      <label>Catatan
      </label>
      <textarea name="13" id="input" class="form-control" rows="3" required="required">
      </textarea>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
      <legend>Detail Pembayaran :    
        <!--            <?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("d F Y");
$jam = date("H:i:s");
echo $tanggal ;
?> -->
      </legend>   
      <label>Total&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp
        <?php 
$total = $layanan->harga + $layanan->biaya_instal + $layanan->ppn;
echo "Rp.".number_format($total);?>
      </label>
      <br>
      <label>Bayar
      </label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp  
      <input value="" step="any" type="number" max="<?php echo $total; ?>" id="myInput" oninput="myFunction()" required>
      <br>
      <label>Tanggal Transaksi
      </label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp
      <!-- <input value=""  type="date"  data-date-format="DD MMMM YYYY" name"1" style="width:175px" class="form-control" required="required"> -->
      <input  type="date" data-date-format="DD MMMM YYYY" name="1" id="input" class="" value="" required="required" style="width:175px" title="">
      <br>
      <label >Piutang&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      </label>
      <label id="piutang">
      </label>
      <br> 
      <br> 
      <br>   
      <br>
    </div>   
  </div>
  <div class="modal-footer ">
    <button type="submit" class="button" style="background-color: #f44336">
      <span class=" fa fa-floppy-o"> Simpan
        </button>
      <a class="button " href="<?php echo site_url('pemasukan/viewpemasukan'); ?>" role="button" style="background-color: #f44336">Batal
      </a>
      </div>
    <br>
    <!--   $data['tgl_bayar'] = $this->input->post('1');
$data['id_pelanggan'] = $this->input->post('3');
$data['id_layanan'] = $this->input->post('4');
$data['nm_layanan'] = $this->input->post('5');
$data['nm_pelanggan'] = $this->input->post('6');
$data['harga'] = $this->input->post('7');
$data['ppn'] = $this->input->post('8');
$data['biaya_instal'] = $this->input->post('9');
$data['total_bayar'] = $this->input->post('10');
$data['bayar'] = $this->input->post('11');
$data['piutang'] = $this->input->post('12');
-->
    <!-- <input type="hidden" name="1" value="<?php $ta = date("y-m-d"); 
echo $ta;?>"> -->
    <input type="hidden" name="3" value="<?php echo $pelanggan->id_pelanggan?>">
    <input type="hidden" name="4" value="<?php echo $layanan->id_layanan;?>">
    <input type="hidden" name="5" value="<?php echo $layanan->nama;?>">
    <input type="hidden" name="6" value="<?php echo $pelanggan->nm_pelanggan?>">
    <input type="hidden" name="7" value="<?php echo $layanan->harga;?>">
    <input type="hidden" name="8" value="<?php echo $layanan->ppn;?>">
    <input type="hidden" name="9" value="<?php echo $layanan->biaya_instal;?>">
    <input type="hidden" name="10" value="<?php echo $total;?>">
    </form>
  <!-- container end -->    
  <br>
  <br>    
  <br>
  <br>    
  <br>
  <br>    
  <br>
  <br>
  <script>
    function myFunction() {
      var total = "<?php echo $layanan->harga + $layanan->biaya_instal + $layanan->ppn;?>";
      var bayar = document.getElementById("myInput").value;
      var piutang = total - bayar;
      a = numeral(piutang).format('0,0');
      document.getElementById("piutang").innerHTML = "Rp." + a;
      document.cookie = 'bayar' + '=' + bayar + '; path=/;';
      document.cookie = 'piutang' + '=' + piutang + '; path=/;';
      // document.getElementById("demo").innerHTML = x + " %";
      // var tot = "<?php echo $total ?>";
      // var subtot = x * tot / 100;
      // var string = numeral(subtot).format('0,0');
      // document.getElementById("diskon").innerHTML = "Rp." + string;
      // var tagihan = tot - subtot;
      // var string2 = numeral(tagihan).format('0,0');
      // document.getElementById("tagihan").innerHTML = "Rp." + string2;
      // document.cookie = 'tagihan' + '=' + tagihan + '; path=/;';
      // document.cookie = 'totaldiskon' + '=' + subtot + '; path=/;';
      // document.cookie = 'diskon' + '=' + x + '; path=/;';
    }
  </script>
