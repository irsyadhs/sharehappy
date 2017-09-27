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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  
  
  
    .affix {
        top: 0;
        width: 100%;
        padding-left: 90px;
        padding-right: 100px;
        background-color: white;
        z-index: 9999;
    }

    .affix + .container-fluid {
        padding-top: 70px;

    }

     .sidebar-menu  > li > a:hover{
    background-color: orange;
   }
   .sidebar-menu .current{
      background:#e74c3c;
   }
   .sidebar-menu > li > ul> li> a:hover{
    background-color: orange;
   } 


   .sidebar-menu > li > a > span{
     font-size: 14px; 
     color:#ffffff;
   }
    .sidebar-menu > li > a{
     color:#ffffff;
   }
    .treeview-menu > li > a{
     color:#ffffff;
   }
   .main-sidebar{
     padding-top: 0px; background-color: #e67e22; color: #ffffff;
   }
   .main-sidebar .sidebar{
      padding-top: 0px; background-color: #e67e22; color: #ffffff;
    }
 

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
            <center><h3>Ayo Bantu Adi</h3></center>
            <a href="<?php echo base_url()?>campaignpage" class="btn btn-block btn-danger btn-flat">Lihat Detail</a>
            <center><h5>Rp. 19.975.000</h5></center>
            <center><h6>dari target Rp. 19.975.000</h6></center>
          </div>
        </div>
      
      <ul class="sidebar-menu">
      <!-- sidebar menu: : style can be found in sidebar.less -->
        <li class="current">
          <a href="<?php echo base_url()?>Campaign">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>Campaign/UpdateCampaign">
            <span>Tulis Update</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url()?>profile/MyCampaign">
            <span>List Donatur</span><i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Campaign/ListDonatur">List Donatur</a></li>
            <li><a href="<?php echo base_url(); ?>Campaign/DonasiOffline">Donasi Offline</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url()?>Campaign/ListFUndraiser">
            <span>List Fundraiser</span></a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <!--<section class="content" style="padding-top: 0px;">-->
    <section class="content">

      <!-- Small boxes (Stat box) -->
     <!-- <div class="row">
        <section class="header-bottom">
          <article style="background-color: #27B585">
            <div class="container"><h3>Campaign Mari Berbagi</h3></div>
            <br>
          </article>
        </section>
        </div> -->
       <!-- small box -->
        <!-- ./col -->
        <div class="row" style="margin-top: 20px;">
        <!-- ./col -->

      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="box box-success" style="width:85%; margin-left: 7.5%; height: 600px;">

        <div class="row" style="margin-left: 10%; margin-right: 10%; margin-top: 30px; margin-bottom: 0px;">
        <div class="col-sm-4">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-eye"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Dilihat</span>
              <span class="info-box-number">410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-smile-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Donatur</span>
              <span class="info-box-number">13</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-sm-4">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-thumbs-o-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Fundraiser</span>
              <span class="info-box-number">1</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        </div>
        
        <center><h3 class="box-title">Total Donasi</h3></center>
         
        <table class="table" style="width: 90%; margin-left: 5%;margin-right: 5%; font-size: 17px;">
                <tr >
                  <td>Total Donasi Terkumpul</td>
                  <td>Rp.</td>
                  </td>
                  <td style= "text-align: right;">20.000.000</td>
                </tr>
                <tr>
                  <td>Biaya Administrasi</td>
                  <td>Rp.</td>
                  </td>
                  <td style= "text-align: right;">25.000</td>
                </tr>
                <tr>
                  <th>Total Donasi Bersih</th>
                  <th style="width: 10px;">Rp</th>
                  <th style="width: 25%;text-align: right";>99.919.975.000</th>
                </tr>
              </table>
        






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
