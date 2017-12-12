<table class="" style="width:30%">
  <tr>
    <td>
      <h3 class="up" >Laporan Keuangan  
      </h3>
    </td>
  </tr>
</table>
<ol class="breadcrumb radius">
  <li>
    <a href="<?php echo site_url('LoginControl/validateUser'); ?>">
      <span class="fa fa-home">
      </span>
    </a>
  </li>
  <li class="active">Laporan
  </li>
</ol>
<form action="<?php echo site_url('laporan/viewlaporan/'.'1'); ?>" method="post" enctype="multipart/form-data">
  <label>Filter
  </label>
  <div class="input-group col-md-3">
    <!-- mengubab input text menjadi select -->
    <select name="cari" id="input" class="form-control" required="required">
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      <option value="2016">2016</option>
      <option value="2017">2017</option>
    </select>
  <!-- mengubah input text menjadi select -->
    <span class="input-group-btn">
      <button class="btn btn-info" type="submit">
        <span class=" glyphicon glyphicon-search">
        </span>
      </button>
    </span>
  </div>
</form>
<div id="container" style="width :100%; height: 400px; margin: 0 auto">
</div>
<?php  
//pengeluaran---------------------------------------------
$totaljan = 0;
foreach ($pengeluaranjan as $pengjan) { 
$totaljan = $totaljan + $pengjan->hrg_total;
}
$totalfeb = 0;
foreach ($pengeluaranfeb as $pengfeb) { 
$totalfeb = $totalfeb + $pengfeb->hrg_total;
}
$totalmar = 0;
foreach ($pengeluaranmar as $pengmar) { 
$totalmar = $totalmar + $pengmar->hrg_total;
}
$totalapr = 0;
foreach ($pengeluaranapr as $pengapr) { 
$totalapr = $totalapr + $pengapr->hrg_total;
}
$totalmei = 0;
foreach ($pengeluaranmei as $pengmei) { 
$totalmei = $totalmei + $pengmei->hrg_total;
}
$totaljuni = 0;
foreach ($pengeluaranjuni as $pengjuni) { 
$totaljuni = $totaljuni + $pengjuni->hrg_total;
}
$totaljuli = 0;
foreach ($pengeluaranjuli as $pengjuli) { 
$totaljuli = $totaljuli + $pengjuli->hrg_total;
}
$totalagus = 0;
foreach ($pengeluaranagus as $pengagus) { 
$totalagus = $totalagus + $pengagus->hrg_total;
}
$totalsep = 0;
foreach ($pengeluaransep as $pengsep) { 
$totaljsep = $totalsep + $pengsep->hrg_total;
}
$totalokt = 0;
foreach ($pengeluaranokt as $pengokt) { 
$totalokt = $totalokt + $pengokt->hrg_total;
}
$totalnov = 0;
foreach ($pengeluarannov as $pengnov) { 
$totalnov = $totalnov + $pengnov->hrg_total;
}
$totaldes = 0;
foreach ($pengeluarandes as $pengdes) { 
$totaldes = $totaldes + $pengdes->hrg_total;
}
//pemasukan---------------------------------------------
$totalpjan = 0;
foreach ($pemasukanjan as $pemjan) { 
$totalpjan = $totalpjan + $pemjan->bayar;
}
$totalpfeb = 0;
foreach ($pemasukanfeb as $pemfeb) { 
$totalpfeb = $totalpfeb + $pemfeb->bayar;
}
$totalpmar = 0;
foreach ($pemasukanmar as $pemmar) { 
$totalpmar = $totalpmar + $pemmar->bayar;
}
$totalpapr = 0;
foreach ($pemasukanapr as $pemapr) { 
$totalpapr = $totalpapr + $pemapr->bayar;
}
$totalpmei = 0;
foreach ($pemasukanmei as $pemmei) { 
$totalpmei = $totalpmei + $pemmei->bayar;
}
$totalpjuni = 0;
foreach ($pemasukanjuni as $pemjuni) { 
$totalpjuni = $totalpjuni + $pemjuni->bayar;
}
$totalpjuli = 0;
foreach ($pemasukanjuli as $pemjuli) { 
$totalpjuli = $totalpjuli + $pemjuli->bayar;
}
$totalpagus = 0;
foreach ($pemasukanagus as $pemagus) { 
$totalpagus = $totalpagus + $pemagus->bayar;
}
$totalpsep = 0;
foreach ($pemasukansep as $pemsep) { 
$totalpsep = $totalpsep + $pemsep->bayar;
}
$totalpokt = 0;
foreach ($pemasukanokt as $pemokt) { 
$totalpokt = $totalpokt + $pemokt->bayar;
}
$totalpnov = 0;
foreach ($pemasukannov as $pemnov) { 
$totalpnov = $totalpnov + $pemnov->bayar;
}
$totalpdes = 0;
foreach ($pemasukandes as $pemdes) { 
$totalpdes = $totalpdes + $pemdes->bayar;
}
//piutang---------------------------------------------
$totalpijan = 0;
foreach ($pemasukanjan as $pemjan) { 
$totalpijan = $totalpijan + $pemjan->piutang;
}
$totalpifeb = 0;
foreach ($pemasukanfeb as $pemfeb) { 
$totalpifeb = $totalpifeb + $pemfeb->piutang;
}
$totalpimar = 0;
foreach ($pemasukanmar as $pemmar) { 
$totalpimar = $totalpimar + $pemmar->piutang;
}
$totalpiapr = 0;
foreach ($pemasukanapr as $pemapr) { 
$totalpiapr = $totalpiapr + $pemapr->piutang;
}
$totalpimei = 0;
foreach ($pemasukanmei as $pemmei) { 
$totalpimei = $totalpimei + $pemmei->piutang;
}
$totalpijuni = 0;
foreach ($pemasukanjuni as $pemjuni) { 
$totalpijuni = $totalpijuni + $pemjuni->piutang;
}
$totalpijuli = 0;
foreach ($pemasukanjuli as $pemjuli) { 
$totalpijuli = $totalpijuli + $pemjuli->piutang;
}
$totalpiagus = 0;
foreach ($pemasukanagus as $pemagus) { 
$totalpiagus = $totalpiagus + $pemagus->piutang;
}
$totalpisep = 0;
foreach ($pemasukansep as $pemsep) { 
$totalpisep = $totalpisep + $pemsep->piutang;
}
$totalpiokt = 0;
foreach ($pemasukanokt as $pemokt) { 
$totalpiokt = $totalpiokt + $pemokt->piutang;
}
$totalpinov = 0;
foreach ($pemasukannov as $pemnov) { 
$totalpinov = $totalpinov + $pemnov->piutang;
}
$totalpides = 0;
foreach ($pemasukandes as $pemdes) { 
$totalpides = $totalpides + $pemdes->piutang;
}
//biaya---------------------------------------------
$totalbjan = 0;
foreach ($biayajan as $bjan) { 
$totalbjan = $totalbjan + $bjan->nominal;
}
$totalbfeb = 0;
foreach ($biayafeb as $bfeb) { 
$totalbfeb = $totalbfeb + $bfeb->nominal;
}
$totalbmar = 0;
foreach ($biayamar as $bmar) { 
$totalbmar = $totalbmar + $bmar->nominal;
}
$totalbapr = 0;
foreach ($biayaapr as $bapr) { 
$totalbapr = $totalbapr + $bapr->nominal;
}
$totalbmei = 0;
foreach ($biayamei as $bmei) { 
$totalbmei = $totalbmei + $bmei->nominal;
}
$totalbjuni = 0;
foreach ($biayajuni as $bjuni) { 
$totalbjuni = $totalbjuni + $bjuni->nominal;
}
$totalbjuli = 0;
foreach ($biayajuli as $bjuli) { 
$totalbjuli = $totalbjuli + $bjuli->nominal;
}
$totalbagus = 0;
foreach ($biayaagus as $bagus) { 
$totalbagus = $totalbagus + $bagus->nominal;
}
$totalbsep = 0;
foreach ($biayasep as $bsep) { 
$totalbsep = $totalbsep + $bsep->nominal;
}
$totalbokt = 0;
foreach ($biayaokt as $bokt) { 
$totalbokt = $totalbokt + $bokt->nominal;
}
$totalbnov = 0;
foreach ($biayanov as $bnov) { 
$totalbnov = $totalbnov + $bnov->nominal;
}
$totalbdes = 0;
foreach ($biayades as $bdes) { 
$totalbdes = $totalbdes + $bdes->nominal;
}
?>
<script type="text/javascript">
  Highcharts.chart('container', {
    chart: {
      type: 'column'
    }
    ,
    title: {
      text: 'Chart Keuangan <?php echo $tahun; ?>'
    }
    ,
    subtitle: {
      text: 'PT Citra Media Solusindo'
    }
    ,
    xAxis: {
      categories: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'Mei',
        'Jun',
        'Jul',
        'Ags',
        'Sep',
        'Okt',
        'Nov',
        'Des'
      ],
      crosshair: true
    }
    ,
    yAxis: {
      min: 0,
      title: {
        text: '(Rupiah)'
      }
    }
    ,
    tooltip: {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
      '<td style="padding:0"><b>Rp. {point.y} </b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
    }
    ,
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    }
    ,
    series: [{
      name: 'Pemasukan',
      data: [<?php echo $totalpjan;
             ?>, <?php echo $totalpfeb;
             ?>, <?php echo $totalpmar;
             ?>, <?php echo $totalpapr;
             ?>, <?php echo $totalpmei;
             ?>, <?php echo $totalpjuni;
             ?>, <?php echo $totalpjuli;
             ?>, <?php echo $totalpagus;
             ?>, <?php echo $totalpsep;
             ?>, <?php echo $totalpokt;
             ?>, <?php echo $totalpnov;
             ?>, <?php echo $totalpdes;
             ?>]
    }
             , {
               name: 'Biaya',
               data: [<?php echo $totalbjan;
                      ?>, <?php echo $totalbfeb;
                      ?>, <?php echo $totalbmar;
                      ?>, <?php echo $totalbapr;
                      ?>, <?php echo $totalbmei;
                      ?>, <?php echo $totalbjuni;
                      ?>, <?php echo $totalbjuli;
                      ?>, <?php echo $totalbagus;
                      ?>, <?php echo $totalbsep;
                      ?>, <?php echo $totalbokt;
                      ?>, <?php echo $totalbnov;
                      ?>, <?php echo $totalbdes;
                      ?>]
             }
             , {
               name: 'Pengeluaran',
               data: [<?php echo $totaljan;
                      ?>, <?php echo $totalfeb;
                      ?>, <?php echo $totalmar;
                      ?>, <?php echo $totalapr;
                      ?>, <?php echo $totalmei;
                      ?>, <?php echo $totaljuni;
                      ?>, <?php echo $totaljuli;
                      ?>, <?php echo $totalagus;
                      ?>, <?php echo $totalsep;
                      ?>, <?php echo $totalokt;
                      ?>, <?php echo $totalnov;
                      ?>, <?php echo $totaldes;
                      ?>]
             }
            ]
  }
                  );
</script>
<!-- </div> -->
<br>
<br>
<br>
<br>
<div class="update-nag">
  <div class="update-split">
    <i class="glyphicon glyphicon-list">
    </i>
  </div>
  <div class="update-text">
    <label>Daftar Keuangan Tahun 
      <?php echo $tahun; ?>
    </label> 
  </div>
</div>
<br>
<div class="container-fluid" >
  <br>
  <div class="table-responsive">
    <table id="printTable" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Bulan
          </th>
          <th>Pemasukan
          </th>
          <th>Pengeluaran
          </th>
          <th>Biaya
          </th>
          <th>Piutang Pelanggan
          </th>
          <th>Keuntungan
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Januari
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpjan);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totaljan);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbjan);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpijan);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpjan-($totaljan+$totalbjan));?>
          </td>
        </tr>
        <tr>
          <td>Februari
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpfeb);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalfeb);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbfeb);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpifeb);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpfeb-($totalfeb+$totalbfeb));?>
          </td>
        </tr>
        <tr>
          <td>Maret
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpmar);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalmar);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbmar);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpimar);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpmar-($totalmar+$totalbmar));?>
          </td>
        </tr>
        <tr>
          <td>April
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpapr);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalapr);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbapr);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpiapr);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpapr-($totalapr+$totalbapr));?>
          </td>
        </tr>
        <tr>
          <td>Mei
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpmei);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalmei);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbmei);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpimei);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpmei-($totalmei+$totalbmei));?>
          </td>
        </tr>
        <tr>
          <td>Juni
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpjuni);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totaljuni);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbjuni);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpijuni);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpjuni-($totaljuni+$totalbjuni));?>
          </td>
        </tr>
        <tr>
          <td>Juli
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpjuli);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totaljuli);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbjuli);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpijuli);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpjuli-($totaljuli+$totalbjuli));?>
          </td>
        </tr>
        <tr>
          <td>Agustus
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpagus);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalagus);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbagus);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpiagus);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpagus-($totalagus+$totalbagus));?>
          </td>
        </tr>
        <tr>
          <td>September
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpsep);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalsep);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbsep);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpisep);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpsep-($totalsep+$totalbsep));?>
          </td>
        </tr>
        <tr>
          <td>Oktober
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpokt);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalokt);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbokt);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpiokt);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpokt-($totalokt+$totalbokt));?>
          </td>
        </tr>
        <tr>
          <td>November
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpnov);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalnov);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbnov);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpinov);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpnov-($totalnov+$totalbnov));?>
          </td>
        </tr>
        <tr>
          <td>Desember
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpdes);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totaldes);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalbdes);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpides);?>
          </td>
          <td>
            <?php echo "Rp. ".number_format($totalpdes-($totaldes+$totalbdes));?>
          </td>
        </tr>
        <!--   <tr>
<td><strong>Total</strong></td>
<td><?php echo "Rp. ".number_format($totalpdes);?></td>
<td></td>
<td><?php echo "Rp. ".number_format($totalbdes);?></td>
<td></td>
<td></td>
</tr> -->
      </tbody>
    </table>
  </div>
</div>
