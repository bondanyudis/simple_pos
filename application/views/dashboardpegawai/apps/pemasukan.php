<table class="" style="width:100%">
  <tr>
    <td style="width:100%">
      <h3 class="up" >Pemasukan 
      </h3>
    </td>
    <td> 
      <a class="btn btn-default btn-circle"   href="<?php echo site_url('pemasukan/viewtambahpemasukan2'); ?>" role="button">
        <span class="fa fa-plus">
        </span>
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
  <li class="active">Pemasukan
  </li>
</ol>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-list">
    </i>
  </div>
  <div class="update-text">
    <label>Daftar Pemasukan
    </label> 
  </div>
</div>
<table class="table table-bordered">
  <tbody>
    <tr>
      <td>
        <table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No
              </th>
              <th>tanggal bayar
              </th>
              <th>Nama pelanggan
              </th>
              <th>Nama Layanan
              </th>
              <!--    <th>Harga</th>
<th>PPN</th>
<th>Biaya Install</th> -->
              <th>Total Harga
              </th>
              <th>Pembayaran 
              </th>
              <th>Piutang
              </th>
              <th>keterangan
              </th>
              <th>Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php 
$no = $offset;
foreach ($pemasukan as $pem) { ?>
            <tr>
              <td>
                <?php echo  ++$no?>
              </td>
              <td>  
                <?php echo 
date("d F Y",strtotime($pem->tgl_bayar));?>
              </td>
              <td>
                <?php echo $pem->nm_pelanggan;?>
              </td>
              <td>
                <?php echo $pem->nm_layanan;?>
              </td>
              <!--   <td><?php echo "Rp.".number_format($pem->harga);?></td>
<td><?php echo "Rp.".number_format($pem->ppn);?></td>
<td><?php echo "Rp.".number_format($pem->biaya_instal);?></td>   -->
              <td>
                <?php echo "Rp.".number_format($pem->total_bayar);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pem->bayar);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pem->piutang);?>
              </td>
              <td>
                <?php echo $pem->ket;?>
              </td>
              <td>
                <?php
if ($pem->piutang != 0) { ?>
                <a href="<?php echo site_url('pemasukan/editpiutang/'.$pem->id_pemasukan);?>"  class="button" style="background-color: #008CBA" >
                  <span class=" fa fa-pencil-square-o">
                  </span> Piutang
                </a>
                <?php }else{
?>
                <a  href="<?php echo site_url('pemasukan/deletepemasukan/'.$pem->id_pemasukan);?>"  class="button" style="background-color: #f44336">
                  <span class=" fa fa-trash-o">
                  </span> Delete
                </a>
                <?php }   
?>
              </td>
              <!-- <a href="<?php echo site_url('pegawaiController/editpelanggan/'.$plg->id_pelanggan);?>" class="button" style="background-color: #008CBA"><span class=" fa fa-pencil-square-o"></span> Edit</a> -->
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
