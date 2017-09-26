  <style>
    tr{
      height: 60px;
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
  table.wide-table { width:450px; }

  table.wide-table td{
    margin:5px;
    padding:8px;
  }
  .wide-table td .swatch-img {
    cursor:pointer;
    display:block;
  }
  input[type=radio] {
    display: none;
  }
  input:checked + label img {
    border:5px solid #DE5434;
  }

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
  
  
  <?php 
  if(!isset($_SESSION['login'])){
    $load = array(
      'login' => FALSE
    );
    $this->session->set_userdata( $load );
  }else{
    $email = $_SESSION['email'];
    $nama = $_SESSION['name'];
    $tlp = $_SESSION['tlp'];
  }
  ?>

  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <?php $campaigntitle = "Bantu adi sembuh!" ?>
      <div class="container" data-spy="affix" data-offset-top="7"><h3><?php echo $campaigntitle; ?></h3></div>
    </article>
  </section>
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
        <?php 
          echo validation_errors();
        ?>
        
    <article class="container">
      
      <!-- ************************ Form Area Start ************************ -->
      
      <div class="start-project">
        <div class="start-content register">
          <center><h4>Masukkan Nominal Donasi</h4></center>
          <br><br>
          
          
          <center>
          <div id="basic-data" class="form-wizard active">
            <?php echo form_open('nextdonasi'); ?>
            <div class="tabpanel">
              <ul class="nav nav-tabs pstabs" id="tabnormal">
                <li class="active"><a href="donasi.php#nominal">Informasi dan Nominal</a></li>
                <li class="disabled"><a href="#">Metode Pembayaran</a></li>
              </ul>
              <hr>
              <br>
              <div class="tab-content">
                <div class="tab-pane active" id="nominal">
                  <div class="form-group">
                    <h6>Nominal donasi</h6>
                    <input type="text" name="nominal" value="<?php echo set_value('nominal'); ?>" class="form-control" placeholder="Mimimal 20000, kelipatan 1000">
                  </div>
                  <input type="checkbox" name="anom" value="anonim"> Donasi sebagai anonim
                  <?php 
                    if($_SESSION['login'] == FALSE){
                   ?>
                  <div class="form-group">
                    <h6>Nama Lengkap</h6>
                    <input type="text" name="nama" value="<?php echo set_value('nama'); ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <div class="form-left">
                      <h6>Nomor telepon</h6>
                      <input type="text" name="tlp" value="<?php echo set_value('tlp'); ?>" class="form-control" placeholder="08xxx" >
                    </div>
                    <div class="form-right">
                      <h6>Email</h6>
                      <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control">
                    </div>
                    <div class="clear"></div>
                  </div>
                  <?php 
                    }else{
                      echo form_hidden('email', $email);
                      echo form_hidden('nama', $nama);
                      echo form_hidden('tlp', $tlp);
                    }
                   ?>
                  
                  
                </div>
                <div class="tab-pane disabled" id="payment">
                  <div class="form-group">
                    <h6>Metode Pembayaran</h6>
                    <div class="tabpanel">
                      <ul class="nav nav-tabs pstabs" id="tabnormal">
                        <li class="active"><a href="donasi.php#transfer">Transfer Bank</a></li>
                        <li><a href="donasi.php#debit">Online Debit</a></li>
                        <li><a href="donasi.php#kredit">Kartu Kredit</a></li>
                        <li><a href="donasi.php#wallet">Wallet</a></li>
                      </ul>
                      <ul class="nav nav-tabs pstabs" id="tabmobile">
                        <li class="active"><a href="donasi.php#transfer">Transfer</a></li>
                        <li><a href="donasi.php#debit">Debit</a></li>
                        <li><a href="donasi.php#kredit">K. Kredit</a></li>
                        <li><a href="donasi.php#wallet">Wallet</a></li>
                      </ul>
                      <ul class="nav nav-tabs pstabs" id="tabmobile2">
                        <li class="active"><a href="donasi.php#transfer">Trf</a></li>
                        <li><a href="donasi.php#debit">Dbt</a></li>
                        <li><a href="donasi.php#kredit">CC</a></li>
                        <li><a href="donasi.php#wallet">Wlt</a></li>
                      </ul>
                      
                      <div class="tab-content">
                        <div class="tab-pane active" id="transfer">
                          <table border="0" class="wide-table">
                            <tr>
                              <td width="4%">
                                <input type="radio" value="mandiri" class="form-control" checked="checked" name="payment" id="mandiri">
                              </td>
                              <td width="46%">
                                <label for="mandiri">
                                  <img src="<?php echo base_url(); ?>assets/images/mandiri.png" class="full swatch-img" alt="mandiri" title="mandiri">
                                </label>
                              </td>
                              <td width="4%"><input type="radio" value="mandiris" class="form-control" name="payment" id="mandiris"></td>
                              <td width="46%">
                                <label for="mandiris">
                                  <img src="<?php echo base_url(); ?>assets/images/mandiris.png" class="full swatch-img" alt="mandiri syariah" title="Mandiri Syariah">
                                </label>
                              </td>
                            </tr>
                            <tr>
                              <td width="4%"><input type="radio" value="bca" class="form-control" name="payment" id="bca"></td>
                              <td width="46%">
                                <label for="bca">
                                  <img src="<?php echo base_url(); ?>assets/images/bca.png" class="full swatch-img" alt="bca" title="bca">
                                </label>
                              </td>
                              <td width="4%"><input type="radio" value="muamalat" class="form-control" name="payment" id="muamalat"></td>
                              <td width="46%">
                                <label for="muamalat">
                                  <img src="<?php echo base_url(); ?>assets/images/muamalat.png" class="full swatch-img" alt="muamalat" title="Muamalat">
                                </label>
                              </td>
                            </tr>
                            <tr>
                              <td width="4%"><input type="radio" value="bni" class="form-control" name="payment" id="bni"></td>
                              <td width="46%">
                                <label for="bni">
                                  <img src="<?php echo base_url(); ?>assets/images/bni.png" class="full swatch-img" alt="bni" title="bni">
                                </label>
                              </td>
                              <td width="4%"><input type="radio" value="bnis" class="form-control" name="payment" id="bnis"></td>
                              <td width="46%">
                                <label for="bnis">
                                  <img src="<?php echo base_url(); ?>assets/images/bnis.png" class="full swatch-img" alt="bni syariah" title="BNI Syariah">
                                </label>
                              </td>
                            </tr>
                          </table>
                          
                        </div>
                        <div class="tab-pane" id="debit">
                          <table border="0" class="wide-table">
                            <tr>
                              <td width="4%"><input type="radio" value="mandirie" class="form-control" name="payment" id="mandirie"></td>
                              <td width="46%">
                                <label for="mandirie">
                                  <img src="<?php echo base_url(); ?>assets/images/mandirie.png" class="full swatch-img" alt="mandiri clickpay" title="Mandiri ClickPay">
                                </label>
                              </td>
                              <td width="4%">
                                <input type="radio" value="bcae" class="form-control" name="payment" id="bcae">
                              </td>
                              <td width="46%">
                                <label for="bcae">
                                  <img src="<?php echo base_url(); ?>assets/images/bcae.png" class="full swatch-img" alt="BCA Klikpay" title="BCA Klikpay">
                                </label>
                              </td>
                            </tr>
                            <tr>
                              <td width="4%"><input type="radio" value="brie" class="form-control" name="payment" id="brie"></td>
                              <td width="46%">
                                <label for="brie">
                                  <img src="<?php echo base_url(); ?>assets/images/brie.png" class="full swatch-img" alt="EPay BRI" title="EPay BRI">
                                </label>
                              </td>
                              <td width="4%"><input type="radio" value="muamalate" class="form-control" name="payment" id="muamalate"></td>
                              <td width="46%">
                                <label for="muamalate">
                                  <img src="<?php echo base_url(); ?>assets/images/muamalate.png" class="full swatch-img" alt="IB muamalat" title="IB Muamalat">
                                </label>
                              </td>
                            </tr>
                          </table>
                        </div>
                        <div class="tab-pane" id="kredit">
                          <table border="0" class="wide-table">
                            <tr>
                              <td width="4%"><input type="radio" value="creditcard" class="form-control" name="payment" id="cc"></td>
                              <td width="46%">
                                <label for="cc">
                                  <img src="<?php echo base_url(); ?>assets/images/creditcard.png" class="full swatch-img" alt="Credit Card" title="Credit Card">
                                </label>
                              </td>
                            </tr>
                           
                          </table>
                        </div>
                        <div class="tab-pane" id="wallet">
                          <table border="0" class="wide-table">
                            <tr>
                              <td width="4%"><input type="radio" value="xlw" class="form-control" name="payment" id="xlw"></td>
                              <td width="46%">
                                <label for="xlw">
                                  <img src="<?php echo base_url(); ?>assets/images/xlw.png" class="full swatch-img" alt="XL Tunai" title="XL Tunai">
                                </label>
                              </td>
                              <td width="4%"><input type="radio" value="dokuw" class="form-control" name="payment" id="dokuw"></td>
                              <td width="46%">
                                <label for="dokuw">
                                  <img src="<?php echo base_url(); ?>assets/images/dokuw.png" class="full swatch-img" alt="Doku Wallet" title="Doku Wallet">
                                </label>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <h6>Pesan</h6>
                    <textarea class="form-control" placeholder="Tuliskan pesan anda yang sesuai dengan isi campaign (opsional)" name="komentar"></textarea>
                  </div>
                  <p>Dengan berdonasi, saya setuju terhadap <a href="#">ketentuan yang berlaku</a></p>
                  <?php
                  echo form_submit('submit', 'DONASI', 'class="btn btn-4 red"');
                  echo form_close();
                ?>
                </div>
              </div>
            </div>
            <center>
              
            </center>   
            </div>
            </center>
                       
        </div>
      </div>
      
      <!-- ************************ Form Area End ************************ -->
      
    </article>
  </section>