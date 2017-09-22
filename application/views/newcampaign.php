  <!-- ************************ Header Bottom | Page Title ************************ -->
  <section class="header-bottom">
    <article>
      <div class="container"><h3>Buat Campaign Mu!</h3></div>
    </article>
  </section>
  <!-- ************************ Breadcrumbs ************************ -->
  <section class="breadcrumb">
    <article class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul>
            <li><span class="fa fa-home"></span>&nbsp;</li>
            <li><a href="index.php">Home</a></li>
            <li class="fa fa-angle-right"></li>
            <li><a href="newcampaign.php">New Campaign</a></li>
          </ul>
        </div>
      </div>
    </article>
  </section>
  
  <!-- ************************ Page Content ************************ -->
  <section class="gray">
    <article class="container">
      
      <!-- ************************ Form Area Start ************************ -->
      
      <div class="start-project">
        <div class="title">
          <ul>
            <li data-link="basic-data" class="current"><a href="start.php#"><i class="fa fa-file-o"></i><span>Informasi Dasar</span></a></li>
            <li data-link="social-media" class=""><a href="start.php#"><i class="fa fa-user"></i><span>Informasi Kontak</span></a></li>
            
            <li data-link="image-vidoe" class=""><a href="start.php#"><i class="fa fa-file-image-o"></i><span>Dokumentasi Campaign</span></a></li>
          </ul>
        </div>
        <hr>
        <div class="start-content">
          <script>
            function isChecked(checkbox, sub1) {
                document.getElementById(sub1).disabled = !checkbox.checked;
            }
          </script>
          <form action="<?php echo base_url(); ?>submitcamp" method="post" enctype="multipart/form-data">
            
            <div id="basic-data" class="form-wizard active">
           	            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Judul Campaign" name="title" required>
                  <p>Buat judul yang spesifik</p>
                </div>
                <div class="form-right">
                  <input type="text" value="" class="form-control" placeholder="Target Donasi Terkumpul" name="money" required>
                  <p>Minimal 1000000</p>
                </div>
                <div class="clear"></div>
              </div>
            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Link Campaign" name="link" required>
                  <p>contoh: sharinghappiness.com/danauntukbudi</p>
                </div>
                <div class="form-right">
                  <select class="form-control arrow-down" name="category">
                    <option value="">Kategori</option>
                    <option value="pemberdayaan">Pemberdayaan</option>
                    <option value="kesehatan">Kesehatan</option>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="yatimdhuafa">Yatim dan Dhuafa</option>
                    <option value="masjid">Pembangunan Masjid</option>
                    <option value="kemanusiaan">Program Kemanusiaan</option>
                    <option value="infrastruktur">Infrastruktur</option>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
            
              <div class="form-group">
                <div class="form-left">
                  <input type="text" value="" class="form-control" placeholder="Batas Akhir Campaign" name="date">
                </div>
                <div class="form-right">
                    <select class="form-control arrow-down" name="recipient">
                    <option value="">Lokasi Penerima Manfaat</option>
                    <option value="aceh">Aceh</option>
                    <option value="bandung">Bandung</option>
                    <option value="banjarmasin">Banjarmasin</option>
                    <option value="surabaya">Surabaya</option>
                  </select>
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <div class="form-left selectimage" id="imguploadbasic-1">
                  <input type="text" value="" class="form-control" placeholder="Gambar Utama">
                  <button type="button" class="imageUploadBtn">Choose File</button>
                  <input type="file" name="basicimg[]" />
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <textarea name="description" class="form-control" placeholder="Deskripsi Campaign"></textarea>
              </div>
              
              <div class="next-btn"><button type="button" class="btn btn-4 red" data-link="social-media" onClick="moveform(this,'social-media')">Next</button></div>
              
            </div>
            
            <div id="social-media" class="form-wizard">
              
              <div class="form-group">
                <div class="form-left">
                  <input type="url" value="" class="form-control" placeholder="Facebook Url" name="fb">
                </div>
                <div class="form-right">
                  <input type="url" value="" class="form-control" placeholder="Twitter Url" name="tw">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="form-group">
                <div class="form-left">
                  <input type="url" value="" class="form-control" placeholder="Phone Number" name="pn">
                </div>
                <div class="form-right">
                  <input type="url" value="" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="clear"></div>
              </div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 red" data-link="basic-data" onClick="moveform(this,'basic-data')">Back</button>
                <button type="button" class="btn btn-4 red" data-link="image-vidoe" onClick="moveform(this,'image-vidoe')">Next</button>
              </div>
            </div>
            
            <div id="image-vidoe" class="form-wizard">
              <div class="form-group">
                <div class="select-gallery-type">
                  <ul>
                    <li data-galerytype="vid" class="active">Video</li>
                    <li data-galerytype="img">Images</li>
                  </ul>
                </div>
              </div>
              
              <div id="video-inputs" class="imgORvid">
                <div class="form-group">
                  <div class="form-left" style="width:100%;">
                    <input type="text" value="" class="form-control" placeholder="Youtube or Vimeo Link" name="title">
                  </div>
                  <div class="clear"></div>
                </div>
              </div>
              
              <div id="images-inputs" class="imgORvid">
                <div class="form-group">
                  <div id="image-field-cnt">
                    <div class="form-left selectimage" id="imgupload-1">
                      <input type="text" value="" class="form-control" placeholder="Upload Image">
                      <button type="button" class="imageUploadBtn">Choose File</button>
                      <input type="file" name="galleryimg[]" />
                    </div>
                  </div>
                  <div id="add-image-field-cnt"><input type="hidden" value="1" id="imgNumber" name="imgNumber" ></div>
                  <div class="clear"></div>
                  <button type="button" class="btn btn-5 green add-perk-btn add-imgbtn" onClick="addimage()">Add An Other Image</button>
                </div>
                
              </div>
              
              <div class="next-btn">
                <button type="button" class="btn btn-5 red" data-link="social-media" onClick="moveform(this,'social-media')">Back</button>
                <button type="button" class="btn btn-4 red" data-link="lastsubmit" onClick="moveform(this,'lastsubmit')">Next</button>
              </div>
            </div>

            <div id="lastsubmit" class="form-wizard">
              <div class="form-group">
                <center><input type="checkbox" id="agreesnk" value="setuju" onchange="isChecked(this, 'sub1')">&nbsp&nbsp<span>Saya telah membaca dan setuju pada <a href="#">ketentuan yang berlaku</a></span>
                </center>
              </div>
              
              <center><button type="submit" class="btn btn-4 red" style="width: 270px">SUBMIT</button></center>
            </div>
            
          </form>
        </div>
      </div>
      
      <!-- ************************ Form Area End ************************ -->
      
    </article>
  </section>