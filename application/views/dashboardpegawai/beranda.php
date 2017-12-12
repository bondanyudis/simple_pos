<!DOCTYPE html>
<html>
  <head>
    <title>Accounting and Finance
    </title>
    <script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.js');?>">
    </script>
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap-theme.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/skin-blue.min.css');?>">
    <link href="<?php echo base_url('asset/link/bootstrap.min.css');?>" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url('asset/link/jquery.min.js');?>">
    </script>
    <script src="<?php echo base_url('asset/link/bootstrap.min.js');?>">
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/css.css');?>">
    <link href="<?php echo base_url('asset/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/code/highcharts.js');?>">
    </script>
    <script src="<?php echo base_url('asset/code/modules/exporting.js'); ?>">
    </script>
    <script src="<?php echo base_url('asset/link/numeral.min.js');?>">
    </script>
    <script src="<?php echo base_url('asset/link/jquery-1.12.4.js');?>">
    </script>
    <script src="<?php echo base_url('asset/link/jquery.dataTables.min.js');?>">
    </script>
    <script src="<?php echo base_url('asset/link/dataTables.bootstrap.min.js');?>">
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/link/dataTables.bootstrap.min.css');?>">
    <script type="text/javascript" src="<?php echo base_url('asset/bootstrap/js/bootstrap.js');?>">
    </script>
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('asset/bootstrap/css/bootstrap-theme.min.css');?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/skins/skin-blue.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/css.css');?>">
    <link href="<?php echo base_url('asset/font-awesome-4.7.0/css/font-awesome.min.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/code/highcharts.js');?>">
    </script>
    <script src="<?php echo base_url('asset/code/modules/exporting.js'); ?>">
    </script>
  </head>
  <style type="text/css">
    .panel-a{
      background:#282828;
      opacity: 0.9;
    }
    .panel-blue{
      background:#5bc0de;
    }
    .panel-tw{
      background:#5bc0de;
    }
    .panel-fb {
      background:#3b5998    
    }
    .panel-in{
      background:#5cb85c;
    }
    .panel-content .fa {
      color:#ffffff;
    }
    .modal-content{
      -webkit-box-shadow: 0 5px 15px rgba(0,0,0,0);
      -moz-box-shadow: 0 5px 15px rgba(0,0,0,0);
      -o-box-shadow: 0 5px 15px rgba(0,0,0,0);
      box-shadow: 0 5px 15px rgba(0,0,0,0);
    }
    .panel-dl{
      background:#428bca;
    }
    .panel-content p{
      font-weight:bold !important;
      color:#FFFFFF;
    }
    .row-no-gutter {
      margin-right: 0;
      margin-left: 0;
    }
    .row-no-gutter [class*="col-"] {
      padding-right: 0;
      padding-left: 0;
    }
    .notice {
      padding: 15px;
      background-color: #fafafa;
      border-left: 6px solid #7f7f84;
      margin-bottom: 10px;
      -webkit-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
      -moz-box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
      box-shadow: 0 5px 8px -6px rgba(0, 0, 0, .2);
    }
    .notice-sm {
      padding: 10px;
      font-size: 80%;
    }
    .notice-lg {
      padding: 35px;
      font-size: large;
    }
    .notice-success {
      border-color: #80D651;
    }
    .notice-success>strong {
      color: #80D651;
    }
    .notice-info {
      border-color: #45ABCD;
    }
    .notice-info>strong {
      color: #45ABCD;
    }
    .notice-warning {
      border-color: #FEAF20;
    }
    .notice-warning>strong {
      color: #FEAF20;
    }
    .notice-danger {
      border-color: #d73814;
    }
    .notice-danger>strong {
      color: #d73814;
    }
    .btn-circle {
      width: 36px;
      height: 36px;
      text-align: center;
      padding: 9px 0;
      font-size: 12px;
      line-height: 1.428571429;
      border-radius: 18px;
    }
  </style>
  <body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
        <!-- Logo -->
        <nav href="" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">
            <i class="fa fa-refresh fa-spin fa-1x fa-fw" aria-hidden="true">
            </i>
          </span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <b>Point of System
            </b>
          </span>
        </nav>
        <!-- Header Navbar -->
        <nav class="navbar navbar-fixed-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button" style="text-decoration:none">
            <span class="sr-only">Toggle navigation
            </span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="<?php echo site_url('pegawaiController/viewpanduan'); ?>" >
                  <i class="fa fa-question-circle " aria-hidden="true">
                  </i> Help
                </a>
              </li>
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="" data-toggle="modal" data-target="#myModalout">
                  <span class="glyphicon glyphicon-log-out">
                  </span> Logout
                </a>
              </li>
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>
        <br>
        <br>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar ">
          <br>
          <div class="user-panel">
            <img src="<?php echo base_url('asset/img/aaa.png');?>"  alt="Cinque Terre"  height="95" style="margin-left:9px " >
            <br>
          </div>
          <br>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Time 
              <div class="jam" id="txt" >
              </div>
            </li>
            <!-- Optionally, you can add icons to the links -->
            <li  
                <?php if($ha == '1'){ ?>
            class="active"
            <?php } ?>>
            <a href="<?php echo site_url('LoginControl/validateUser'); ?>">
              <i class="fa fa-home">
              </i> 
              <span>Beranda
              </span>
            </a>
            </li>
          <li  
              <?php if($ha == '2'){ ?>
          class="active"
          <?php } ?>>
          <a href="<?php echo site_url('laporan/viewlaporan/'.'2017'); ?>">
            <i class="fa fa-bar-chart ">
            </i> 
            <span>Laporan
            </span>
          </a>
          </li>
        <li  
            <?php if($ha == '3'){ ?>
        class="active"
        <?php } ?>>
        <a href="<?php echo site_url('pemasukan/viewpemasukan');?>">
          <i class="fa fa-money">
          </i> 
          <span>Pemasukan
          </span>
        </a>
        </li>
      <li  
          <?php if($ha == '4'){ ?>
      class="active"
      <?php } ?>>
      <a href="<?php echo site_url('pengeluaran/viewpengeluaran'); ?>">
        <i class="fa fa-shopping-bag">
        </i> 
        <span>Pengeluaran
        </span>
      </a>
      </li>
    
  <!-- class="active" -->
  </ul>
<!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-fluid" style="">
    <br>    
    <h3 class="up" >Dashboard
    </h3>
    <ol class="breadcrumb radius">
      <li>
        <a href="">
          <span class="fa fa-home">
          </span> Beranda
        </a>
      </li>
      <!-- <li class="active">Penjualan</li> -->
      <!-- <li class="active">Cash</li> -->
    </ol>
    <div class="notice notice-info">
      <strong>Informasi 
      </strong>  Kunjungi 
      <a class="" href="http://www.cims.co.id" role="">www.cims.co.id
      </a>  
    </div>
    <br>
    
    
    
    <div class="col-md-4">
      <div class="panel panel-default ">
        <div class="panel-body panel-in panel-content">
          <div class="col-xs-5">
            <i class="fa fa-money fa-5x">
            </i>
          </div>
          <div class="col-xs-5 text-right">
            <i class="fa fa-arrow-circle-right">
            </i>
            <p class="alerts-heading tex" style="font-size:15px">
              <?php
$pemasukan = 0;
foreach($jumpemasukan as $roww){
$pemasukan += $roww->bayar;
}
echo "Rp.".number_format($pemasukan);
?>
            </p>
            <p class="alerts-text tex">Total Pemasukan
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default ">
        <div class="panel-body panel-dl panel-content">
          <div class="col-xs-5">
            <i class="fa fa-shopping-bag fa-5x">
            </i>
          </div>
          <div class="col-xs-5 text-right">
            <i class="fa fa-arrow-circle-right">
            </i>
            <p class="alerts-heading tex" style="font-size:15px">
              <?php
$sum = 0;
$sum2 = 0;
foreach($jumpengeluaran as $row){
$sum += $row->hrg_total;
}
foreach($jumbiaya as $row2){
$sum2 += $row2->nominal;
}
$pengeluaran = $sum + $sum2;
echo "Rp.".number_format($pengeluaran);
?>
            </p>
            <p class="alerts-text tex">Total Pengeluaran
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="panel panel-default " style=" background:#5bc0de">
        <div class="panel-body panel-a panel-content">
          <div class="col-xs-5">
            <i class="fa fa-dollar fa-5x">
            </i>
          </div>
          <div class="col-xs-5 text-right">
            <i class="fa fa-arrow-circle-right">
            </i>
            <p class="alerts-heading tex" style="font-size:15px">
              <?php echo "Rp.".number_format($pemasukan - $pengeluaran); ?>
            </p>
            <p class="alerts-text tex">Total Keuntungan
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>">
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js');?>">
  </script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('dist/js/adminlte.min.js');?>">
  </script>
  <?php include 'modal.php'; ?>  
  <!-- Main content -->
