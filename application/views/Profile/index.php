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


 .table-scroll{
    overflow-y: scroll;
    max-height:200px;

 }
  .table-container {
    width: 90%;
    min-height: 0px;
    margin-left: 5%;
    margin-right: 5%;

  }
  .table-container .campaign-name {
      background-color: #ecf0f1;
      padding-left: 10px;
      }
  
  .table-container .campaign-date {
      background-color: #ecf0f1;
      width: 120px;
      padding right: 20px;
      }
  .table-container .campaign-update{
     padding-left: 10px;
      }
 
 .sidebar-menu  > li > a:hover{
  background-color: yellow;
 }
 .sidebar-menu .current{
    background:#555555;
 }
 .sidebar-menu > ul > li > ul> li> a:hover{
  background-color: yellow;
 } 

</style>
</head>
<body>
  <div class="wrapper">
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="padding-top: 0px; background-color: #e67e22; color: #ffffff;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="padding-top: 0px; background-color: #e67e22; color: #ffffff;">
      <!-- Sidebar user panel -->
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <div class="user-panel">
        <div>
          <center><img src="<?php echo base_url()?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image"></center>
        </div>
        <div >
          <center><h3>Alexander Pierce</h3></center>
          <hr>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" >
        <li class="current">
          <a href="<?php echo base_url()?>profile">
            <span style="font-size: 19px; color:#ffffff;">Overview</span>
          </a>
        </li>
        <li >
          <a href="<?php echo base_url()?>profile/MyCampaign">
            <span style="font-size: 19px; color:#ffffff;">Campaign Saya</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>profile/MyDonation">
            <span style="font-size: 19px; color:#ffffff;">Donasi Saya</span></a>
        </li>
        <li class="treeview">
          <a href="#">
            <span style="font-size: 19px; color:#ffffff;">Setting</span> <i class="fa fa-angle-left pull-right" style="font-size: 19px; color:#ffffff;" ></i>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html" style="color:#ffffff;">Informasi Personal</a></li>
            <li><a href="index2.html" style="color:#ffffff;">Edit Password</a></li>
            <li><a href="index2.html" style="color:#ffffff;">Edit Profile Picture</a></li>
            <li><a href="index2.html" style="color:#ffffff;">Verifikasi Akun</a></li>
          </ul>
        </li>
      </ul>
    
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <!-- small box -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" style="margin-left: 12.5%;">   
               <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Campaign</p>
            </div>
            <div class="icon">
              <i class="ion ion-ribbon-b"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Donasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-ribbon-a"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6" >
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><sup style="font-size: 18px">Rp.</sup> 6.000.000</h3>

              <p>Total Donasi Saya</p>
            </div>
            <div class="icon">
              <i class="ion ion-cash"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="box box-success" style="width:85%; margin-left: 7.5%; max-height: 600px;">
        <center><h3 class="box-title">Recent Updates</h3></center>
                
        <table class="table-scroll">
         
          <tr>
            <table class="table-container">
              <tr>
                 <td class="campaign-name"> 
                    <p class="message" >
                      <a href="#" class="name">
                          Campaign mari berbagi
                      </a>
                    </p>
                  </td>
                  <td class="campaign-date">
                    <p class="message">
                      <small class="text-muted pull-right">Sep, 21 2017 <i class="fa fa-clock-o"></i> 2:15</small>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="campaign-update">
                    <p>
                      10000 makanan untuk berbuka puasa telah dibagikan kepada 100 panti asuhan di jawa barat
                    </p>
                  </td>
            </table>
          </tr>
            
          <tr>
            <table class="table-container">
              <tr>
                 <td class="campaign-name"> 
                    <p class="message" >
                      <a href="#" class="name">
                          Campaign mari berbagi
                      </a>
                    </p>
                  </td>
                  <td class="campaign-date">
                    <p class="message">
                      <small class="text-muted pull-right">Sep, 21 2017 <i class="fa fa-clock-o"></i> 2:15</small>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="campaign-update">
                    <p>
                      10000 makanan untuk berbuka puasa telah dibagikan kepada 100 panti asuhan di jawa barat
                    </p>
                  </td>
            </table>
          </tr>

          <tr>
            <table class="table-container">
              <tr>
                 <td class="campaign-name"> 
                    <p class="message" >
                      <a href="#" class="name">
                          Campaign mari berbagi
                      </a>
                    </p>
                  </td>
                  <td class="campaign-date">
                    <p class="message">
                      <small class="text-muted pull-right">Sep, 21 2017 <i class="fa fa-clock-o"></i> 2:15</small>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="campaign-update">
                    <p>
                      10000 makanan untuk berbuka puasa telah dibagikan kepada 100 panti asuhan di jawa barat
                    </p>
                  </td>
            </table>
          </tr>

          <tr>
            <table class="table-container">
              <tr>
                 <td class="campaign-name"> 
                    <p class="message" >
                      <a href="#" class="name">
                          Campaign mari berbagi
                      </a>
                    </p>
                  </td>
                  <td class="campaign-date">
                    <p class="message">
                      <small class="text-muted pull-right">Sep, 21 2017 <i class="fa fa-clock-o"></i> 2:15</small>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="campaign-update">
                    <p>
                      10000 makanan untuk berbuka puasa telah dibagikan kepada 100 panti asuhan di jawa barat
                    </p>
                  </td>
            </table>
          </tr>

          <tr>
            <table class="table-container">
              <tr>
                 <td class="campaign-name"> 
                    <p class="message" >
                      <a href="#" class="name">
                          Campaign mari berbagi
                      </a>
                    </p>
                  </td>
                  <td class="campaign-date">
                    <p class="message">
                      <small class="text-muted pull-right">Sep, 21 2017 <i class="fa fa-clock-o"></i> 2:15</small>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="campaign-update">
                    <p>
                      10000 makanan untuk berbuka puasa telah dibagikan kepada 100 panti asuhan di jawa barat aasaddadadasda
                      asddddddddsgadysgdygsaydgasdas
                      dasdsahduashduhasudhkuashdukahsdkuhasudkhaskudhkuashdsa
                      dasdsahduashdudkhaehdkuhuekbcukebkuea
                      deahdkuaehdkueahdkuaegkdgeyvgeygfefe
                      adkueahfukehfukgeayfgeacneacilejciajcieahcueayduay
                    </p>
                  </td>
            </table>
          </tr>

          <tr>
            <table class="table-container">
              <tr>
                 <td class="campaign-name"> 
                    <p class="message" >
                      <a href="#" class="name">
                          Campaign mari berbagi
                      </a>
                    </p>
                  </td>
                  <td class="campaign-date">
                    <p class="message">
                      <small class="text-muted pull-right">Sep, 21 2017 <i class="fa fa-clock-o"></i> 2:15</small>
                    </p>
                  </td>
              </tr>
              <tr>
                  <td class="campaign-update">
                    <p>
                      10000 makanan untuk berbuka puasa telah dibagikan kepada 100 panti asuhan di jawa barat
                      asdashuodhasouhdusahduashdouhasoudhasoudhouahsdoahdoasd
                      sadashidsauihduisahdiuhaiudhsaiuhdasd
                      asd
                      sad
                      as
                      das
                      d
                      sadsadhiuaheudhueaidh
                    </p>
                  </td>
            </table>
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
