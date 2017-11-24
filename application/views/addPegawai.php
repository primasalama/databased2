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
                <h3 class="h-bold">Tambah Data Pegawai</h3>
                <div class="divider-short" style="margin-bottom: 50px;"></div>
              </div>
            </div>
          </div>
        <div class="col-sm-8 col-md-8">
          <div class="wow fadeInRight" data-wow-delay="0.1s">
            <div class="service-box">
              <div class="service-desc">
                <form>
                  <div class="form-group row">
                    <label for="staticEmail" class="col-sm-3 col-form-label">Nama Pegawai</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Nama Pegawai">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Unit</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Unit">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Jabatan</label>
                      <div class="col-sm-6">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Jabatan">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Foto</label>
                      <div class="col-sm-6">
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" placeholder="Foto">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-3 col-form-label"></label>
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