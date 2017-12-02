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
                <h3 class="h-bold">Daftar Peundang-Undangan Deputi SDA dan Jasa</h3>
                <div class="divider-short" style="margin-bottom: 20px"></div>
              </div>
            </div>
          </div> 
          <div class="col-sm-12 col-md-12">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s" >
                    <div class="cta-btn" >
                      <a href="<?php echo base_url();?>Undangundang/view_add" class="btn btn-skin btn-lg">Tambah Undang-Undang</a>
                    </div>
                  </div>
                </div>
        <div class="row">

          <!-- <ol class="breadcrumb">
              <li class="active">Basis Data</li>
              <li><a href="#"><?php echo $this->uri->segment(1);?></a></li>
          </ol> -->
          <div class="col-sm-3 col-md-3">
            <div class="wow fadeInUp" data-wow-delay="0.2s">
              <div class="panel panel-default">
                <div class="panel-body">
                  <div class="list-group">
                    <ul class="nav nav-stack">
                      <?php foreach ($perundangan as $key) {
                        ?>
                        <li role="presentation"><a href="<?php echo base_url();?>Undangundang/index/<?php echo $key->idPerundangan;?>"><?php echo $key->tipePerundangan; ?></a></li>
                        <?php
                      } ?>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-9 col-md-9">

            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-desc">
                  <table id="example" class="table table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nomor</th>
              <th>Tentang</th>
              <th>Unduh</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i = 1;
            foreach ($data as $key) {
              ?>
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $key->nomor;?></td>
                <td><?php echo $key->tentang;?></td>
                <td><a href="<?php echo base_url();?>assets/upload/uu/<?php echo $key->fileUud;?>" class="btn btn-info">Unduh</a></td>
                <td></td>
              </tr>
              <?php 
            $i++;} ?>
            
            
          </tbody>
        </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>