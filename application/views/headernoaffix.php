<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="keywords" content="Fundz HTML5 Template">
<meta name="description" content="Fundz is a HTML5 Responsive Crowdfunding Template">
<meta name="author" content="stackthemes.net">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.ico" />
<title>Sharing Happiness</title>
<style type="text/css">
  /************************ StyleSheets ************************/
@import url('<?php echo base_url(); ?>assets/js/plugins/jquery.selectbox.css');
@import url('<?php echo base_url(); ?>assets/css/forms.css');
</style> 

<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">

<!-- Basic Stylesheets -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.php">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom-style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/responsive.css">

<!-- Progressbar CSS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/pieprogress/css/rainbow.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/pieprogress/css/progress.css">

<!-- Revolution Slider CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/slider-revolution/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/js/slider-revolution/rs-plugin/css/settings.css" media="screen" />

<!-- Carousels CSS -->
<link href="<?php echo base_url(); ?>assets/js/bxslider/jquery.bxslider.css" rel="stylesheet" />

<!-- Google Fonts & Font-Awesome -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icons.css">

<!-- Your Custom Styles -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/my-styles.css">

<!-- HTML5 Shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div class="wrapper"> 
  <!-- Header -->
  <header>
    <div class="container">
      <div id="logo">
        <a href="<?php echo site_url();?>Home"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Logo-SH" /></a>
        <button type="button" class="collapsed" id="navbar-toggle"><i class="icon fa fa-bars"></i></button>
      </div>
      <div class="nav-header-right">
        <nav class="main-nav">
          <ul>
            <li><a href="<?php echo site_url();?>projects">Donasi</a>
              <ul>
                <li><a href="#">Program di Kota Anda</a>
                  <ul>
                    <li><a href="#">Aceh</a></li>
                    <li><a href="#">Balikpapan</a></li>
                    <li><a href="#">Bandung</a></li>
                </ul>
                </li>
                <li><a href="#">Pendidikan</a></li>
                <li><a href="#">Kesehatan</a></li>
                <li><a href="#">Pemberdayaan</a></li>
                <li><a href="#">Program Kemanusiaan</a></li>
                <li><a href="#">Pembangunan Masjid</a></li>
                 <li><a href="#">Yatim dan Dhuafa</a></li>
                <li><a href="#">Infrastruktur</a></li>
              </ul>
            </li>
            <li><a href="<?php echo site_url(); ?>projects">Program Lain</a>
              <ul>
                <li><a href="#">Sedekah</a>
                  <ul>
                    <li><a href="#">Zakat</a></li>
                    <li><a href="#">Infaq</a></li>
                    <li><a href="#">Fidyah</a></li>
                    <li><a href="#">Wakaf</a></li>
                    <li><a href="#">Program Kemanusiaan</a></li>
                </ul>
                </li>
                <li><a href="<?php echo site_url();?>superqurban">Superqurban</a></li>
                <li><a href="<?php echo site_url();?>ramadhan">Ramadhan</a></li>
              </ul>
            </li>
          </ul>
        </nav>
        <div class="header-right">
          <div class="header-right-btns">
            <ul>
              <li class="login-panel">
                <a href="index.html#login">Login</a><span>Or</span>
                <div class="dropdown-login">
                  <div class="arrow"></div>
                  <div class="reverse"></div>
                  <div class="box-reverse left"></div>
                  <div class="box-reverse right"></div>
                  <form action="<?php echo base_url(); ?>profile" method="post">
                    <div class="form-group">
                      <h3>Sign In</h3>
                      <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Log in with Facebook </button>
                      <hr>
                      <img src="<?php echo base_url(); ?>assets/images/or.png" alt="OR" />
                      <input id="email" type="text" value="Your email">
                      <input id="password" type="text" value="Your password">
                    </div>
                    <span class="text-gray remember"><input type="checkbox" id="remember" value=""> <label for="remember">Remember me</label></span>
                    <button type="submit" class="btn btn-sigin">Sign me in!</button>
                    <br style="clear:both;">
                    <hr><br>
                    <a class="link" href="index.html#">Forgot password?</a>
                  </form>
                </div>
              </li>
              <li><a href="<?php echo base_url(); ?>register" class="btn btn-4 green">Register</a></li>
              <li><a href="<?php echo base_url(); ?>newcampaign" class="btn btn-4 red">New Campaign</a></li>
            </ul>
          </div>
          <div class="search-box border-right">
            <form method="get" action="index.html">
              <input type="text" value="Cari judul, kota, kategori, dsb" name="s" id="keyword">
              <span class="icon fa fa-search transition-color" title="Search"></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>
  