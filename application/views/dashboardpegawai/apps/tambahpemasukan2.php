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
  <li class="active">Pilih Layanan
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
  <div class="update-text">Pilih Layanan
  </div>
</div>
<div class="container-fluid">
  <br>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  }
                   );
</script>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td>
        <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
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
              <th>Tindakan
              </th>
            </tr>
          </thead>
          <tbody>
            <?php 
$no=$offset;
foreach ($layanan as $lyn) { ?>
            <tr>
              <td>
                <?php echo  ++$no?>
              </td>
              <td>LYN
                <?php echo $lyn->id_layanan;?>
              </td>
              <td>
                <?php echo $lyn->nama;?>
              </td>
              <td>
                <?php echo "Rp.".number_format($lyn->harga);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($lyn->ppn);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($lyn->biaya_instal);?>
              </td>
              <td>
                <a class="button2" href="<?php echo site_url('pemasukan/viewtambahpemasukan3/'.$lyn->id_layanan.'/'.$pelanggan->id_pelanggan); ?>">Pilih
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
