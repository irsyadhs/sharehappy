  <style type="text/css">
    .form-box{
      background: #ecf0f1;
      border-radius: 10px;
      border-bottom: #bdc3c7 solid 5px;
      padding: 10px 10px 10px 10px;
    }
  </style>

  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container"><h3>Bergabung dan Berbagi Kebahagiaan!</h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container">
      
      <!-- ************************ Form Area Start ************************ -->
      
      <div class="start-project">
        <div class="start-content register">
          <button class="btn btn-facebook"> <i class="fa fa-facebook"></i> &nbsp; Sign up with Facebook </button>
          <hr>
          <center><img src="<?php echo base_url(); ?>assets/images/or.png" alt="OR" /></center>
          <form action="<?php echo site_url(); ?>profile" method="post" enctype="multipart/form-data">
            <div id="basic-data" class="form-wizard active">
              <div class="form-group form-box">
                <input type="text" value="" class="form-control" placeholder="Nama Anda" name="nama" required>
              </div>
              <div class="form-group form-box">
                <input type="email" value="" class="form-control" placeholder="Email" name="email" required>
              </div>
              <div class="form-group form-box">
                <input type="password" value="" class="form-control" placeholder="Password" name="password" required>
              </div>
              <div class="form-group form-box">
                <input type="password" value="" class="form-control" placeholder="Re-type Password" name="password2" required>
              </div>
              <center><button type="submit" class="btn btn-4 red" style="width: 270px" name="btnRegis">Sign Up</button></center>
            </div>            
          </form>
        </div>
      </div>
      
      <!-- ************************ Form Area End ************************ -->
      
    </article>
  </section>