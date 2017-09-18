
  <!-- ************************ Page Content ************************ -->

  <style>
    th, td{
      padding: 5px;
    }
    .affix {
      top: 0;
      width: 100%;
      padding-left: 90px;
      padding-right: 100px;
      padding-bottom: 20px;
      background-color: #DE5434;
      z-index: 9999;
    }

    .affix + .container-fluid {
        padding-top: 70px;

    }
  </style>
  <section class="header-bottom">
    <article>
      <?php $campaigntitle = "Bantu adi sembuh!" ?>
      <div class="container" data-spy="affix" data-offset-top="7"><h3><?php echo $campaigntitle; ?></h3></div>
    </article>
  </section>
  
  <section class="gray">
    <article class="container faqpage">
      <div class="row">
      <br>
        <center><h2>Terima Kasih!</h2></center>
        <div class="col-lg-12">
          <div class="single-page">
          <?php 
            $kode = "234";
            $total = $nominal + $kode;
            $totalprint = number_format($total, 0, ",", ".");
            $nominalprint = number_format($nominal, 0, ",", ".");
           ?>
              <center>
                <h3>Apa yang harus dilakukan selanjutnya?</h3>
                <br><br><br>
                <table border="0">
                  <tr height="40px">
                    <td width="300px" align="left"><h5>Donasi Anda</h5></td>
                    <td width="100px" align="left"><h5>Rp</h5></td>
                    <td width="100px" align="right"><h5><?php echo $nominalprint; ?></h5></td>
                  </tr>
                  <tr height="40px">
                    <td width="300px" align="left"><h5>Kode Unik (akan didonasikan)</h5></td>
                    <td width="100px" align="left"><h5>Rp</h5></td>
                    <td width="100px" align="right"><h5><?php echo $kode; ?></h5></td>
                  </tr>
                  <tr height="40px" bgcolor="#DE5434">
                    <td width="300px" align="left"><h4>Total Pembayaran</h4></td>
                    <td width="100px" align="left"><h4>Rp</h4></td>
                    <td width="100px" align="right"><h4><?php echo $totalprint;?></h4></td>

                  </tr>

                </table>
                <br><br><hr><br><br>
                
                <table border="0">
                  <tr height="40px">
                    <td width="500px" colspan="2"><h5><font color="#DE5434">Transfer tepat Rp<?php echo $totalprint ?></font> agar donasi Anda otomatis terverifikasi,</h5>
                    <h5>kode unik yang Anda bayar, akan ikut didonasikan</h5></td>
                  </tr>
                  <tr height="40px">
                    
                  </tr>
                  <tr height="40px">
                    <td width="500px" colspan="2"><h5>Transfer ke:</h5></td>
                  </tr>
                  <?php 
                    if($payment == "bca"){
                   ?>
                  <tr height="40px">
                    <td width="200px"><img src="<?php echo base_url(); ?>assets/images/bca.png"></td>
                    <td width="300px"><h5>Transfer ke 09281901</h5>
                    <h5>a.n Sharing Happiness org</h5>
                    <h5>Bank Central Asia</h5></td>
                  </tr>
                  <?php 
                    }elseif ($payment == "bni") {
                  ?>
                  <tr height="40px">
                    <td width="200px"><img src="<?php echo base_url(); ?>assets/images/bni.png"></td>
                    <td width="300px"><h5>Transfer ke 206109281901555</h5>
                    <h5>a.n Sharing Happiness org</h5>
                    <h5>Bank Negara Indonesia</h5></td>
                  </tr>
                  <?php 
                    }elseif ($payment == "mandiri") {
                  ?>
                  <tr height="40px">
                    <td width="200px"><img src="<?php echo base_url(); ?>assets/images/mandiri.png"></td>
                    <td width="300px"><h5>Transfer ke 206109281901555</h5>
                    <h5>a.n Sharing Happiness org</h5>
                    <h5>Bank Mandiri</h5></td>
                  </tr>
                  <?php 
                    }elseif ($payment == "mandiris") {
                  ?>
                  <tr height="40px">
                    <td width="200px"><img src="<?php echo base_url(); ?>assets/images/mandiris.png"></td>
                    <td width="300px"><h5>Transfer ke 206109281901555</h5>
                    <h5>a.n Sharing Happiness org</h5>
                    <h5>Bank Mandiri Syariah</h5></td>
                  </tr>
                  <?php 
                    }elseif ($payment == "bnis") {
                  ?>
                  <tr height="40px">
                    <td width="200px"><img src="<?php echo base_url(); ?>assets/images/bnis.png"></td>
                    <td width="300px"><h5>Transfer ke 206109281901555</h5>
                    <h5>a.n Sharing Happiness org</h5>
                    <h5>Bank Negara Indonesia Syariah</h5></td>
                  </tr>
                  <?php 
                    }elseif ($payment == "muamalat") {
                  ?>
                  <tr height="40px">
                    <td width="200px"><img src="<?php echo base_url(); ?>assets/images/muamalat.png"></td>
                    <td width="300px"><h5>Transfer ke 206109281901555</h5>
                    <h5>a.n Sharing Happiness org</h5>
                    <h5>Bank Muamalat</h5></td>
                  </tr>
                  <?php 
                    } 
                  ?>
                  <tr height="40px">
                    
                  </tr>
                  <tr height="40px">
                    <td width="500px" colspan="2" align="center"><h5><i>Pastikan Anda sudah transfer sebelum 29 September 2017, pukul 15.59</i></h5>
                    </td>
                  </tr>
                </table>
                <br><br><hr><br><br>
                <button class="btn btn-facebook" style="width: 500px;"> <i class="fa fa-facebook"></i> &nbsp; BAGIKAN KE FACEBOOK </button>
              </center>
               
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