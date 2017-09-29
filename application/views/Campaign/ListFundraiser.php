<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/adminlte/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/my-styles.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */

</style>
</head>
<body>
  <div class="wrapper">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <center><img src="<?php echo base_url()?>assets/images/popular_4.jpg" class="img" alt="User Image" style="width: 100%;"></center>
        <div class="user-panel" style="padding-top: 0;">
          <div>
            <center><h3 class="pumpkin">Ayo Bantu Adi</h3></center>
            <div class="row">
              <div class="col-md-9 col-xs-9" >
                <a href="<?php echo base_url()?>campaignpage" class="btn btn-block btn-danger btn-flat" >Lihat Detail</a>    
              </div>
              <div class="col-md-2 col-xs-2" style="margin-left: 0px; margin-right: 5px; padding-left: 0px; padding-right: 0px;">
                <a href="<?php echo base_url()?>campaign/editcampaign" class="btn btn-block btn-danger btn-flat"><i class="fa fa-edit"></i></a>                 
              </div>
              </div>
            <center><h5 class="pumpkin">Rp. 19.975.000</h5></center>
            <center><h5 class="pumpkin">dari target Rp. 19.975.000</h5></center>
            <hr>
          </div>
        </div>
      <ul class="sidebar-menu">
      <li>
          <a href="<?php echo base_url()?>Campaign">
            <i class="fa fa-dashboard"></i>Dashboard
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>Campaign/UpdateCampaign">
            <i class="fa fa-pencil-square-o"></i>Tulis Update
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url()?>profile/MyCampaign">
            <i class="fa fa-book"></i>List Donatur<i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Campaign/ListDonatur"><i class="fa fa-list-alt"></i>List Donatur</a></li>
            <li><a href="<?php echo base_url(); ?>Campaign/DonasiOffline"><i class="fa fa-sticky-note-o"></i>Donasi Offline</a></li>
          </ul>
        </li>
        <li class="current">
          <a href="<?php echo base_url()?>Campaign/ListFundraiser">
            <i class="fa fa-list"></i><span>List Fundraiser<span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      
        <h2 class="box-title">Fundraiser</h2>
      <div class="box box-warning" style="width:85%; margin-left: 7.5%; min-height: 600px;">

        <br>

        <div class="row" style="width: 80%; margin-left: 10%;">
        <div class="col-lg-6">
        <div class="info-box">
            <span class="info-box-icon bg-carrot"><i class="fa fa-male"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Jumlah Fundraiser</span>
              <span class="info-box-number">5</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>

        <div class="col-lg-6">
        <div class="info-box">
          
            <span class="info-box-icon bg-carrot"><i class="fa fa-money"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Total Donasi Terkumpul</span>
              <span class="info-box-number">Rp. 50.000.000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </div>
        
        </div>


        <div class="row" style=" width: 90%; margin-left: 5%;"">
        <div class="col-xs-12">
               
                          <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Nama Fundraiser</th>
                  <th>Donasi Terkumpul</th>
                  <th>Tanggal Donasi</th>
                </tr>
                <tr>
                  <td>Abdul</td>
                  <td>Rp. 1.000.000,-</td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td>Hasddd</td>
                  <td>Rp. 1.000.000,-</td>
                  <td>11-7-2014</td>
  
                </tr>
                <tr>
                  <td>657</td>
                  <td>Rp. 1.000.000,-</td>
                  <td>11-7-2014</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Rp. 1.000.000,-</td>
                  <td>11-7-2014</td>
  
                </tr>
              </table>
          <!-- /.box -->
        </div>
      </div>
         
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div></div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url(); ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url(); ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url(); ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/js/adminlte/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/js/adminlte/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/js/adminlte/demo.js"></script>
</body>
</html>