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
<style type="text/css">
  .imgthumb : {width: 200px;}
</style>
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
                <h3 class="h-bold">Daftar Pegawai Deputi SDA dan Jasa</h3>
                <div class="divider-short"></div>
              </div>
            </div>
          </div> 
          <div class="col-sm-12 col-md-12">
          <div class="wow lightSpeedIn" data-wow-delay="0.1s" >
                    <div class="cta-btn" >
                      <a href="<?php echo base_url();?>Pegawai/view_add" class="btn btn-skin btn-lg">Tambah Data Pegawai</a>
                    </div>
                  </div>
                </div>
               <div class="col-sm-12 col-md-12"> 
            <div class="wow fadeInRight" data-wow-delay="0.1s">
              <div class="service-box">
                <div class="service-desc">
                  <table id="example" class="table table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Unit</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i =1;
                      foreach ($data->result() as $key) {
                        ?>
                        <tr>
                          <td><?php echo $i;?></td>
                          <td><?php echo $key->namaPegawai;?></td>
                          <td><?php echo $key->unit;?></td>
                          <td><?php echo $key->jabatan;?></td>
                          <td><img src="<?php echo base_url(); ?>assets/upload/<?php echo $key->foto;?>" style="width: 200px;height: 180px;" alt=""></td>
                          <td>
                            <a href="" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="" data-href="<?php echo base_url();?>pegawai/delete/<?php echo $key->idPegawai;?>" data-toggle="modal" data-target="#confirm-delete" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                          </td>
                        </tr>
                        <?php 
                      $i++;}
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>
      </div>
    </section>
    <script type="text/javascript">
      $('#confirm-delete').on('show.bs.modal', function(e) {
          $(this).find('#btn-delete').attr('href', $(e.relatedTarget).data('href'));
      });
    </script>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Apakah anda yakin untuk menghapus salah satu pegawai ?
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok" id="btn-delete">Delete</a>
                </div>
            </div>
        </div>
    </div>