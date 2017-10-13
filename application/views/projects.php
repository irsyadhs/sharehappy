  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container"><h1>Campaign</h1></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
  <?php $kategori = "semua"; ?>
    <article class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index.html">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li>Projects</li>
          </ul>
        </div>
        <div class="col-lg-6 align-right sub-menu">
          <ul>
            <li><a href="#">Kategori : <?php echo $kategori; ?></a></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container projects-page" id="popular">
      <div class="row">
        
        <!-- ************************ Left Side Area ************************ -->
        
        <div class="col-lg-9 content-cnt">
          <?php 
            $title1 = "Help us to save the nature";
            $title2 = "Charity hospital";
            $title3 = "We Can Build Our Church";
            $title4 = "Flood affected people";
            $title5 = "Help us to run";
            $title6 = "Save the building of heritage";
            for($i=1;$i<7;$i++){
              $campaigntitle = ${"title".$i};
              ?>
              <div class="col-lg-4 project-cnt">
              <div class="popular-item">
                <figure class="project-image">
                  <figcaption><a href="<?php echo base_url(); ?>campaignpage">View Details</a></figcaption>
                  <img src="assets/images/popular_<?php echo $i; ?>.jpg" alt="img" />
                </figure>
                <div class="popular-content">
                  <div class="project-desc">
                  <h5><a href="<?php echo base_url(); ?>campaignpage"> <?php echo $campaigntitle; ?> <span class="line-red"></span></a></h5>
                  <p>Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
                  </div>
                  <div class="popular-data"> <img src="assets/images/funder_<?php echo $i; ?>.jpg" alt="Funder" />
                    <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#de5434" data-barsize="7.1">
                      <div class="pie_progress__number">0%</div>
                      <div class="pie_progress__label">Goal</div>
                    </div>
                  </div>
                  <div class="popular-details">
                    <ul>
                      <li><strong>12</strong> Hari Tersisa</li>
                      <li><strong>175</strong> Donatur</li>
                      <li class="last"><strong><font size="2px">Rp278.957.000</font></strong> Terkumpul</li>
                    </ul>
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          <?php } ?>
          <div class="clear"></div>
          
          <div class="popular-btn"> <a href="#">See More</a> </div>        
        </div>
        
        <!-- ************************ Right Side Area ************************ -->
        
        <div class="col-lg-3 hidden-md sidebar-container">
          <div class="sidebar">
          
            <div class="sidebar-item">
              <div class="w-title">Cari Program</div>
              <div class="w-content">
                <form action="projects.php">
                  <fieldset>
                    <div class="form-group">
                      <label for="categories"><strong>Kategori</strong></label>
                      <select id="categories" class="form-control arrow-down">
                        <option value="pemberdayaan">Pemberdayaan</option>
                        <option value="kesehatan">Kesehatan</option>
                        <option value="pendidikan">Pendidikan</option>
                        <option value="yatimdhuafa">Yatim dan Dhuafa</option>
                        <option value="masjid">Pembangunan Masjid</option>
                        <option value="kemanusiaan">Program Kemanusiaan</option>
                        <option value="infrastruktur">Infrastruktur</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="city"><strong>Kota</strong></label>
                      <input type="text" class="form-control" id="city" placeholder="City name">
                    </div>
                    <div class="form-group">
                      <label><strong>Persen Tercapai</strong></label>
                    </div>
                    <div class="radio-inputs">

                      <div class="form-group radio-cnt">
                        <input type="radio" value="all" name="percent-funded" id="all" checked="checked" >
                        <label for="all">Semua</label>
                      </div>
                      <div class="form-group radio-cnt">
                        <input type="radio" value="50-75" name="percent-funded" id="5075" >
                        <label for="5075">50% - 75%</label>
                      </div>
                      <div class="form-group radio-cnt">
                        <input type="radio" value="75-100" name="percent-funded" id="75100" >
                        <label for="75100">75% - 100%</label>
                      </div>
                    </div>
                    <div class="clear"></div>
                    <button type="button" class="btn btn-3 red submit-filters">Done</button>
                  </fieldset>
                </form>
              </div>
            </div>
            
            <div class="sidebar-item">
              <div class="stories-slider">
                <div class="slide">
                  <div class="w-title">Kisah Sukses</div>
                  <div class="w-content success-stories">
                    <div class="ssimg"><img src="<?php echo base_url();?>assets/images/stories/1.jpg" alt="Success Stories" /></div>
                    <h5>John Doe</h5>
                    <p><i class="fa fa-quote-left"></i> Pellentesque pharetra sapien non quam placerat vestibulum. Aliquam dignissim ex nec feugiat.</p>
                  </div>
                </div>
                <div class="slide">
                  <div class="w-title">Success Stories</div>
                  <div class="w-content success-stories">
                    <div class="ssimg"><img src="<?php echo base_url();?>assets/images/stories/2.jpg" alt="Success Stories" /></div>
                    <h5>John Doe</h5>
                    <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                  </div>
                </div>
                <div class="slide">
                  <div class="w-title">Success Stories</div>
                  <div class="w-content success-stories">
                    <div class="ssimg"><img src="<?php echo base_url();?>assets/images/stories/3.jpg" alt="Success Stories" /></div>
                    <h5>John Doe</h5>
                    <p><i class="fa fa-quote-left"></i> Iincididunt ut labore et dolore magna aliqua. Sed ut perspiciatis unde omnis iste natus.</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
      </div>
      
    </article>
  </section>
  
  <!-- ************************ Send your idea ************************ -->
  <section class="send-us">
    <article class="container">
      <h3>Butuh halaman campaign kamu sendiri?</h3>
      <a href="<?php echo site_url() ?>newcampaign" class="btn btn-3 red">create campaign</a>
    </article>
  </section>