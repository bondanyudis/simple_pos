<table class="" style="width:100%">
  <tr>
    <td style="width:100%">
      <h3 class="up" >Tambah Pengeluaran 
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
    <a href="<?php echo site_url('LoginControl/validateUser'); ?>">
      <span class="fa fa-home">
      </span>
    </a>
  </li>
  <li class="active">Pengeluaran
  </li>
  <li class="active">Tambah
  </li>
</ol>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-plus-sign">
    </i>
  </div>
  <div class="update-text">Masukkan Data Pengeluaran  
  </div>
</div>
<br>
<div class="container-fluid">
  <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
    <form action="<?php echo base_url('index.php/pengeluaran/tambahpengeluaran/');?>" method="post" enctype="multipart/form-data" role="form" id="form1">
      <label>Nama Pelanggan
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-user">
          </i>
        </span>   
        <input id="username" value="" type="text" class="form-control radius" name="1"  required>
      </div>
      <br>
      <label>Tanggal Pengeluaran
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-calendar">
          </i>
        </span>
        <input id="password"  value="" type="date" class="form-control radius" name="2"  required>
      </div>
      <br>
      <label>Nama Proyek
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-product-hunt">
          </i>
        </span>   
        <input id="username" value="" type="text" class="form-control radius" name="3"  required>
      </div>
      <br>
      <label>Perangkat
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-briefcase">
          </i>
        </span>
        <input id="password"  value="" type="text" class="form-control radius" name="4"  required>
      </div>
      <br>
      <label>Jumlah
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-plus">
          </i>
        </span>   
        <input id="username" value="" type="number" class="form-control radius" name="5"  required>
      </div>
      <br>
      <label>Satuan
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-tag">
          </i>
        </span>   
        <input id="username" value="" type="text" class="form-control radius" name="6"  required>
      </div>
      <br>
      <label>Harga Per Satuan
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-dollar">
          </i>
        </span>   
        <input id="username" value="" type="number" class="form-control radius" name="7"  required>
      </div>
      <br>
      <!--   <label>Harga Total</label>
<div class="input-group b radius">
<span class="input-group-addon radius"><i class="fa fa-dollar"></i></span>   
<input id="username" value="" type="number" class="form-control radius" name="8"  required readonly>
</div>
<br> -->
      <label>Tempat Pemasangan
      </label>
      <div class="input-group b radius">
        <span class="input-group-addon radius">
          <i class="fa fa-map-marker">
          </i>
        </span>   
        <input id="username" value="" type="text" class="form-control radius" name="9"  required>
      </div>
      <br>
      <label>Keterangan
      </label>
      <div class="input-group b radius">
        <textarea name="10" id="input" class="form-control" rows="3" required="required">
        </textarea>
      </div>
      <br>
      </div>
  </div>
  <br>
  <br>
  <div class="modal-footer ">
    <button type="submit"  class="button" style="background-color: #f44336">
      <span class=" fa fa-floppy-o"> Simpan
        </button> 
      <a class="button " href="<?php echo site_url('pengeluaran/viewpengeluaran'); ?>" role="button" style="background-color: #f44336">Batal
      </a>
      </div>
    <br> 
    </form>
  <br>
  <br>
  <br>
  <br>
