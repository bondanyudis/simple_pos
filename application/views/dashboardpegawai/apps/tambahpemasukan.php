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
  <li class="active">Pilih Pelanggan
  </li>
</ol>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-plus-sign">
    </i>
  </div>
  <div class="update-text">Pilih Pelanggan
  </div>
</div>
<div class="container-fluid">
  <br>
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
              <th>Alamat
              </th>
              <th>Telepon
              </th>
              <th>Email
              </th>
              <!--       <th>Piutang</th> -->
              <th>Tindakan
              </th>
            </tr>
          </thead>
          <tbody>
            <?php 
$no=$offset;
foreach ($pelanggan as $plg) { ?>
            <tr>
              <td>
                <?php echo  ++$no?>
              </td>
              <td>PLG
                <?php echo $plg->id_pelanggan;?>
              </td>
              <td>
                <?php echo $plg->nm_pelanggan;?>
              </td>
              <td>
                <?php echo $plg->alamat;?>
              </td>
              <td>
                <?php echo $plg->notelp;?>
              </td>
              <td>
                <?php echo $plg->email;?>
              </td>
              <!--       <td>Rp. <?php echo $plg->piutang;?></td> -->
              <td>
                <a class="button2" href="<?php echo site_url('pemasukan/viewtambahpemasukan2/'.$plg->id_pelanggan); ?>">Pilih
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
