</div>
<!-- Modal Tambah biaya -->
<div class="modal fade mod" id="tambahbiaya" role="dialog">
  <div class="modal-dialog mod">
    <!-- Modal content-->
    <div class="modal-content mod">
      <div class="modal-header ">
        <button type="button" class="close" data-dismiss="modal">&times;
        </button>
        <h4 class="modal-title">Tambah Biaya
        </h4>
      </div>
      <div class="modal-body">
        <form action=" <?php echo base_url('index.php/pegawaiController/tambahbiaya');?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Jenis Pengeluaran
            </label>
            <input type="text" name="1" id="input" class="form-control radius" value="" required="required"  title="">
            <label>Nominal
            </label>
            <input type="number" name="2" id="input" class="form-control radius" value="" required="required"  title="">
            <!--               <input type="hidden" name="3" id="input3" class="form-control" value="<?php
date_default_timezone_set('Asia/Jakarta');
$tanggal = date("d/m/Y");
$jam = date("H:i:s");
echo $tanggal ;
?>"> -->
            <label>Tanggal Pengeluaran
            </label>
            <input type="date" name="3" id="input" class="form-control radius" value="" required="required"  title="">
            <label>Keterangan
            </label>
            <textarea name="4" id="input3" class="form-control" rows="3" required="required">
            </textarea>
          </div>
          </div>
        <div class="modal-footer ">
          <button type="submit"  class="button" style="background-color: #f44336">
            <span class=" fa fa-floppy-o"> Simpan
              </button> 
            <button type="button" class="button" data-dismiss="modal">batal
            </button>
            </div>
          </form>
      </div>
    </div>
  </div>
  <!-- Modal Tambah layanan -->
  <div class="modal fade mod" id="tambahlayanan" role="dialog">
    <div class="modal-dialog mod">
      <!-- Modal content-->
      <div class="modal-content mod">
        <div class="modal-header ">
          <button type="button" class="close" data-dismiss="modal">&times;
          </button>
          <h4 class="modal-title">Tambah layanan
          </h4>
        </div>
        <div class="modal-body">
          <form action=" <?php echo base_url('index.php/pegawaiController/tambahlayanan');?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Nama
              </label>
              <input type="text" name="1" id="input" class="form-control radius" value="" required="required"  title="">
              <label>Harga
              </label>
              <input type="number" name="2" id="input" class="form-control radius" value="" required="required"  title="">
              <input type="checkbox" name="4" value="ppn"> PPN
              <br>
              <label>Biaya Instal
              </label>
              <input type="number" name="3" id="input" class="form-control radius" value="" required="required"  title="">
            </div>
            </div>
          <div class="modal-footer ">
            <button type="submit"  class="button" style="background-color: #f44336">
              <span class=" fa fa-floppy-o"> Simpan
                </button> 
              <button type="button" class="button" data-dismiss="modal">batal
              </button>
              </div>
            </form>
        </div>
      </div>
    </div>
    <!-- Modal Tambah pelanggan -->
    <div class="modal fade mod" id="tambahpelanggan" role="dialog">
      <div class="modal-dialog mod">
        <!-- Modal content-->
        <div class="modal-content mod">
          <div class="modal-header ">
            <button type="button" class="close" data-dismiss="modal">&times;
            </button>
            <h4 class="modal-title">Tambah Pelanggan
            </h4>
          </div>
          <div class="modal-body">
            <form action=" <?php echo base_url('index.php/pegawaiController/tambah');?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Nama
                </label>
                <input type="text" name="1" id="input" class="form-control radius" value="" required="required"  title="">
                <label>Alamat
                </label>
                <input type="text" name="2" id="input" class="form-control radius" value="" required="required"  title="">
                <label>Telepon
                </label>
                <input type="number" name="3" id="input" class="form-control radius" value="" required="required"  title="">
                <label>Email
                </label>
                <input type="email" name="4" id="input" class="form-control radius" value="" required="required"  title="">
                <!--  <label>Piutang</label>
<input type="number" name="5" id="input" class="form-control radius" value="<?php echo 0; ?>" required="required"  title="" readonly>
-->
              </div>
              </div>
            <div class="modal-footer ">
              <button type="submit"  class="button" style="background-color: #f44336">
                <span class=" fa fa-floppy-o"> Simpan
                  </button> 
                <button type="button" class="button" data-dismiss="modal">batal
                </button>
                </div>
              </form>
          </div>
        </div>
      </div>
      <!-- Modal konfirmasi hapus -->
      <div class="modal fade mod" id="delete" role="dialog">
        <div class="modal-dialog mod">
          <!-- Modal content-->
          <div class="modal-content mod">
            <div class="modal-header ">
              <button type="button" class="close" data-dismiss="modal">&times;
              </button>
              <h4 class="modal-title">Konfirmasi
              </h4>
            </div>
            <div class="modal-body">
              <p>tetap ingin menghapus MTR
                <?php echo 
$mtr->motor_kode;?>?
              </p>
            </div>
            <div class="modal-footer ">
              <a href="<?php echo site_url('pegawaiController/deletemotor/'.$mtr->motor_kode);?>"  class="button" style="background-color: #f44336" >  Hapus
              </a>
              <button type="button" class="button" data-dismiss="modal">batal
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal pemasukan-->
      <div class="modal fade mod" id="myModal" role="dialog">
        <div class="modal-dialog mod">
          <!-- Modal content-->
          <div class="modal-content mod" style="margin-top:161px">
            <div class="modal-header ">
              <button type="button" class="close" data-dismiss="modal" >&times;
              </button>
              <h4 class="modal-title">Komponen
              </h4>
            </div>
            <div class="modal-body">
              <table style="width:100%">
                <tr>
                  <td> 
                    <p>&nbsp&nbsp&nbsp&nbsp1. Input Pemasukan&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    </p>
                  </td>
                  <td class=""> 
                    <div class="dropdown">
                      <a href="<?php echo site_url('pemasukan/viewpemasukan');?>" class="button" type="button"  style="background-color: #008CBA">Pilih
                      </a>
                    </div>
                  </td>
                </tr>
              </table>
              <br>
              <table style="width:100%">
                <tr>
                  <td> 
                    <p>&nbsp&nbsp&nbsp&nbsp2. Piutang&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    </p>
                  </td>
                  <td>
                    <div class="dropdown">
                      <a href="#" class="button " type="button"  style="background-color: #008CBA">Pilih
                      </a>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
            <div class="modal-footer ">
            </div>
          </div>
        </div>
      </div>
      <!-- Modal keluar-->
      <div class="modal fade mod" id="myModalout" role="dialog">
        <div class="modal-dialog mod">
          <!-- Modal content-->
          <div class="modal-content mod">
            <div class="modal-header ">
              <button type="button" class="close" data-dismiss="modal">&times;
              </button>
              <h4 class="modal-title">Konfirmasi
              </h4>
            </div>
            <div class="modal-body">
              <p>tetap ingin keluar ?
              </p>
            </div>
            <div class="modal-footer ">
              <a href="<?php echo site_url('LoginControl/logout'); ?>"  class="button" style="background-color: #f44336" >  iya
              </a>
              <button type="button" class="button" data-dismiss="modal">batal
              </button>
            </div>
          </div>
        </div>
      </div>
      <script>
        $("a[href='#top']").click(function() {
          $("html, body").animate({
            scrollTop: 0 }
                                  , "slow");
          return false;
        }
                                 );
      </script>
      <script>
        function startTime() {
          var today = new Date();
          var h = today.getHours();
          var m = today.getMinutes();
          var s = today.getSeconds();
          m = checkTime(m);
          s = checkTime(s);
          document.getElementById('txt').innerHTML =
            h + ":" + m + ":" + s;
          var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
          if (i < 10) {
            i = "0" + i};
          // add zero in front of numbers < 10
          return i;
        }
      </script>
      </section>
    <!-- /.content -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Simple Point of System
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2017 
        <a href="http://www.cims.co.id/">www.cims.co.id
        </a>.
      </strong> 
    </footer>
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
  <!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
</div>
<!-- ./wrapper -->
<!-- REQUIRED JS SCRIPTS -->
<!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience. -->
</body>
</html>
