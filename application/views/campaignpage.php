<style>
  /* Note: Try to remove the following lines to see the effect of CSS positioning */
  #affix1.affix{
      top: 0;
      width: 100%;
      padding-top: 10px;
      background-color: white;
      z-index: 9990;
      margin-left: -105px;
      padding-left: 100px;
  }

  #affix2.affix{
      top: 0;
      width: 0%;
      align-content: center;
      padding-left: -700px;
      padding-top: 0px;
      background-color: white;
      z-index: 9999;

  }

  #affix3.affix{
      bottom: 0;
      width: 100%;
      display: none;
      align-content: center;
      padding-right: : 0px;
      padding-top: 0px;
      background-color: #3398CC;
      z-index: 9999;
      margin-left: -30px;

  }

  .affix + .container-fluid {
      padding-top: 70px;

  }

  #tabmobile{
    display: none;
  }
  #tabnormal{
    display: inline-block;
  }
  #donasimobile{
    display: none;
  }

  @media only screen and (max-width: 1200px){
    .btn.btn-3.blue.donasi{
      width: 263px;
    }
  }

  @media only screen and (max-width: 1020px){
    #affix1.affix {
      width: 94%;
      margin-left: -5px;
      padding-left: 50px;
    }
    #affix2.affix{
      display: none;
    }
    #affix3.affix{
      display: inline-block;
    }
    #donasimobile{
      display: inline-block;
    }
  }
  @media only screen and (max-width: 400px){
    #tabmobile{
      display: inline-block;
    }
    #tabnormal{
      display: none;
  }
  }
</style>
<!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container"><h3>Park At Birdcagewalk</h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp; You are here:</li>
            <li><a href="index.html">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li><a href="projects.html">Projects</a></li>
            <li class="fa fa-angle-right"></li>
            <li>Park At Birdcagewalk</li>
          </ul>
        </div>
        <div class="col-lg-6 align-right sub-menu social">
          <ul>
            <li><i class="fa fa-map-marker"></i> &nbsp; Bandung &nbsp;&nbsp;</li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container project-single">
      <div class="row about-project">
        
        <!-- ************************ Left Side Area ************************ -->
        
        <div class="col-lg-8">
          
          <!-- ************************ Project Gallery ************************ -->
        
          <div class="pslider">
            <div class="slide"><center><img src="assets/images/projects/singe-2.jpg" alt="img" /></center></div>
            <div class="slide"><center><img src="assets/images/projects/singe-1.jpg" alt="img" /></center></div>
            <div class="slide"><center><img src="assets/images/projects/singe-3.jpg" alt="img" /></center></div>
            <div class="slide"><center><img src="assets/images/projects/singe-4.jpg" alt="img" /></center></div>
            <div class="slide"><center><img src="assets/images/projects/singe-5.jpg" alt="img" /></center></div>
            <div class="slide"><center><img src="assets/images/projects/singe-6.jpg" alt="img" /></center></div>
          </div>
          
         <!--  <div class="pcontent"> -->
            <!-- ************************ Tabs Start ************************ -->
            <div class="tabpanel">
              <div id="tabnormal">
                <ul class="nav nav-tabs pstabs" id="affix1" data-spy="affix" data-offset-top="720">
                  <li class="active"><a href="campaignpage.php#about-project">Detail</a></li>
                  <li><a href="campaignpage.php#costs">Update Campaign</a></li>
                  <li><a href="campaignpage.php#donatur">Donatur<i>27</i></a></li>
                  <li><a href="campaignpage.php#pesan">Pesan </a></li>
                </ul>  
              </div>
              <div id="tabmobile">
                <ul class="nav nav-tabs pstabs" id="affix1" data-spy="affix" data-offset-top="720">
                  <li class="active"><a href="campaignpage.php#about-project"><img src="<?php echo base_url(); ?>assets/images/detail.png"></a></li>
                  <li><a href="campaignpage.php#costs"><img src="<?php echo base_url(); ?>assets/images/cost.png"></a></li>
                  <li><a href="campaignpage.php#donatur"><img src="<?php echo base_url(); ?>assets/images/donatur.png"><i>27</i></a></li>
                  <li><a href="campaignpage.php#pesan"><img src="<?php echo base_url(); ?>assets/images/pesantab.png"></a></li>
                </ul>  
              </div>
              
              
              <div class="tab-content" style="margin: 20px 30px 20px 30px;">
                
                <!-- ************************ Details About Project ************************ -->
                
                <div class="tab-pane active" id="about-project">
                  <h5>We are building a park at Birdcagewalk</h5>
                  <p>Etiam id eleifend nisl. Fusce ultricies ultricies lorem, sit amet fringilla magna scelerisque non. Sed auctor facilisis est, a porttitor risus tempus sit amet. <a href="project-single.html#">Pellentesque habitant morbi</a> tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vel imperdiet nisl, sit amet semper libero. Morbi aliquam ornare lobortis. Nam nec fermentum erat.</p>
                  
                  <ul>
                    <li>Aenean pharetra diam in nisl mattis</li>
                    <li>Ut a lacinia metus</li>
                    <li>Nunc ullamcorper varius metus</li>
                    <li>Donec ut ligula vitae risus elementum tempor</li>
                    <li>Etiam porta massa sit amet purus viverra</li>
                  </ul>
                  
                  <p>Vestibulum a justo libero. Praesent vehicula id lectus semper hendrerit. Vestibulum tempus porta mi, sit amet blandit velit mattis nec. Nunc accumsan elementum gravida. Integer eu gravida massa. Maecenas ligula leo, feugiat a finibus ut, placerat a turpis. Ut viverra neque non suscipit imperdiet. Proin ut erat eleifend metus tristique rutrum ut at enim. Aliquam eget blandit dolor, ut interdum metus. Maecenas eros orci, congue quis urna eget, condimentum semper risus. Etiam feugiat rutrum viverra.</p>
                  
                  <figure>
                    <img src="assets/images/projects/singe-7.jpg" alt="The Pulpit Rock">
                  </figure>
                  
                  <p>Etiam id eleifend nisl. Fusce ultricies ultricies lorem, sit amet fringilla magna scelerisque non. Sed auctor facilisis est, a porttitor risus tempus sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vel imperdiet nisl, sit amet semper libero. Morbi aliquam ornare lobortis. Nam nec fermentum erat.</p>
                  
                  <h5>What does Phase 1 include?</h5>
                  <ul>
                    <li>Aenean pharetra diam in nisl mattis</li>
                    <li>Ut a lacinia metus</li>
                    <li>Nunc ullamcorper varius metus</li>
                    <li>Donec ut ligula vitae risus elementum tempor</li>
                    <li>Etiam porta massa sit amet purus viverra</li>
                  </ul>
                  
                  <p><strong>Aenean pharetra</strong> diam in nisl mattis, nec laoreet libero mollis. Ut a lacinia metus, non luctus diam. Nullam at nibh facilisis, ullamcorper ipsum ut, finibus magna. Etiam porta massa sit amet purus viverra, et lacinia lectus tempor.Aenean elit purus, imperdiet nec faucibus ut, finibus ac metus. Donec ut ligula vitae risus elementum tempor. Nunc ullamcorper varius metus, id ullamcorper dolor commodo ac.</p>
                  
                  <figure>
                    <img src="assets/images/graph.png" alt="The Pulpit Rock">
                  </figure>
                  
                  <p>Vestibulum a justo libero. Praesent vehicula id lectus semper hendrerit. Vestibulum tempus porta mi, sit amet blandit velit mattis nec. Nunc accumsan elementum gravida. Integer eu gravida massa. Maecenas ligula leo, feugiat a finibus ut, placerat a turpis. Ut viverra neque non suscipit imperdiet. Proin ut erat eleifend metus tristique rutrum ut at enim. Aliquam eget blandit dolor, ut interdum metus. <a href="project-single.html#">Maecenas eros orci</a> congue quis urna eget, condimentum semper risus. Etiam feugiat rutrum viverra.</p>
                  
                
                  
                  <p>Etiam id eleifend nisl. Fusce ultricies ultricies lorem, sit amet fringilla magna scelerisque non. Sed auctor facilisis est, a porttitor risus tempus sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vel imperdiet nisl, sit amet semper libero. Morbi aliquam ornare lobortis. Nam nec fermentum erat.</p>
                  
                  <h5>What else you can do for Birdcagewalk</h5>
                  <p>Aenean pharetra diam in nisl mattis, nec laoreet libero mollis. Ut a lacinia metus, non luctus diam. Nullam at nibh facilisis, ullamcorper ipsum ut, finibus magna. Etiam porta massa sit amet purus viverra, et lacinia lectus tempor.Aenean elit purus, imperdiet nec faucibus ut, finibus ac metus. Donec ut ligula vitae risus elementum tempor. Nunc ullamcorper varius metus, id ullamcorper dolor commodo ac.</p>

                  <p>Vestibulum a justo libero. Praesent vehicula id lectus semper hendrerit. Vestibulum tempus porta mi, sit amet blandit velit mattis nec. Nunc accumsan elementum gravida. Integer eu gravida massa. Maecenas ligula leo, feugiat a finibus ut, placerat a turpis. Ut viverra neque non suscipit imperdiet. Proin ut erat eleifend metus tristique rutrum ut at enim. Aliquam eget blandit dolor, ut interdum metus. Maecenas eros orci, congue quis urna eget, condimentum semper risus. Etiam feugiat rutrum viverra.</p>
                  
                </div>
                
                <!-- ************************ Costs Chart ************************ -->
                
                <div class="tab-pane costs-detail" id="costs">
                  <h5><i class="fa fa-tags"></i>Costs</h5>
                  <ul>
                    <li data-cost="420000" data-color="79FED1">Cost to build and plant boundary beds <span>$4,200,00</span></li>
                    <li data-cost="220000" data-color="5AF2BF">Cost to build and plant Natural Play garden <span>$2,200,00</span></li>
                    <li data-cost="220000" data-color="47DEAB">Cost to plant community orchard with 10 fruiting trees <span>$2,200,00</span></li>
                    <li data-cost="70000" data-color="34CC99">Other <span>$700,00</span></li>
                  </ul>
                  <div class="cost-total">Total <span>$ 9,300,00 <span>USD</span></span></div>
                  <div id="total-barChart"><!--Total cost bar chart--></div>
                </div>
                
                
                <!-- ************************ Donatur ************************ -->
                
                <div class="tab-pane" id="donatur">
                  <h5><i class="fa fa-comments"></i>Donatur</h5>
                  
                  <div class="detailBox">
                    <div class="actionBox">
                      <ul class="commentList">
                        <li>
                          <div class="commenterImage"><img src="<?php echo base_url(); ?>assets/images/funder_1.jpg" alt="Funder" /></div>
                          <div class="commentText">
                            <p class="">Rp5.947.000</p> <span class="date sub-text">Iriana Widodo</span> <span class="date sub-text">on July 24th, 2015</span>
                          </div>
                        </li>
                        <li>
                          <div class="commenterImage"><img src="<?php echo base_url(); ?>assets/images/funder_2.jpg" alt="Funder" /></div>
                          <div class="commentText">
                            <p class="">Rp5.947.000</p> <span class="date sub-text">Iriana Widodo</span> <span class="date sub-text">on July 24th, 2015</span>
                          </div>
                        </li>
                        <li>
                          <div class="commenterImage"><img src="<?php echo base_url(); ?>assets/images/funder_3.jpg" alt="Funder" /></div>
                          <div class="commentText">
                            <p class="">Rp5.947.000</p> <span class="date sub-text">Iriana Widodo</span> <span class="date sub-text">on July 24th, 2015</span>
                          </div>
                        </li>
                        <li>
                          <div class="commenterImage"><img src="<?php echo base_url(); ?>assets/images/funder_4.jpg" alt="Funder" /></div>
                          <div class="commentText">
                            <p class="">Rp5.947.000</p> <span class="date sub-text">Iriana Widodo</span> <span class="date sub-text">on July 24th, 2015</span>
                          </div>
                        </li>
                        <li>
                          <div class="commenterImage"><img src="<?php echo base_url(); ?>assets/images/funder_4.jpg" alt="Funder" /></div>
                          <div class="commentText">
                            <p class="">Rp5.947.000</p> <span class="date sub-text">Iriana Widodo</span> <span class="date sub-text">on July 24th, 2015</span>
                          </div>
                        </li>
                      </ul>
                      <p>&nbsp;</p>
                      <center><div class="popular-btn red"> <a href="#">Show More</a> </div></center>
                    </div>
                  </div>
                    
                </div>

                <!-- ************************ Pesan ************************ -->
                
                <div class="tab-pane" id="pesan">
                <div class="detailBox">
                    <div class="actionBox">
                    <h5>Sampaikan Pesanmu!</h5>
                    
                    <center><img src="<?php echo base_url(); ?>assets/images/pesan.png" alt="pesan"><br><br>
                    <h6>Pesan kamu akan dikirimkan ke Bandung Juara</h6></center>
                        <form class="form-inline" action="project-single.php" method="post">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Nama" />
                          </div>
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email" />
                          </div>
                          <div class="form-group">
                            <textarea class="form-control" placeholder="Pesan"></textarea>
                          </div>
                          <div class="form-group">
                            <button type="button" class="btn btn-5 red">KIRIM PESAN</button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>             
              </div>
            </div>
            <!-- Tabs End -->
          <!-- </div> -->
        </div>
        
        <!-- ************************ Right Side Area ************************ -->
        
        <div class="col-lg-4">
          <div class="sidebar">
            
            <!-- Project Progress -->
            
            <div class="sidebar-item">
              <div class="project-progress">
                <div class="popular-data data-single"> <img src="<?php echo base_url(); ?>assets/images/funder_1.jpg" alt="Funder" />
                  <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#ef6342" data-barsize="7.1">
                    <div class="pie_progress__number">0%</div>
                    <div class="pie_progress__label">Goal</div>
                  </div>
                </div>
                <div class="popular-details">
                  <ul>
                    <li class="last" style="width: 100%;"><strong><font size="6px">Rp4.909.278.000</font></strong> Terkumpul</li>
                  </ul>
                  <ul>
                    <li style="width: 50%"><strong>175</strong> Donatur</li>
                    <li style="width: 50%"><strong>12</strong> Hari Tersisa</li>
                  </ul>
                </div>
                <div class="clear"></div>
              </div>
            </div>
            
            <!-- Share Campaign -->
            
            <div class="sidebar-item">
              <div class="w-title">Donasi dan Bagikan!</div>
              <div style="padding:15px;">
                <p>Bantu pembuat campaign ini mencapai target nya!</p>
                <div id="affix2" data-spy="affix" data-offset-top="720">
                  <div style="text-align:center;"><a href="<?php echo site_url(); ?>donasi "><button type="button" class="btn btn-3 blue donasi" style="margin:5px 0px 5px 0px;">DONASI SEKARANG</button></a></div>
                </div>
                <div id="donasimobile">
                  <div id="affix3" data-spy="affix" data-offset-top="720">
                    <div style="text-align:center;"><a href="<?php echo site_url(); ?>donasi "><button type="button" class="btn btn-3 blue donasi" style="margin:5px 0px 5px 0px;">DONASI SEKARANG</button></a></div>
                  </div>
                </div>
                <button class="btn btn-facebook" > <i class="fa fa-facebook"></i> &nbsp; BAGIKAN KE FACEBOOK </button>
                <div class="side-box">
                  <form action="project-single.php">
                    <!-- <div class="form-group">
                      <label for="amount"><strong>Your Contribution</strong></label>
                      <input type="text" class="form-control" id="amount" placeholder="Enter an amount">
                    </div> -->
                    
                  </form>
                </div>
              </div>
            </div>
            
            
            <!-- informasi kontak -->
            
            <div class="sidebar-item">
              <div class="w-title">Informasi Kontak</div>
              <div style="padding:15px;">
                
                <a href=""><img src="<?php echo base_url(); ?>assets/images/email.png">&nbsp&nbsp bandung@bandung.com</a><br><br>
                <a href=""><img src="<?php echo base_url(); ?>assets/images/fb.png">&nbsp&nbsp facebook.com/bandungjuara</a><br><br>
                <a href=""><img src="<?php echo base_url(); ?>assets/images/tw.png">&nbsp&nbsp twitter.com/bandungjuara</a><br><br>
                <a href=""><img src="<?php echo base_url(); ?>assets/images/ph.png">&nbsp&nbsp 0811223345</a><br><br>
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