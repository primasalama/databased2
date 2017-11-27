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
                      <li role="presentation" class="active"><a href="#">Undang-Undang</a></li>
                      <li role="presentation"><a href="#">Peraturan Pemerintah</a></li>
                      <li role="presentation"><a href="#">Peraturan Presiden</a></li>
                      <li role="presentation"><a href="#">Keputusan Presiden</a></li>
                      <li role="presentation"><a href="#">Instruksi Presiden</a></li>
                      <li role="presentation"><a href="#">Peraturan Menko</a></li>
                      <li role="presentation"><a href="#">Keputusan Menko</a></li>
                      <li role="presentation"><a href="#">Nota Dinas Menko</a></li>
                      <li role="presentation"><a href="#">Memorandum Menko</a></li>
                      <li role="presentation"><a href="#">Keputusan Sesmenko</a></li>
                      <li role="presentation"><a href="#">Nota Dinas Sesmenko</a></li>
                      <li role="presentation"><a href="#">Memorandum Sesmenko</a></li>
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
            <tr>
              <td>1</td>
              <td>Tiger Nixon</td>
              <td>System Architect</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Garrett Winters</td>
              <td>Accountant</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Ashton Cox</td>
              <td>Junior Technical Author</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Cedric Kelly</td>
              <td>Senior Javascript Developer</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Airi Satou</td>
              <td>Accountant</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Brielle Williamson</td>
              <td>Integration Specialist</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Herrod Chandler</td>
              <td>Sales Assistant</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Rhona Davidson</td>
              <td>Integration Specialist</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Colleen Hurst</td>
              <td>Javascript Developer</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Sonya Frost</td>
              <td>Software Engineer</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Jena Gaines</td>
              <td>Office Manager</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Quinn Flynn</td>
              <td>Support Lead</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Charde Marshall</td>
              <td>Regional Director</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Haley Kennedy</td>
              <td>Senior Marketing Designer</td>
              <td></td>
              <td></td>
              </tr>
            <tr>
              <td>1</td>
              <td>Tatyana Fitzpatrick</td>
              <td>Regional Director</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Michael Silva</td>
              <td>Marketing Designer</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Paul Byrd</td>
              <td>Chief Financial Officer (CFO)</td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>1</td>
              <td>Gloria Little</td>
              <td>Systems Adm
                <td></td>
            </tr>
          </tbody>
        </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>