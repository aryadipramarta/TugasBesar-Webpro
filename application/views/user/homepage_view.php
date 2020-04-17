<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SkinSaver</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/css/style.css') ?> " rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
</head>

<body>

  <!-- Navigation -->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <h1 class="navbar-brand"><b>SKIN SAVER</b></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>home/about">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>home/contact">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>home/product">PRODUCT</a>
          </li>
        </ul>
      </div>
    </nav>
  </section> <!-- jumbotron -->
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?= base_url('assets/image/logo.png') ?>" class="banner-img">
          <p class="isipromo">Kami siap membantu segala permasalah kulit dan wajah anda , <br> Gabung bersama kami untuk mendapatkan solusi dari segala permasalahan yang anda butuhkan</p>
          <div class="col-md">
            <button type="button" class="btn-banner" button onclick="location.href = '<?= base_url('auth/register'); ?>';">Register <i class="fas fa-sign-in-alt"></i></>
              <button type="button" class="btn-banner" button onclick="location.href = '<?= base_url('auth'); ?>';"><i class="fas fa-user"></i> Login</button>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?= base_url('assets/image/bannerdoctor.png') ?>" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
  </section>

  <!--Service-->
  <section class="services">
    <div class="container text-center">
      <h1 class="title">LAYANAN KAMI</h1>
      <div class="row text-center">
        <div class="col-md services">
          <img src="<?= base_url('assets/image/products.png') ?>" class="service-img">
          <h4><b>PRODUCT</b></h4>
          <p>Kami menyediakan produk unggulan yang bisa membantu customer dalam menyembuhkan
            segala permasalahan kulit mereka</p>
        </div>
        <div class="col-md services">
          <img src="<?= base_url('assets/image/doctors.png') ?>" class="service-img">
          <h4><b>DOKTER</b></h4>
          <p>Kami juga menyediakan pelayan dokter terbaik yang berasal dari seluruh indonesi
            yang siap membantu melayani anda di dalam menyelesaikan masalah masalah yang anda butuhkan
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center">
    <div class="container">
      <h1 class="title">PENDAPAT MEREKA</h1>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="" alt="">
            <h5>Stephanie Putri</h5>
            <p class="font-weight-light mb-0">"Mantap! saya senang dengan ini semua"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="" alt="">
            <h5>Jessica Monica</h5>
            <p class="font-weight-light mb-0">"Kualitas terpercaya dan layanan yang sangat memuaskan dari skinsaver"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="" alt="">
            <h5>Johnson A.</h5>
            <p class="font-weight-light mb-0">"Sudah beberapa kali saya melakukan pemesanan dan pemeriksaan disini sangat terpercaya dan hasilnya mantap"</p>
          </div>
        </div>
      </div>
    </div>
  </section>