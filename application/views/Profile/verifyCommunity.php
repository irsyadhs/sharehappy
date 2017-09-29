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
        <div class="user-panel">
          <div>
            <center><img src="<?php echo base_url()?>assets/img/user2-160x160.jpg" class="img-circle" alt="User Image"></center>
          </div>
          <div >
            <center><h4 class="pumpkin">Alexander Pierce</h4></center>
            <hr>
          </div>
        </div>


      <!-- sidebar menu panel -->
      <ul class="sidebar-menu">
        <li>
          <a href="<?php echo base_url()?>profile">
            <i class="fa fa-dashboard"></i><span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>profile/MyDonation">
            <i class="fa fa-money"></i><span>Donasi Saya</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url()?>profile/MyCampaign">
            <i class="fa fa-life-saver"></i><span>Kampanye Saya</span>
          </a>
        </li>
        <!--multi-->
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-cogs"></i><span>Setting</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu menu-open">
            <li><a href="<?php echo base_url(); ?>Profile/MyInfo"><i class="fa fa-user"></i>Profil Saya</a></li>
            <li><a href="<?php echo base_url(); ?>Profile/EditPass"><i class="fa fa-key"></i>Edit Password</a></li>
            <li><a href="<?php echo base_url(); ?>Profile/EditProfilePic"><i class="fa fa-photo"></i>Edit Profile Picture</a></li>
            <li class="current"><a href="<?php echo base_url(); ?>Profile/VerifyAkun" ><i class="fa fa-check"></i>Verifikasi Akun</a></li>
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
      <!-- Main row -->
      
    <h2 class="box-title">Verify Akun</h2>
      <div class="box box-warning" style="width:85%; margin-left: 7.5%; min-height: 600px;">
        <div class="row" style="width: 80%; margin-left: 10%;">
        <div class="box-header with-border">
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <form class="form-horizontal" style="padding-left: 80px; padding-right: 50px;">              
                <div class="box-body">
                  <div class="form-group">
                    <label for="organisasi" class="col-sm-2 control-label">Jenis Organisasi</label>
                    <div class="col-sm-10">
                      <select class="form-control" placeholder="Pilih Organisasi" name="organisasi" required>
                      <option>Yayasan</option>
                      <option>PT</option>
                      <option>Koperasi</option>
                      <option>LSM</option>
                      <option>Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="namaorg" class="col-sm-2 control-label">Nama Organisasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telp" placeholder="Nama Organisasi">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="kota" class="col-sm-2 control-label">Kota</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kota" placeholder="Kota">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jabatan" placeholder="Jabatan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="website" class="col-sm-2 control-label">Website</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="website" placeholder="Website">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="FB-URL" class="col-sm-2 control-label">Facebook URL</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="FB-URL" placeholder="Enter Facebook URL">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-10">
                  <textarea class="form-control" rows="4" cols="50" placeholder="Alamat" id="alamat"></textarea>
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="scanlogo" class="col-sm-2 control-label">Scan Logo Komunitas</label>
                  <div class="col-sm-10">
                    <img src="//placehold.it/500" class="avatar img" alt="avatar">
                    <input type="file" id="scanfoto">
                  </div>
                 </div>
                <div class="form-group">
                  <label for="scanid" class="col-sm-2 control-label">Scan Foto Identitas: KTP/Identitas Lain</label>
                  <div class="col-sm-10">
                    <img src="//placehold.it/500" class="avatar img" alt="avatar">
                    <input type="file" id="scanid">
                  </div>
                 </div>
                </div>
                <!--<div class="form-group">
                  <label for="telp">No Telepon</label>
                  <input type="password" class="form-control" id="telp" placeholder="08XXXXXXXXX">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" rows="4" cols="50" placeholder="Alamat" id="alamat"></textarea>
                </div>

                <div class="form-group">
                  <label for="scanid">Upload Scan Foto Identitas KTP/Identitas Lain</label>
                  <img src="//placehold.it/300" class="avatar img" alt="avatar" style="margin-left: 250px;">
                  <input type="file" id="scanid" style="margin-left: 550px;">
                </div>
                <div class="form-group">
                  <label for="scanfoto">Upload Scan Foto Terbaru</label>
                  <img src="//placehold.it/300" class="avatar img" alt="avatar" style="margin-left: 350px;">
                  <input type="file" id="scanid" style="margin-left: 550px;">
                </div>-->
              <!-- /.box-body -->

              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
              </div>
            </form>
          

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