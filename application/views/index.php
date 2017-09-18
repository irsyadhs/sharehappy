  <?php if(!isset($_SESSION['login'])){
        $load = array(
          'login' => FALSE
        );
        
        $this->session->set_userdata( $load );
      }
    ?>
  <!-- Revolution Slider -->
  <section class="main-slider">
    <article>
      <div class="tp-banner-container">
        <div class="tp-banner" >
          <ul>
            <!-- SLIDE 1 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on">
              <!-- MAIN IMAGE -->
              <img src="<?php echo base_url(); ?>assets/images/dummy.png"  alt="slidebg1" data-lazyload="<?php echo base_url(); ?>assets/images/slide-1.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 slider-progress-section"
                data-x="109"
                data-y="395" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2900"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div class="progress-section" style="background: url('<?php echo base_url(); ?>assets/images/caption-bg.png') no-repeat center center;">
                    <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#32cc98" data-barsize="9.1" data-size="148" style="width:148px; margin:0px 106px; float: left; background: url('<?php echo base_url(); ?>assets/images/circle-fill-top.png') no-repeat center center;">
                      <div class="pie_progress__number">0%</div>
                      <div class="pie_progress__label">Goal</div>
                    </div>
                    <ul>
                      <li style="color : white;">12<span>Hari Tersisa</span></li>
                      <li style="color : white;">175<span>Donatur</span></li>
                      <li class="last" style="color : white;">Rp2.456.457.000<span>Terkumpul</span></li>
                    </ul>
                    <div class="clear"></div>
                    <center><a href="<?php echo base_url(); ?>campaignpage"><button type="button" class="btn btn-3 red">DONASI</button></a></center>
                  </div>

                </div>
                
                
          
            <!-- SLIDE 2 -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on">
              <!-- MAIN IMAGE -->
              <img src="<?php echo base_url(); ?>assets/images/dummy.png"  alt="slidebg1" data-lazyload="<?php echo base_url(); ?>assets/images/slide-2.jpg" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
              <!-- LAYERS -->
                <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 slider-progress-section"
                data-x="109"
                data-y="395" 
                data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2900"
                data-easing="Power3.easeInOut"
                data-splitin="none"
                data-splitout="none"
                data-elementdelay="0.1"
                data-endelementdelay="0.1"
                data-linktoslide="next"
                style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">
                  <div class="progress-section" style="background: url('<?php echo base_url(); ?>assets/images/caption-bg.png') no-repeat center center;">
                    <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#32cc98" data-barsize="9.1" data-size="148" style="width:148px; margin:0px 106px; float: left; background: url('<?php echo base_url(); ?>assets/images/circle-fill-top.png') no-repeat center center;">
                      <div class="pie_progress__number">0%</div>
                      <div class="pie_progress__label">Goal</div>
                    </div>
                    <ul>
                      <li style="color : white;">12<span>Hari Tersisa</span></li>
                      <li style="color : white;">175<span>Donatur</span></li>
                      <li class="last" style="color : white;">Rp2.456.457.000<span>Terkumpul</span></li>
                    </ul>
                    <div class="clear"></div>
                    <center><a href="<?php echo base_url(); ?>campaignpage"><button type="button" class="btn btn-3 red">DONASI</button></a></center>
                  </div>

                </div>
        
          </ul>
          <div class="tp-bannertimer"></div>
        </div>
      </div>
    </article>
  </section>
  
  <!-- Page Content -->
  <section class="white">
    <article class="container" id="intor-section">
      <h3>5 Alasan Berdonasi di <br /> Sharing Happiness</h3>
      <ul>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-ideas"></i></span>
          <strong>Variatif Program <span class="line-red"></span></strong> Berbagai program sosial untuk membantu dan memberdayakan saudara kita
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-community2"></i></span>
          <strong>Cara Berdonasi Mudah <span class="line-red"></span></strong> Berdonasi hanya dengan beberapa langkah mudah kapanpun dimanapun
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-community"></i></span>
          <strong>Donasi Tepat Salur <span class="line-red"></span></strong> Donasi yang Anda titipkan, disalurkan tepat kepada penerima manfaat
        </li>
        <br>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">
          <span class="intro-icon"><i class="icon-environment"></i></span>
          <strong>Jangkauan Pelosok <span class="line-red"></span></strong> Program kampanye menjangkau pelosok nusantara bahkan dunia
        </li>
        <li class="plus-icon">&nbsp;</li>
        <li class="text-area">    
          <span class="intro-icon"><i class="icon-publicpower"></i></span>
          <strong>Pengelolaan Profesional <span class="line-red"></span></strong> Profesional kami baik dalam mengelola hingga menyalurkan donasi Anda
        </li>
      </ul>
    </article>
  </section>
  
  <section class="gray">
    <article class="container main" id="popular">
      <h3>Program Pilihan</h3>
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
      <div class="popular-btn red"> <a href="projects.html">See More</a> </div>
    </article>
  </section>
  
  

  
  <section class="send-us">
    <article class="container">
      <h3>Ingin menggalang dana atau berdonasi?</h3>
      <center>
        <table border="0">
          <tr>
            <td width="30"><img src="assets/images/check.png"></td>
            <td><font size="4">Login atau register dengan cepat</font></td>
          </tr>
          <tr>
            <td width="30"><img src="assets/images/check.png"></td>
            <td><font size="4">Pilih program yang ingin diberi donasi</font></td>
          </tr>
          <tr>
            <td width="30"><img src="assets/images/check.png"></td>
            <td><font size="4">Klik create campaign untuk membuat campaign mu</font></td>
          </tr>
          <tr>
            <td width="30"><img src="assets/images/check.png"></td>
            <td><font size="4">Buat campaign mu dengan langkah mudah</font></td>
          </tr>
          <tr>
            <td width="30"><img src="assets/images/check.png"></td>
            <td><font size="4">Donasi cepat terverifikasi</font></td>
          </tr>
          <tr>
            <td width="30"><img src="assets/images/check.png"></td>
            <td><font size="4">Mulai sekarang untuk berbagi kebahagiaan sesama!</font></td>
          </tr>
        </table>
      </center>
      
      
      <br><br><br>
      <a href="<?php echo site_url(); ?>newcampaign" class="btn btn-4 red">Create Campaign</a> 
    </article>
  </section>