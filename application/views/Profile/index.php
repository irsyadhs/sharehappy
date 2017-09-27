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
    background-color: yellow;
   }
   .sidebar-menu .current{
      background:#555555;
   }
   .sidebar-menu > li > ul> li> a:hover{
    background-color: yellow;
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
        <div class="user-panel">
          <div>
            <center><img src="<?php echo base_url()?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image"></center>
          </div>
          <div >
            <center><h3>Alexander Pierce</h3></center>
            <hr>
          </div>
        </div>


      <!-- sidebar menu panel -->
      <ul class="sidebar-menu">
        <li class="current">
          <a href="<?php echo base_url()?>profile">
            <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>profile/MyDonation">
            <span>Donasi Saya</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>profile/MyCampaign">
            <span>Kampanye Saya</span>
          </a>
        </li>
        <!--multi-->
        <li class="treeview">
          <a href="#">
            <span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>Profile/MyInfo">Profil Saya</a></li>
            <li><a href="<?php echo base_url(); ?>Profile/EditPass">Edit Password</a></li>
            <li><a href="<?php echo base_url(); ?>Profile/EditProfilePic">Edit Profile Picture</a></li>
            <li><a href="<?php echo base_url(); ?>Profile/VerifyAkun" >Verifikasi Akun</a></li>
         </ul>
        </li>
      </ul>


    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
       <!-- small box -->
        <div class="col-md-4 col-xs-4" style="width: 27.5%; margin-left: 10%">   
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>3</h3>
              <p>Campaign</p>
            </div>
            <div class="icon">
              <i class="ion ion-ribbon-b"></i>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 col-xs-4" style="width: 27.5%;">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>10</h3>
              <p>Donasi</p>
            </div>
            <div class="icon">
              <i class="ion ion-ribbon-a"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-md-4 col-xs-4" style="width: 27.5%;">
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
      <div class="row">
        <div class="col-md-12" style="padding-left: 10%; width: 95%;">
          <!-- The time line -->
          <ul class="timeline">
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    10 Feb. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-newspaper-o bg-gray"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                <h3 class="timeline-header"><a href="<?php echo base_url();?>campaignpage">Campaign Ayo Bantu Adi Sembuh</a> has an update</h3>
                <div class="timeline-body">
                  Dana sebesar 100juta rupiah telah terkumpul dan telah sampai ke tangan keluarga adi
                  <br>
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline item -->
            <li>
              <i class="fa fa-user bg-gray"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-newspaper-o"></i> 5 mins ago</span>
                <h3 class="timeline-header no-border"><a href="#">Campaign Ayo Bantu Sesama</a> telah mendapat donasi 1000000 dari total 100000000000</h3>
              </div>
            </li>
            <!-- END timeline item -->
            <!-- timeline time label -->
            <li class="time-label">
                  <span class="bg-green">
                    3 Jan. 2014
                  </span>
            </li>
            <!-- /.timeline-label -->
            <!-- timeline item -->
             <li>
              <i class="fa fa-video-camera bg-gray"></i>
              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>
                <h3 class="timeline-header"><a href="<?php echo base_url()?>Campaignpage">Campaign Mari Berbagi</a> has a new update</h3>
                <div class="timeline-body">
                100000 makanan untuk panti asuhan telah dibagikan kepada 50 panti asuhan di jawa barat
                  <!--<div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen></iframe>
                  </div>-->
                  <br>
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                  <img src="http://placehold.it/150x100" alt="..." class="margin">
                </div>
              </div>
            </li>
            <!-- END timeline item -->
            <li>
              <i class="fa fa-clock-o bg-gray"></i>
            </li>
          </ul>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
</div>
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
