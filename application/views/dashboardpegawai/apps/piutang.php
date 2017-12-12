<table class="" style="width:100%">
  <tr>
    <td style="width:100%">
      <h3 class="up" >Bayar Piutang
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
  <li class="active">Piutang
  </li>
</ol>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-plus-sign">
    </i>
  </div>
  <div class="update-text">Pelanggan
  </div>
</div>
<br>
<div class="container-fluid">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <label>Id pemasukan
    </label>
    <div class="input-group b radius">
      <span class="input-group-addon radius">
        <i class="fa fa-map-marker">
        </i>
      </span>
      <input id="username" value="PMK<?php echo $pemasukan->id_pemasukan?>" type="text" class="form-control radius" name="1" readonly>
    </div>
    <br>
    <label>Nama
    </label>
    <div class="input-group b radius">
      <span class="input-group-addon radius">
        <i class="fa fa-user">
        </i>
      </span>
      <input id="username" value="<?php echo $pemasukan->nm_pelanggan?>" type="text" class="form-control radius" name="1" readonly>
    </div>
    <br>
    <label>Id pelanggan
    </label>
    <div class="input-group b radius">
      <span class="input-group-addon radius">
        <i class="fa fa-map-marker">
        </i>
      </span>
      <input id="password" value="PLG<?php echo $pemasukan->id_pelanggan;?>" type="text" class="form-control radius" name="2" readonly>
    </div>
    <br>
  </div>
</div>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-plus-sign">
    </i>
  </div>
  <div class="update-text">Layanan
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
              <th>Nama Layanan
              </th>
              <th>Harga
              </th>
              <th>PPN
              </th>
              <th>Biaya Instal
              </th>
              <th>Total
              </th>
              <th>Pembayaran sebelumnya
              </th>
              <th>Piutang
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
                <?php echo $pemasukan->id_layanan;?>
              </td>
              <td>
                <?php echo $pemasukan->nm_layanan;?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pemasukan->harga);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pemasukan->ppn);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pemasukan->biaya_instal);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pemasukan->total_bayar);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pemasukan->bayar);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pemasukan->piutang);?>
              </td>
            </tr>
          </tbody>
          <?php  ?>
        </table>
      </td>
    </tr>
  </tbody>
</table>
<form action="<?php echo site_url('pemasukan/editpema/'.$pemasukan->id_pemasukan); ?>" method="post" enctype="multipart/form-data" role="form" id="form1">
  <div class="container-fluid">
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
      <label>Catatan
      </label>
      <textarea name="1" id="input" class="form-control" rows="3" required="required">
      </textarea>
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
    </div>
    <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
      <legend>Detail Pembayaran :
        <!--  <?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("d F Y");
$jam = date("H:i:s");
echo $tanggal ;
?> -->
      </legend>   
      <label>Total Tagihan&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        &nbsp&nbsp
        <?php 
$total = $pemasukan->piutang;
echo "Rp.".number_format($total);?>
      </label>
      <br>
      <label>Bayar
      </label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp  
      <input value="" step="any" type="number" min="0" max="<?php echo $pemasukan->piutang;?>" id="myInput" oninput="myFunction()" required>
      <br>
      <label>Tanggal Transaksi
      </label> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp
      <!-- <input value=""  type="date"  data-date-format="DD MMMM YYYY" name"1" style="width:175px" class="form-control" required="required"> -->
      <input  type="date" min="<?php echo $pemasukan->tgl_bayar;?>" data-date-format="DD MMMM YYYY" name="2" id="input" class="" value="" required="required" style="width:175px" title="">
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
      <!-- <a class="button " href="<?php echo site_url('pemasukan/editpema/'.$pemasukan->id_pelanggan); ?>" role="button" style="background-color: #f44336">Batal</a> -->
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
echo $ta;?>">
<input type="hidden" name="3" value="<?php echo $pelanggan->id_pelanggan?>">
<input type="hidden" name="4" value="<?php echo $layanan->id_layanan;?>">
<input type="hidden" name="5" value="<?php echo $layanan->nama;?>">
<input type="hidden" name="6" value="<?php echo $pelanggan->nm_pelanggan?>">
<input type="hidden" name="7" value="<?php echo $layanan->harga;?>">
<input type="hidden" name="8" value="<?php echo $layanan->ppn;?>">
<input type="hidden" name="9" value="<?php echo $layanan->biaya_instal;?>">
<input type="hidden" name="10" value="<?php echo $total;?>"> -->
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
      var total = "<?php echo $pemasukan->piutang;?>";
      var bayar = document.getElementById("myInput").value;
      var piutang = total - bayar;
      a = numeral(piutang).format('0,0');
      document.getElementById("piutang").innerHTML = "Rp." + a;
      var sebelumnya = "<?php echo $pemasukan->bayar;?>";
      document.cookie = 'bayar' + '=' + bayar + '; path=/;';
      document.cookie = 'sebelumnya' + '=' + sebelumnya + '; path=/;';
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
