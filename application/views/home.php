<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="http://olinamasi.diploma.ipb.ac.id/assets/css/full-slider.css" rel="stylesheet">
<style type="text/css">

    .parallax { 
        /* The image used */
        background-image: url("http://olinamasi.diploma.ipb.ac.id/assets/images/diploma1.jpg");

        /* Set a specific height */
        height: 830px; 
        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;

        color:white;
    }
    
    .style2 {
        color: #FF9900
    }
    
    .img-center {
        margin: 0 auto;
    }
    .content{
        padding-top: 90px;
        padding-bottom: 90px;
    }

</style>

    <!-- Section: intro -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://olinamasi.diploma.ipb.ac.id/assets/images/ipb2.jpg');"></div>
                <div class="carousel-caption" style="padding-bottom: 100px;">
                    <img class="img-responsive img-center" style="width: 150px;" src="http://olinamasi.diploma.ipb.ac.id/assets/images/logo.png"></img>
                    <h1><b>OLINAMASI 2017</b></h1>
                    <h2 class="">Program Diploma IPB</h2>
                    <p>"Berkarya Bersama, Berprestasi untuk Bangsa"</p>
                    <h2><a href="http://olinamasi.diploma.ipb.ac.id/Register" class="btn btn-primary">Daftarkan Tim</a></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('http://olinamasi.diploma.ipb.ac.id/assets/images/diploma.jpg');"></div>
                <div class="carousel-caption" style="padding-bottom: 100px;">
                    <img class="img-responsive img-center" style="width: 150px;" src="http://olinamasi.diploma.ipb.ac.id/assets/images/logo.png"></img>
                    <h1><b>OLINAMASI 2017</b></h1>
                    <h2 class="">Program Diploma IPB</h2>
                    <p>7 Agustus - 13 Oktober 2017</p>
                    <h2><a href="http://olinamasi.diploma.ipb.ac.id/#jadwal" class="btn btn-primary">Lihat Jadwal</a></h2>
                </div>
            </div>
        </div>
    <!-- /Section: intro -->

    <!-- Section: boxes -->
    <!-- /Section: boxes -->
    <!-- Section: services -->
    <!-- /Section: services -->
    <!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
      <div class="container marginbot-50">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div class="wow fadeInDown" data-wow-delay="0.1s">
              <div class="section-heading text-center">
                <h3 class="h-bold">Deputi Bidang Koordinasi Sumber Daya Alam dan Jasa</h3>
              </div>
            </div>
            <div class="divider-short"></div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-12">
           <div class="col-lg-2 col-md-2 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
          <p style="text-align: center;">Deputi Bidang Koordinasi Sumber Daya Alam dan Jasa</p>
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
          <p style="text-align: center;">Sekretaris Deputi Bidang Koordinasi Sumber Daya Alam dan Jasa</p>
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
          <p style="text-align: center;">Asisten Deputi Sumberdaya Alam dan Jasa</p>
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
          <p style="text-align: center;">Asisten Deputi Sumber Daya Mineral, Energi dan Non Konvensional</p>
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
          <p style="text-align: center;">Asisten Deputi Jasa Kemaritiman</p>
        </div>
        <div class="col-lg-2 col-md-2 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
          <p style="text-align: center;">Asisten Deputi Lingkungan dan Kebencanaan Maritim</p>
        </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section: team -->
    <!-- Section: works -->
    <!-- /Section: works -->
    <!-- Section: pricing -->
    <!-- /Section: pricing -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    $('a').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
    </script>
