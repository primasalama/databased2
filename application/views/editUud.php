<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

    <!-- Section: intro -->

    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <!-- /Section: boxes -->
    <!-- Section: services -->
    <section id="service" class="home-section">
      <div class="container">
        <div class="col-sm-12 col-md-12">
          <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h3 class="h-bold">Tambah Data Perundang-Undangan Deputi SDA dan Jasa</h3>
                <div class="divider-short" style="margin-bottom: 50px;"></div>

              </div>
            </div>
          </div>
        <div class="col-sm-8 col-md-8">
          <div class="wow fadeInRight" data-wow-delay="0.1s">
            <div class="service-box">
              <div class="service-desc">
                <?php 
                if ($this->session->flashdata('info')) {
                  ?>
                  <div class="alert alert-danger">
                    <strong>Sorry!</strong> <?php echo $this->session->flashdata('info');?>
                  </div>
                  <?php
                }
                ?>
                <form method="POST" action="<?php echo base_url();?>Undangundang/insert" enctype="multipart/form-data">
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-4 col-form-label">Nomor Undang-Undang</label>
                      <div class="col-sm-6">
                        <input type="text" name="nomoruud" class="form-control" id="inputPassword" placeholder="Nomor Undang-Undang"  required="true"> 
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Perihal Undang-Undang</label>
                      <div class="col-sm-6">
                        <input type="text" name="perihaluud" class="form-control" id="inputPassword" placeholder="Perihal Undang-Undang" required="true">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Jenis Undang-Undang</label>
                    <div class="col-sm-6">
                      <div class="dropdown">
                        <button class="btn btn-skin dropdown-toggle" type="button" data-toggle="dropdown">Pilih jenis Undang-Undang
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                          <li><a href="#">HTML</a></li>
                          <li><a href="#">CSS</a></li>
                          <li><a href="#">JavaScript</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">File Undang-Undang</label>
                      <div class="col-sm-6">
                        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" placeholder="Foto" required="true">
                      </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                      <div class="col-sm-6">
                        <input type="submit" value="Tambah" class="btn btn-skin btn-block btn-lg">
                      </div>
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>