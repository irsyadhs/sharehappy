  <style>
    .blogsec{
      background: #fff;
      height: 400px;
      padding-top: 20px;
      margin-bottom: 70px;
    }
    .blogcontent{
      background: #ecf0f1;
      margin-top: 20px; 
      margin-bottom: 20px;
      border-radius: 7px;
      border-bottom: #bdc3c7 solid 5px; 
      width: 100%;
      height: 300px;
      color: #34495e;
      text-align: center;
    }
    .blogcontent img{
      padding: 5px 0px 5px 0px;
      height: 55%;
    }
    .blogcontent:hover{
      background: #f1fff1;
      opacity: 0.7;
      transition: 0.5s;
    }
    .tabkategori{
      margin-top: -10px;
      height: 600px;
      background: #fafafa;
    }

    .tabcatcontent{
      padding-left: 0px;
      padding-right: 40px;
      padding-top: 40px;
    }

    .tabcatcontent ul{
      margin-top: -10px;
      list-style: none;
    }
    .tabcatcontent ul li{
      padding-top: 10px;
      padding-bottom: 10px;
      padding-left: 15px;
      font-size: 15px;
      border-bottom: solid #ecf0f1 1px;
    }
    .tabcatcontent ul li:hover{
      background: #ebf5ee;
      transition: 0.4s;
    }
    .tabcatcontent ul a li:hover{
      color: #de5434;
    }

    .tabcatcontent ul a li i{
      font-size: 15px;
    }

    .tabcatcontent ul a li{
      color: #2c3e50;
    }

    .tabkategori h3{
      text-align: center;
      padding-top: 12px;
    }
    .tabcal{
      width: 100%;
      height: inherit;
      background: #ecf0f1;
    }
    .tabkategorimob{
      float: right;
      width: 50%;
      height: 200px;
      background: #f1f1f1;
      padding-top: 20px;
      /*margin-left: 120px;*/
      margin-bottom: 30px;
    }
    .tabkategorimob2{
      float: left;
      width: 50%;
      height: 200px;
      background: #f1f1f1;
      padding-top: 20px;
      /*margin-left: 120px;*/
      margin-bottom: 30px;
    }
    #tabkategorim h3{
      text-align: center;
      padding-bottom: 20px;
    }
    .tabkategorimob ul, .tabkategorimob2 ul{
      list-style: none;
      padding-top: 10px;
    }
    .tabkategorimob ul li, .tabkategorimob2 ul li{
      font-size: 15px;
      padding: 0px 5px 10px 5px;
    }
    .tabkategorimob ul a li, .tabkategorimob2 ul a li{
      color: #363333;
    }
    .tabkategorimob ul li:hover, .tabkategorimob2 ul li:hover{
      background: #fff;
      transition: 0.2s;
    }
    .tabkategorimob ul a li:hover, .tabkategorimob2 ul a li:hover{
      color: #de5434;
    }

    #buttoncat{
      border-radius: 5px;
      padding-bottom: 10px;
    }
    #kolomtampil1{
      display: inline-block;
    }
    #kolomtampil2{
      display: none;
    }
    #kolomtampilm{
      display: none;
    }
    #tabcal1{
      display: inline-block;
    }
    #tabcal2{
      display: none;
    }
    #tabcalm{
      display: none;
    }
    #tabkategoripc{
      display: inline-block;
    }
    #tabkategorim{
      display: none;
    }
    .tabcal h3{
      color: #de5434;
      margin-left: 130px;
      padding-top: 40px;
    }
    .tabform{
      padding-top: 30px;
      padding-left: 130px;
      padding-right: 90px;
      padding-bottom: 30px;
    }
    hr{
      margin-right: 90px;
      margin-left: 130px;
    }
    .tab-pane table tr td{
      font-size: 15px;
      font-weight: 600;
      padding-bottom: 7px;
      padding-right: 15px;
    }

    .nav-tabs li a{
      color: #de5434;
      font-size: 15px;
    }

    .footer-content1{
      display: inline-block;
    }
    .footer-content2{
      display: none;
    }
    .index-video{
      float: left;
      padding-right: 45px;
      padding-left: 45px;
      padding-top: 12px;
      height: 310px;
      background: url('<?php echo base_url(); ?>assets/images/imac.png') no-repeat center center;
    }
    .index-bottom{
      float: left;
      text-align: left;
      padding-left: 150px;
    }
    .index-video2{
      padding-right: 45px;
      padding-left: 45px;
      padding-top: 12px;
      height: 310px;
      background: url('<?php echo base_url(); ?>assets/images/imac.png') no-repeat center center;
    }
    .index-bottom2{
      float: left;
      text-align: left;
      padding-top: 50px;
      padding-left: 50px;
    }

    td#kolomtampilm{
      width: 350px;
    }
    table{
      padding-top: 20px;
    }
    table tr td font{
      color: #d35400;
    }

    @media only screen and (max-width: 300px){
      .footer-content1{
        display: none;
      }
      .footer-content2{
        display: none;
      } 
    }
    @media only screen and (max-width: 400px){
      .blogcontent img{
        padding: 0px 0px 0px 0px;
        height: 30%;
      }
      .tabform{
        padding-left: 100px !important;
        padding-right: 0px !important;
      }
      #kolomtampil1{
        display: none;
      }
      #kolomtampil2{
        display: none !important;
      }
      #kolomtampilm{
        display: inline-block !important;
      }
      #tabcal1{
        display: none;
      }
      #tabcal2{
        display: none!important;
      }
      #tabcalm{
        display: inline-block!important;
      }
    }

    @media only screen and (max-width: 450px){
      .popular-data, .popular-details{
        text-align: center;
        padding-left: 30px;
        font-size: 13px !important;
      }

    }

    @media only screen and (max-width: 500px){
      .blogcontent img{
        padding: 0px 0px 0px 0px;
        height: 40%!important;
      }
      .tabcal h3{
        font-size: 22px;
      }
      
      .index-video2{
        background: url('<?php echo base_url(); ?>assets/images/imac3.png') no-repeat center center;
        padding-top: 43px !important;
      }
      .footer-content1{
        display: none;
      }
      .footer-content2{
        display: inline-block;
      }
      #iframemobile{
        width: 283px !important;
        height: 160px !important; 
      }
    }

     @media only screen and (max-width: 600px){
      .tabpanel{
        margin-left: 0px !important;
      }

      #tabkategoripc{
        display: inline-block!important;
      }
      #tabkategorim{
        display: none!important;
      }
      #rowpopular.row{
        margin-left: 25px !important;
        margin-right: -35px !important;
      }
      #popularcol.col-xs-12{
        width: 85% !important;
      }
      
    }

    @media only screen and (max-width: 768px){
      .tabkategorimob2{
        padding-left: 100px;
      }
      .popular-data, .popular-details{
        text-align: center;
        padding-left: 30px;
        font-size: 17px;
      }
      .hidden-sm{
        display: none;
      }
      .index-video2{
        padding-top: 12px;
      }
      .index-bottom2{
        padding-left: 0px;
      }
      .footer-content1{
        display: none;
      }
      .footer-content2{
        display: inline-block;
      }
      #iframemobile{
        width: 357px;
        height: 201px; 
      }
      .tabpanel{
        margin-left: 100px;
      }
      #tabcal1{
        display: none;
      }
      #tabcal2{
        display: inline-block;
      }
      #tabcalm{
        display: none;
      }
      #kolomtampil1{
      display: none;
      }
      #kolomtampil2{
        display: inline-block;
      }
      #kolomtampilm{
        display: none;
      }

    }

    @media only screen and (max-width: 990px){
      .blogcontent img{
        padding: 10px 0px 0px 0px;
        height: 75%;
      }
      iframe{
        width: 326px;
        height: 183px; 
      }
      .index-video{
        height: 285;
        width: 50%;
        background: url('<?php echo base_url(); ?>assets/images/imac2.png') no-repeat center center;
        padding-right: 0px;
        padding-left: 0px;
        padding-top: 23px;
      }
      .index-bottom{
        margin-left: 0px;
        width: 50%; 
      }
      
      .tabcal h3{
        margin-left: 70px;
        padding-top: 50px;
      }
      .tabform{
        padding-left: 70px;
        padding-right: 50px;
      }
      hr{
        margin-right: 30px;
        margin-left: 50px;
      }
    }
    @media only screen and (max-width: 1200px){
      #tabkategoripc{
        display: none;
      }
      #tabkategorim{
        display: inline-block;
      }
      
      .index-video{

      }
      .index-bottom{
        padding-left: 0px;
      }
    }
    @media only screen and (max-width: 1020px){
      #rowpopular.row{
        margin-left: -25px;
        margin-right: -25px;
      }
      #popularcol.col-lg-3{
        width: 33%;
        padding-right: 5px;
        padding-left: 5px;
      }
      .index-video{

      }
      .index-bottom{
        padding-left: 0px;
      }
    }
  </style>
  <!-- <script type="text/javascript">
    var myNav = document.getElementById("navscroll");

    window.onscroll = function() {
      "use strict";
      if (document.body.scrollTop >= 20 || document.documentElement.scrollTop >= 20) {
        myNav.classList.remove("scrollf");
        myNav.classList.add("scrollt");
      } else {
        myNav.classList.remove("scrollt");
        myNav.classList.add("scrollf");
      }
    };
  </script> -->


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
                    <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#de5434" data-barsize="9.1" data-size="148" style="width:148px; margin:0px 106px; float: left; background: url('<?php echo base_url(); ?>assets/images/circle-fill-top.png') no-repeat center center;">
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
                  </dsiv>

                </div>
              </li>  
                
          
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
  <div class="tabcal">
    <h3>Tunaikan Kewajiban</h3>
    <hr>
    <div class="tabform">
      <div id="basic-data" class="form-wizard active">
        <div class="tabpanel">
          <ul class="nav nav-tabs pstabs" id="tabcal1">
            <li class="active"><a href="index.php#zakatp">Zakat Profesi</a></li>
            <li><a href="index.php#zakats">Zakat Simpanan</a></li>
            <li><a href="index.php#zakate">Zakat Emas</a></li>
            <li><a href="index.php#ins">Infaq / Sedekah</a></li>
          </ul>
          <ul class="nav nav-tabs pstabs" id="tabcal2">
            <li class="active"><a href="index.php#zakatp">Z.Profesi</a></li>
            <li><a href="index.php#zakats">Z. Simpanan</a></li>
            <li><a href="index.php#zakate">Z. Emas</a></li>
            <li><a href="index.php#ins">Infaq</a></li>
          </ul>
          <ul class="nav nav-tabs pstabs" id="tabcalm">
            <li class="active"><a href="index.php#zakatp">ZP</a></li>
            <li><a href="index.php#zakats">ZS</a></li>
            <li><a href="index.php#zakate">ZE</a></li>
            <li><a href="index.php#ins">In</a></li>
          </ul>
          
          <br>
          <div class="tab-content">
            <div class="tab-pane active" id="zakatp">
              <?php echo form_open('hitungzakatp'); ?>
              <table id="kolomtampil1">
                <tr>
                  <td colspan="2">Penghasilan Perbulan</td>
                  <td colspan="2">Penghasilan Lainnya</td>
                  <td colspan="2">Hutang Jatuh Tempo</td>
                  <td colspan="2">Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td>+</td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                  <td>-</td>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td>=</td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                  <td>
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampil2">
                <tr>
                  <td>Penghasilan Perbulan</td>
                  <td>Penghasilan Lainnya</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                </tr>
                <tr>
                  <td>Hutang Jatuh Tempo</td>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampilm">
                <tr>
                  <td>Zakat Penghasilan</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" placeholder="penghasilan perbulan"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="incoth" placeholder="penghasilan lainnya"></td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem" placeholder="hutang jatuh tempo"></td>
                </tr>
                <tr>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
            </div>
            <div class="tab-pane" id="zakats">
              <?php echo form_open('hitungzakats'); ?>
              <table id="kolomtampil1">
                <tr>
                  <td colspan="2">Penghasilan Perbulan</td>
                  <td colspan="2">Penghasilan Lainnya</td>
                  <td colspan="2">Hutang Jatuh Tempo</td>
                  <td colspan="2">Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td>+</td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                  <td>-</td>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td>=</td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                  <td>
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampil2">
                <tr>
                  <td>Penghasilan Perbulan</td>
                  <td>Penghasilan Lainnya</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                </tr>
                <tr>
                  <td>Hutang Jatuh Tempo</td>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampilm">
                <tr>
                  <td>Zakat Simpanan</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" placeholder="penghasilan perbulan"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="incoth" placeholder="penghasilan lainnya"></td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem" placeholder="hutang jatuh tempo"></td>
                </tr>
                <tr>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
            </div>
            <div class="tab-pane" id="zakate">
              <?php echo form_open('hitungzakate'); ?>
              <table id="kolomtampil1">
                <tr>
                  <td colspan="2">Penghasilan Perbulan</td>
                  <td colspan="2">Penghasilan Lainnya</td>
                  <td colspan="2">Hutang Jatuh Tempo</td>
                  <td colspan="2">Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td>+</td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                  <td>-</td>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td>=</td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                  <td>
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampil2">
                <tr>
                  <td>Penghasilan Perbulan</td>
                  <td>Penghasilan Lainnya</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                </tr>
                <tr>
                  <td>Hutang Jatuh Tempo</td>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampilm">
                <tr>
                  <td>Zakat Emas</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" placeholder="penghasilan perbulan"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="incoth" placeholder="penghasilan lainnya"></td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem" placeholder="hutang jatuh tempo"></td>
                </tr>
                <tr>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
            </div>
            <div class="tab-pane" id="ins">
              <?php echo form_open('hitungins'); ?>
              <table id="kolomtampil1">
                <tr>
                  <td colspan="2">Penghasilan Perbulan</td>
                  <td colspan="2">Penghasilan Lainnya</td>
                  <td colspan="2">Hutang Jatuh Tempo</td>
                  <td colspan="2">Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td>+</td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                  <td>-</td>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td>=</td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                  <td>
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampil2">
                <tr>
                  <td>Penghasilan Perbulan</td>
                  <td>Penghasilan Lainnya</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon"></td>
                  <td><input type="text" class="form-control" name="incoth"></td>
                </tr>
                <tr>
                  <td>Hutang Jatuh Tempo</td>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem"></td>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
              <table id="kolomtampilm">
                <tr>
                  <td>Infaq Sedekah</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" placeholder="penghasilan perbulan"></td>
                </tr>
                <tr>
                    <td><input type="text" class="form-control" name="incoth" placeholder="penghasilan lainnya"></td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="hujatem" placeholder="hutang jatuh tempo"></td>
                </tr>
                <tr>
                  <td>Kewajiban Zakat</td>
                </tr>
                <tr>
                  <td><input type="text" class="form-control" name="incmon" disabled="disabled"></td>
                </tr>
                <tr>
                  <td colspan="2" align="center">
                    <?php 
                      echo form_submit('submit', 'Tunaikan Zakat', 'class="btn btn-4 red"');
                      echo form_close();
                    ?>
                  </td>
                </tr>
              </table>
            </div>
            
          </div>
        </div>         
      </div>
    </div>
    
  </div>
  
  <section class="gray">
    <div class="col-lg-3 hidden-md col-sm-12 col-xs-12" id="tabkategoripc">
      <div class="tabkategori">
        <h3>Kategori</h3>
        <div class="tabcatcontent">
          <ul>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-heart"></i>&nbsp&nbsp&nbsp Kesehatan</li></a>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-graduation-cap"></i>&nbsp&nbsp Pendidikan</li></a>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-users"></i>&nbsp&nbsp&nbsp Pemberdayaan</li></a>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-star"></i>&nbsp&nbsp&nbsp Kemanusiaan</li></a>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-building"></i>&nbsp&nbsp&nbsp Pembangunan Masjid</li></a>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-user"></i>&nbsp&nbsp&nbsp Yatim & Dhuafa</li></a>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-wrench"></i>&nbsp&nbsp&nbsp Infrastruktur</li></a>
            <a href="<?php echo base_url(); ?>projects"><li><i class="icon fa fa-ambulance"></i>&nbsp&nbsp Bencana Alam</li></a>
          </ul>
        </div>
      </div>
    </div>
    <div class="row" id="tabkategorim">
      <h3>Kategori</h3>
      <div class="tabkategorimob">
        <ul>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-heart"></i><span>&nbsp&nbsp&nbsp Kesehatan</span></li></a>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-graduation-cap"></i><span>&nbsp&nbsp Pendidikan</span></li></a>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-users"></i><span>&nbsp&nbsp&nbsp Pemberdayaan</span></li></a>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-building"></i><span>&nbsp&nbsp&nbsp&nbsp Pembangunan Masjid</span></li></a>
          
        </ul>
      </div>
      <div class="tabkategorimob2">
        <ul>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-star"></i><span>&nbsp&nbsp&nbsp Kemanusiaan</span></li></a>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-ambulance"></i><span>&nbsp&nbsp Bencana Alam</span></li></a>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-wrench"></i><span>&nbsp&nbsp&nbsp Infrastruktur</span></li></a>
          <a href="<?php echo base_url(); ?>projects"><li class="col-md-6 col-sm-6 col-xs-12"><i class="icon fa fa-user"></i><span>&nbsp&nbsp&nbsp Yatim & Dhuafa</span></li></a>
        </ul>
      </div>
    </div>
    <article class="container main" id="popular">
      <h3>Program Pilihan</h3>
      <div class="row" id="rowpopular">
        <?php 
        $title1 = "Help us to save the nature";
        $title2 = "Charity hospital";
        $title3 = "We Can Build Our Church";
        $title4 = "Flood affected people";
        for($i=1;$i<4;$i++){
        ?>
          <div class="col-lg-3 col-md-3 col-sm-8 col-xs-12" id="popularcol">
          <?php $campaigntitle = ${"title".$i}; ?>
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
                <div class="pie_progress" role="progressbar" data-goal="75" data-barcolor="#de5434" data-barsize="7.1">
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
  <div class="row"> 
  <div class="blogsec">
    <article class="container">
      <center><h3>Happiness Story</h3></center>
        <div class="col-xl-3 col-lg-3 col-xs-6 col-sm-6">
          <a href="<?php echo base_url(); ?>Home">
            <div class="blogcontent">
              <img src="<?php echo base_url(); ?>assets/images/popular_1.jpg">
              <br>
              <h5>Alhamdulillah</h5>
              <br>
              akhirnya... kami bisa.... alhamdulillah

            </div>
          </a>
        </div>
      <div class="col-xl-3 col-lg-3 col-xs-6 col-sm-6">
        <a href="<?php echo base_url(); ?>Home">
          <div class="blogcontent">
            <img src="<?php echo base_url(); ?>assets/images/popular_2.jpg">
            <br>
            <h5>Alhamdulillah</h5>
            <br>
            akhirnya... kami bisa.... alhamdulillah
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-xs-6 col-sm-6">
        <a href="<?php echo base_url(); ?>Home">
          <div class="blogcontent">
            <img src="<?php echo base_url(); ?>assets/images/popular_3.jpg">
            <br>
            <h5>Alhamdulillah</h5>
            <br>
            akhirnya... kami bisa.... alhamdulillah
          </div>
        </a>
      </div>
      <div class="col-xl-3 col-lg-3 col-xs-6 col-sm-6 hidden-md">
        <a href="<?php echo base_url(); ?>Home">
          <div class="blogcontent">
            <img src="<?php echo base_url(); ?>assets/images/popular_4.jpg">
            <br>
            <h5>Alhamdulillah</h5>
            <br>
            akhirnya... kami bisa.... alhamdulillah
          </div>
        </a>
      </div>
      
    </article>
  </div>
</div>
<div class="row" style="padding-bottom: 15px;">
  <div class="popular-btn red"> <a href="projects.html">See More</a> </div>
</div>
<div class="clear"></div>
  <section class="send-us">
    <div class="row">
    <article class="container">
      <h3>Ingin menggalang dana atau berdonasi?</h3>
      <div class="footer-content1">
        <div class="index-video">
         <iframe width="357" height="201" src="https://www.youtube.com/embed/97-Rw_STcxg">
          </iframe> 
        </div>
        <div class="index-bottom">
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
          <br><br><br>
          <a href="<?php echo site_url(); ?>newcampaign" class="btn btn-4 red">Create Campaign</a>
        </div>
      </div>
      <div class="footer-content2">
        <div class="index-video2">
         <iframe id="iframemobile" src="https://www.youtube.com/embed/97-Rw_STcxg">
          </iframe> 
        </div>
        <div class="index-bottom2">
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
            <tr>
              <td colspan="2"></td>
            </tr>
          </table>
          <br><br><br>
          <center><a href="<?php echo site_url(); ?>newcampaign" class="btn btn-4 red">Create Campaign</a></center>
        </div>
      </div>
    </article>
  </div>
  </section>
  <div>