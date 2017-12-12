<table class="" style="width:100%">
  <tr>
    <td style="width:100%">
      <h3 class="up" >Pengeluaran
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
<form action="<?php echo base_url('index.php/pengeluaran/editpenge/'.$pengeluaran->id_pengeluaran);?>" method="post" enctype="multipart/form-data">
  <ol class="breadcrumb radius">
    <li>
      <a href="<?php echo site_url('LoginControl/validateUser'); ?>">
        <span class="fa fa-home">
        </span>
      </a>
    </li>
    <li class="active">Pengeluaran
    </li>
    <li class="active">Edit Pengluaran
    </li>
  </ol>
  <table class="table table-bordered" style="width:500px;margin-left:0%;">
    <thead class="a">
      <tr>
        <th>
      </span> Edit Pengeluaran
      </th>
    </tr>
  </thead>
<tbody>
  <tr>
    <td>
      <div class="container-fluid">
        <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
          <!-- <?php echo base_url('index.php/adminController/edit/'.$member->id);?>" -->
          <div class="form-group">
            <label>Nama pelanggan
            </label>
            <input value="<?php echo
                          $pengeluaran->nm_pelanggan;?>" type="text" name="1" id="input" class="form-control radius" value="" required="required"  title="">
            <label>tanggal pengeluaran
            </label>
            <input value="<?php echo 
                          $pengeluaran->tgl_pengeluaran;?>" type="date" name="2" id="input" class="form-control radius" value="" required="required"  title="">
            <label>Nama Proyek
            </label>
            <input value="<?php echo 
                          $pengeluaran->pekerjaan;?>" type="text" name="3" id="input" class="form-control radius" value="" required="required"  title="">
            <label>perangkat
            </label>
            <input value="<?php echo 
                          $pengeluaran->perangkat;?>" type="text" name="4" id="input" class="form-control radius" value="" required="required"  title="">
            <label>jumlah
            </label>
            <input value="<?php echo 
                          $pengeluaran->jml;?>" type="number" name="5" id="input" class="form-control radius" value="" required="required"  title="" >
            <label>satuan
            </label>
            <input value="<?php echo 
                          $pengeluaran->satuan;?>" type="text" name="6" id="input" class="form-control radius" value="" required="required"  title="" >
            <label>harga satuan
            </label>
            <input value="<?php echo 
                          $pengeluaran->hrg_satuan;?>" type="number" name="7" id="input" class="form-control radius" value="" required="required"  title="" >
            <label>tempat pemasangan
            </label>
            <input value="<?php echo 
                          $pengeluaran->tmpt_pemasangan;?>" type="text" name="8" id="input" class="form-control radius" value="" required="required"  title="" >
            <label>Keterangan
            </label>
            <textarea name="9" id="input9" class="form-control" rows="3" required="required">
              <?php echo $pengeluaran->ket;?>
            </textarea>
          </div>
          <button type="submit"  class="button " style="background-color: #4CAF50 ; margin-right:0px">
            <span class=" fa fa-floppy-o"> Simpan
              </button>
            </form>
        </div>
      </div>
    </td>
  </tr>
</tbody>
</table>
<br>
<br>
