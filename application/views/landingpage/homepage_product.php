<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SkinSaver - Product</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?> ">
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
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
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
            <a class="nav-link" href="<?= site_url('') ?>">HOME</a>
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
  </section> 
  <!-- jumbotron -->
  <section id="banner">
    <div class="d-flex justify-content-center">
      <br>
      <h2 class="isibanneruser"><b>OUR PRODUCT</b></h2>
    </div>
    <div class="d-flex justify-content-center">
        <br>
        <img src="<?= base_url('assets/image/contact.png') ?>" class="about-banner">
      </div>
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
  </section>

  <!--Service-->
<section class="services">
    <div class="d-flex justify-content-center">
        <div class="row text-center">
          <div class="col product-card">
            <h2 class="judulproduct"><b>SkinSaver Gentle Skin Cleanser</b></h2>
            <br>
            <img src="<?= base_url('assets/image/facewash1.png') ?>" class="gambarproduct">
            <p>Produk ini adalah produk andalan kami yang terbukti sangat cocok untuk membersihkan jerawat</p>
          </div>
          <div class="col product-card">
            <h2 class="judulproduct"><b>SkinSaver Cleanser</b></h2>
            <br>
            <img src="<?= base_url('assets/image/facewash2.png') ?>" class="gambarproduct">
            <p>Produk yang sangat baik mengandung 2% Benzoyl Peroxide dan eskrak buah lainnya</p>
          </div>                
          <div class="col product-card">
            <h2 class="judulproduct"><b>SkinSaver Barrier Moisturizer</b></h2>
            <img src="<?= base_url('assets/image/moist1.png') ?>" class="gambarproduct">
            <p>Melembabkan kulit sangat cocok untuk kulit berjerawat mengandung Ceramide</p>
          </div>
      </div>
</div>
<div class="d-flex justify-content-center">
        <div class="row text-center">
          <div class="col product-card">
          <h2 class="judulproduct"><b>SkinSaver LightDay Moisturizer</b></h2>
            <img src="<?= base_url('assets/image/moist2.png') ?>" class="gambarproduct">
            <p>Melembabkan kulit sangat baik, cocok segala jenis kulit mengandung SPF 50+/PA++++</p>
          </div>
          <div class="col product-card">
          <h2 class="judulproduct"><b>Skinsaver Acne Spot treatment</b></h2>
          <br>
            <img src="<?= base_url('assets/image/acnespot.png') ?>" class="gambarproduct">
            <p>Produk terbaik untuk jerawat dengan 2.5% Benzoyl Peroxide</p>
          </div>                
          <div class="col product-card">
          <h2 class="judulproduct"><b>SkinSaver Niacinamide and Zink Serum</b></h2>
            <img src="<?= base_url('assets/image/serum.png') ?>" class="gambarproduct">
            <p>Serum terbaik untuk jerawat anda, mengandung Niacinamide 10% and Zink 1%</p>
          </div>
      </div>
</div>
</div>
</section>
