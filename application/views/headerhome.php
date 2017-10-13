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

<style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  /* class headerhome*/
  /*.affix {
      top: 0;
      width: 100%;
      margin-left: -90px;
      padding-bottom: 5px;
      padding-left: 105px;
      padding-right: 104px;
      padding-top: -5px;
      background-color: white;
      z-index: 9999;
  }*/
  .affix {
      top: 0;
      width: 100%;
      margin-left: 0px;
      padding-bottom: 0px;
      padding-left: 105px;
      padding-right: 104px;
      padding-top: -5px;
      background-color: white;
      z-index: 9999;
      transition: 0.2s;
  }

  .affix + .container-fluid {
      padding-top: 70px;

  }

  @media only screen and (max-width: 1300px){
  .affix {
    padding-left: 50px;
    padding-right: 50px; 
  }
  @media only screen and (max-width: 1050px){
  .affix {
    padding-left: 20px;
    padding-right: 20px; 
  }
}
</style>

<body>
<?php 
  if(!isset($_SESSION['login'])){
    $load = array(
      'login' => FALSE
    );
    
    $this->session->set_userdata( $load );
    /* *********ALL RESOURCE WILL BE HERE ************ */
  
  }
  $profilename = "Irsyad Harfiansyah";
  $profilemail = "irsyadharfiansyah@gmail.com";
?>
<div class="wrapper"> 
  <!-- Header -->
    <header>
    <div id="navscroll">
    <div class="container" data-spy="affix" data-offset-top="7">
      <div id="logo">
        <a href="<?php echo site_url();?>Home"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logoSH"></a>
        <button type="button" class="collapsed" id="navbar-toggle"><i class="icon fa fa-bars"></i></button>
      </div>
      <div class="nav-header-right">
        <nav class="main-nav">
        </nav>
        <div class="header-right">
          <div class="header-right-btns">
            <ul>
              <li><div style="text-align:center;"><a href="<?php echo site_url(); ?>projects"><button type="button" class="btn btn-4 red nav2">Program</button></a></div></li>
              <li><div style="text-align:center;"><a href="<?php echo site_url(); ?>Home"><button type="button" class="btn btn-4 red nav2">Zakat</button></a><span></span></div></li>
              <?php 
              if($_SESSION['login'] == FALSE){ 
              ?>
              <li class="login-panel">
                <div style="text-align:center;"><a href="<?php echo site_url(); ?>login"><button type="button" class="btn btn-4 red profile">Log in</button></a></div>
                <div class="dropdown-login">
                  <div class="arrow"></div>
                  <div class="reverse"></div>
                  <div class="box-reverse left"></div>
                  <div class="box-reverse right"></div>
                  <?php echo form_open('login', 'class="form-signin"'); ?>
                    <div class="form-group">
                      <h3>Sign In</h3>
                      <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Log in with Facebook </button>
                      <hr>
                      <img src="<?php echo base_url(); ?>assets/images/or.png" alt="OR">
                      <input type="email" value="" class="form-control" placeholder="Email" name="email" required>
                      <input type="password" value="" class="form-control" placeholder="Password" name="password" required>
                    </div>
                    <a class="link" href="index.html#">Forgot password?</a>
                    <span class="text-gray remember"><input type="checkbox" id="remember" value=""> <label for="remember">Remember me</label></span>
                    
                    <?php
                      echo form_submit('submit', 'Sign me in!', 'class="btn btn-sigin"');
                      echo form_close();
                    ?>
                    <br>
                    <?php echo form_open('register', 'class="form-signin"'); ?>
                    <?php
                      echo form_submit('submit', 'Daftar', 'class="btn btn-sigin btn-camp"');
                      echo form_close();
                    ?>
                    
                    <!-- <button type="submit" class="btn btn-sigin">Sign me in!</button> -->
                    <br style="clear:both;">
                    
                </div>
              </li>
              <!-- <li><a href="<?php //echo base_url(); ?>register" class="btn btn-4 green">Register</a></li> -->

              <?php }else{ ?>
              <!-- <li><a href="<?php echo base_url(); ?>profile" class="btn btn-4 green">Profil</a></li> -->

              <!-- <li><a href="<?php echo base_url(); ?>profile" class="btn btn-4 green">Irsyad</a></li> -->
              <li class="login-panel">
                <div style="text-align:center;"><a href="<?php echo site_url(); ?>profile"><button type="button" class="btn btn-4 red profile">Profile</button></a></div>
                <div class="dropdown-login">
                  <div class="arrow"></div>
                  <div class="reverse"></div>
                  <div class="box-reverse left"></div>
                  <div class="box-reverse right"></div>
                  <div class="profile-menu"><img src="assets/images/funder_1.jpg" alt="Funder" /></div>
                  <div class="profile-name"><?php echo "<strong>".$profilename."</strong>"."<br>"."<small>".$profilemail."</small>"."<br>";
                  ?></div>
                  <?php echo form_open('profile', 'class="form-signin"'); ?>
                  <?php
                    echo form_submit('submit', 'Dashboard', 'class="btn btn-sigin btn-camp"');
                    echo form_close();
                  ?>
                  <br>
                  <?php echo form_open('newcampaign', 'class="form-signin"'); ?>
                  <?php
                    echo form_submit('submit', 'New Campaign', 'class="btn btn-sigin btn-camp"');
                    echo form_close();
                  ?>
                  <br>
                  <?php echo form_open('logout', 'class="form-signin"'); ?>
                  <?php
                    echo form_submit('submit', 'Log out', 'class="btn btn-sigin"');
                    echo form_close();
                  ?>

                  <br style="clear:both;">
                  <hr><br>
                    
                </div>
              </li>
              
              <!-- <li><a href="<?php echo base_url(); ?>Proses/logout">Logout</a></li> -->
              <?php } ?>
              
              
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
  </div>
  </header>
  