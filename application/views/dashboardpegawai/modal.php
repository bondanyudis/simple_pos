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
