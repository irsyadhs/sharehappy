  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container faqpage">
      <div class="row">
        <br>
        <center><h3>Log in to your account</h3></center>
        <div class="col-lg-12">
          <div class="single-page">
            <?php if ($this->session->flashdata('message')) {
              echo "<center>".$this->session->flashdata('message')."</center>";
            } ?>
            <div class="start-project">
              <div class="start-content register">
                <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Log in with Facebook </button>
                <hr>
                <center><img src="<?php echo base_url(); ?>assets/images/or.png" alt="OR" /></center>
                <!-- ******form login******* -->
                <?php echo form_open('Proses/login'); ?>
                  <div id="basic-data" class="form-wizard active">
                    <div class="form-group">
                      <input type="email" value="" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group">
                      <input type="password" value="" class="form-control" placeholder="Password" name="password" required>
                    </div>
                <?php
                  echo form_submit('submit', 'Sign me in!', 'class="btn btn-4 red"');
                  echo form_close();
                ?>
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