
  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container">
        <h1>Ramadhan</h1>
      </div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; </li>
            <li><a href="index.php">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li>Ramadhan</li>
          </ul>
        </div>
        <!--<div class="col-lg-6 align-right sub-menu social">
          <ul>
            <li><i class="fa fa-map-marker"></i> &nbsp; Birdcage Walk, London, UK &nbsp;&nbsp;</li>
            <li>&nbsp;&nbsp;<a href="#"><span class="icon-community"></span> &nbsp; Community</a></li>
          </ul>
        </div>--> 
      </div>
    </article>
  </section>
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container main" id="popular">
      <h3>PROGRAM RAMADHAN</h3>
        <div class="row">
        <?php 
        $title1 = "Help us to save the nature";
        $title2 = "Charity hospital";
        $title3 = "We Can Build Our Church";
        $title4 = "Flood affected people";
        for($i=1;$i<5;$i++){
          $campaigntitle = ${"title".$i};
          ?>
          <div class="col-lg-3">
          <div class="popular-item">
            <figure class="project-image">
              <figcaption><a href="<?php echo base_url(); ?>campaignpage">View Details</a></figcaption>
              <img src="assets/images/popular_<?php echo $i; ?>.jpg" alt="img" />
            </figure>
            <div class="popular-content">
              <div class="project-desc">
              <h5><a href="<?php echo base_url(); ?>campaignpage"> <?php echo $campaigntitle; ?> <span class="line-green"></span></a></h5>
              <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
              </div>
              <div class="popular-data"> <img src="assets/images/funder_<?php echo $i; ?>.jpg" alt="Funder" />
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#34cc99" data-barsize="7.1">
                  <div class="pie_progress__number">0%</div>
                  <div class="pie_progress__label">Goal</div>
                </div>
              </div>
              <div class="popular-details">
                <ul>
                  <li><strong>12</strong> Hari Tersisa</li>
                  <li><strong>175</strong> Donatur</li>
                  <li class="last"><strong>Rp245.987.000</strong> Terkumpul</li>
                </ul>
              </div>
              <div class="clear"></div>
            </div>
          </div>
          </div>
          <?php } ?>
      </div>
      <div class="popular-btn red"> <a href="<?php echo site_url(); ?>projects">See More</a> </div>
    </article>
  </section>
  
  <!-- ************************ Send your idea ************************ -->
  
  <section class="send-us">
    <article class="container">
      <h3>Butuh halaman campaign kamu sendiri?</h3>
      <a href="<?php echo site_url() ?>newcampaign" class="btn btn-3 red">create campaign</a>
    </article>
  </section>