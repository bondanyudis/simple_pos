<table class="" style="width:100%">
  <tr>
    <td style="width:100%">
      <h3 class="up" >Pengeluaran 
      </h3>
    </td>
    <td> 
      <a class="btn btn-default btn-circle"   href="<?php echo site_url('pengeluaran/viewtambahpengeluaran'); ?>" role="button">
        <i class="fa fa-plus" aria-hidden="true">
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
</ol>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-list">
    </i>
  </div>
  <div class="update-text">
    <label>Daftar Pengeluaran
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
              <th>Nama
              </th>
              <th>Tanggal
              </th>
              <th>Proyek
              </th>
              <!--     <th>Mulai</th> -->
              <th>Perangkat
              </th>
              <th>Jml
              </th>
              <th>Satuan
              </th>
              <th>Harga
              </th>
              <th>Total
              </th>
              <th>Tempat Pemasangan
              </th>
              <th>Aksi
              </th>
            </tr>
          </thead>
          <tbody>
            <?php 
$no = $offset;
foreach ($pengeluaran as $pen) { ?>
            <tr>
              <td>
                <?php echo  ++$no?>
              </td>
              <td>
                <?php echo $pen->nm_pelanggan;?>
              </td>
              <td>  
                <?php echo 
date("d-m-Y",strtotime($pen->tgl_pengeluaran));?>
              </td>
              <td>
                <?php echo $pen->pekerjaan;?>
              </td>
              <td>
                <?php echo $pen->perangkat;?>
              </td>
              <td>
                <?php echo $pen->jml;?>
              </td>
              <td>
                <?php echo $pen->satuan;?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pen->hrg_satuan);?>
              </td>
              <td>
                <?php echo "Rp.".number_format($pen->hrg_total);?>
              </td>
              <td>
                <?php echo $pen->tmpt_pemasangan;?>
              </td>
              <td>
                <a  href="<?php echo site_url('pengeluaran/editpengeluaran/'.$pen->id_pengeluaran);?>"  class="button" style="background-color: #008CBA">
                  <span class=" fa fa-pencil-square-o">
                  </span> Edit
                </a>
                <br>
                <a  href="<?php echo site_url('pengeluaran/deletepengeluaran/'.$pen->id_pengeluaran);?>"  class="button" style="background-color: #f44336">
                  <span class=" fa fa-trash-o">
                  </span> Delete
                </a>
                <!-- <a href="<?php echo site_url('adminController/deleteUser/'.$pegawai->id);?>"  class="button" style="background-color: #f44336" >  <span class=" glyphicon glyphicon-trash"></span> Delete</a> -->
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>
