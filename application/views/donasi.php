  <style>
    tr{
      height: 60px;
    }
    th, td{
      padding: 8px;
    }

  /* Note: Try to remove the following lines to see the effect of CSS positioning */
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

  #tabmobile{
    display: none;
  }
  #tabmobile2{
    display: none;
  }
  #tabnormal{
    display: inline-block;
  }
  table.wide-table { width:500px; }

  

  @media only screen and (max-width: 990px){
    table.wide-table { width:400px; }
  }

  @media only screen and (max-width: 500px){
    table.wide-table { width:300px; }
    #tabmobile{
      display: inline-block;
    }
    #tabmobile2{
      display: none;
    }
    #tabnormal{
      display: none;
    }
  }

  @media only screen and (max-width: 350px){
    table.wide-table { width:200px; }
    #tabmobile{
      display: none;
    }
    #tabmobile2{
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
      <?php $campaigntitle = "Bantu adi sembuh!" ?>
      <div class="container" data-spy="affix" data-offset-top="7"><h3><?php echo $campaigntitle; ?></h3></div>
    </article>
  </section>
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container">
      
      <!-- ************************ Form Area Start ************************ -->
      
      <div class="start-project">
        <div class="start-content register">
          <center><h4>Masukkan Nominal Donasi</h4></center>
          <br>
          <?php if ($this->session->flashdata('message')) {
              echo "<h6><center>".$this->session->flashdata('message')."</center></h6>";
            } ?>
          <?php echo form_open('Proses/donated'); ?>
            <div id="basic-data" class="form-wizard active">
              <div class="form-group">
                <h6>Nominal donasi</h6>
                <input type="text" value="" class="form-control" placeholder="Mimimal 20000, kelipatan 1000" name="nominal" required>
              </div>
              <div class="form-group">
                <h6>Nomor telepon</h6>
                <input type="text" value="" class="form-control" placeholder="08xxx" name="tlp" required>
              </div>
              <div class="form-group">
                <h6>Pesan</h6>
                <textarea class="form-control" placeholder="Tuliskan pesan anda yang sesuai dengan isi campaign (opsional)" name="komentar"></textarea>
              </div>
              <div class="form-group">
                <h6>Metode Pembayaran</h6>
                <div class="tabpanel">
                  <ul class="nav nav-tabs pstabs" id="tabnormal">
                    <li class="active"><a href="donasi.php#transfer">Transfer Bank</a></li>
                    <li><a href="donasi.php#debit">Online Debit</a></li>
                    <li><a href="donasi.php#kredit">Kartu Kredit</a></li>
                    <li><a href="donasi.php#wallet">Wallet</a></li>
                    <!-- <li><a href="project-single.php#comments">Comments <i>57</i></a></li> -->
                  </ul>
                  <ul class="nav nav-tabs pstabs" id="tabmobile">
                    <li class="active"><a href="donasi.php#transfer">Transfer</a></li>
                    <li><a href="donasi.php#debit">Debit</a></li>
                    <li><a href="donasi.php#kredit">K. Kredit</a></li>
                    <li><a href="donasi.php#wallet">Wallet</a></li>
                    <!-- <li><a href="project-single.php#comments">Comments <i>57</i></a></li> -->
                  </ul>
                  <ul class="nav nav-tabs pstabs" id="tabmobile2">
                    <li class="active"><a href="donasi.php#transfer">Trf</a></li>
                    <li><a href="donasi.php#debit">Dbt</a></li>
                    <li><a href="donasi.php#kredit">CC</a></li>
                    <li><a href="donasi.php#wallet">Wlt</a></li>
                    <!-- <li><a href="project-single.php#comments">Comments <i>57</i></a></li> -->
                  </ul>
                  
                  <div class="tab-content">
                    <div class="tab-pane active" id="transfer">
                      
                      <!-- <select name="payment" class="form-control arrow-down">
                        <option value="bca" selected>Transfer BCA</option>
                        <option value="bri">Transfer BRI</option>
                        <option value="man">Transfer Mandiri</option>
                        <option value="bni">Transfer BNI</option>
                        <option value="bris">Transfer BRI Syariah</option>
                        <option value="mans">Transfer Mandiri Syariah</option>
                        <option value="ebank">e-Banking</option>
                      </select> -->
                      <table border="0" class="wide-table">
                        <tr>
                          <td width="4%"><input type="radio" value="bca" class="form-control" name="payment" checked="checked"></td>
                          <td width="46%"><img src="<?php echo base_url(); ?>assets/images/bca.png"></td>
                          <td width="4%"><input type="radio" value="bni" class="form-control" name="payment"></td>
                          <td width="46%"><img src=""><img src="<?php echo base_url(); ?>assets/images/bni.png"></td>
                        </tr>
                        <tr>
                          <td width="4%"><input type="radio" value="mandiri" class="form-control" name="payment"></td>
                          <td width="46%"><img src="<?php echo base_url(); ?>assets/images/mandiri.png"></td>
                          <td width="4%"><input type="radio" value="mandiris" class="form-control" name="payment"></td>
                          <td width="46%"><img src=""><img src="<?php echo base_url(); ?>assets/images/mandiris.png"></td>
                        </tr>
                        <tr>
                          <td width="4%"><input type="radio" value="bnis" class="form-control" name="payment"></td>
                          <td width="46%"><img src="<?php echo base_url(); ?>assets/images/bnis.png"></td>
                          <td width="4%"><input type="radio" value="muamalat" class="form-control" name="payment"></td>
                          <td width="46%"><img src=""><img src="<?php echo base_url(); ?>assets/images/muamalat.png"></td>
                        </tr>
                      </table>
                      
                    </div>
                    <div class="tab-pane" id="debit">
                      <table border="0">
                        <tr>
                          <td width="4%"><input type="radio" value="mandirie" class="form-control" name="payment"></td>
                          <td width="46%"><img src="<?php echo base_url(); ?>assets/images/mandirie.png"></td>
                          <td width="4%"><input type="radio" value="bcae" class="form-control" name="payment"></td>
                          <td width="46%"><img src=""><img src="<?php echo base_url(); ?>assets/images/bcae.png"></td>
                        </tr>
                        <tr>
                          <td width="4%"><input type="radio" value="brie" class="form-control" name="payment"></td>
                          <td width="46%"><img src="<?php echo base_url(); ?>assets/images/brie.png"></td>
                          <td width="4%"><input type="radio" value="muamalate" class="form-control" name="payment"></td>
                          <td width="46%"><img src=""><img src="<?php echo base_url(); ?>assets/images/muamalate.png"></td>
                        </tr>
                        
                      </table>
                    </div>
                    <div class="tab-pane" id="kredit">
                      <table border="0">
                        <tr>
                          <td width="4%"><input type="radio" value="creditcard" class="form-control" name="payment"></td>
                          <td width="46%"><img src="<?php echo base_url(); ?>assets/images/creditcard.png"></td>
                          
                        </tr>
                       
                      </table>
                    </div>
                    <div class="tab-pane" id="wallet">
                      <table border="0">
                        <tr>
                          <td width="4%"><input type="radio" value="xlw" class="form-control" name="payment"></td>
                          <td width="46%"><img src="<?php echo base_url(); ?>assets/images/xlw.png"></td>
                          <td width="4%"><input type="radio" value="dokuw" class="form-control" name="payment"></td>
                          <td width="46%"><img src=""><img src="<?php echo base_url(); ?>assets/images/dokuw.png"></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
                
              </div>
              <input type="checkbox" name="anom" value="anonim"> Donasi sebagai anonim
              <br><br><br>
              <p>Dengan berdonasi, saya setuju terhadap <a href="#">ketentuan yang berlaku</a></p>
            </div>
            <center>
              <?php
                  echo form_submit('submit', 'DONASI', 'class="btn btn-4 red"');
                  echo form_close();
                ?>
            </center>
        </div>
      </div>
      
      <!-- ************************ Form Area End ************************ -->
      
    </article>
  </section>