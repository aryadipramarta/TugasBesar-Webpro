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
  <link rel="icon" href="<?= base_url('assets/image/logo.png') ?>">
  <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>

  <!-- Navigation -->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <?php foreach ($data as $d) : ?>
        <h1 class="navbar-brand"><i class="fas fa-user-circle"></i><b> | <?= $d['username']; ?> </b></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/produk'); ?>">PESAN PRODUCT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/service'); ?>">PESAN SERVICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/datadiri'); ?>">PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/profile'); ?>">EDIT PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('home'); ?>">LOGOUT</a>
            </li>
          </ul>
        </div>
    </nav>
  </section> <!-- jumbotron -->
  <section id="banner">
    <div class="d-flex justify-content-center">
      <img src="<?= base_url('assets/image/logo.png') ?>" alt="" class="img-logobanner">
    </div>
    <div class="d-flex justify-content-center">
      <br>
      <h2 class="isibanneruser"><b>Welcome, <?= $d['name'] ?> </b></h2>
    </div>
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
  <?php endforeach; ?>
  </section>

  <!--Service-->
  <section class="services">
    <div class="d-flex justify-content-center">
      <h2 class="title"><b>BEST SELLER PRODUCT</b></h2>
    </div>
    <div class="d-flex justify-content-center">
      <div class="cards">
        <div class="card-body">
          <div class="row">
            <div class="col-md-auto">
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="fas fa-chevron-circle-left"></i>
                <span class="sr-only">Previous</span>
              </a>
            </div>
            <div class="col">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-sm">
                        <img class="imageiklan" src="<?= base_url('assets/image/acnespot.png') ?>" alt="First slide">
                      </div>
                      <div class="col-sm">
                        <h2 class="juduliklan"><b>SKINSAVER ACNE SPOT TREATMENT</b></h2>
                        <p>Produk SkinSaver Acne Spot Treatment merupakan salah satu produk yang paling dicari saat ini ,
                          hampir semua dari pasien yang melakukan service ditempat kami membeli product ini dikarenakan khasiatnya
                          yang memang terjamin dan langsung memberikan hasil yang memuaskan dalam waktu kurang dari sebulan
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-sm">
                        <img class="imageiklan" src="<?= base_url('assets/image/serum.png') ?>" alt="Second slide">
                      </div>
                      <div class="col-sm">
                        <h2 class="juduliklan"><b>SKINSAVER NIACINAMIDE AND ZINK SERUM</b></h2>
                        <p>Produk SkinSaver Niacinamide and Zink Serum merupakan produk yang paling banyak dibeli oleh pasien,
                          bahkan pasien yang tidak melakukan service pun membeli product ini karena banyak reviewer skincare yang sudah banyak mereview
                          dan hasilnya sangat memuaskan
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-sm">
                        <img class="imageiklan" src="<?= base_url('assets/image/facewash2.png') ?>" alt="Third slide">
                      </div>
                      <div class="col-sm">
                        <h2 class="juduliklan"><b>SKINSAVER CLEANSER</b></h2>
                        <p>SkinSaver Cleanser merupakan produk yang paling laris dari website kami , penggunaan nya yang sangat efektif dalam membantu
                          melawan jerawat dan juga kotoran yang membandel diwajah membuat semua pasien membeli produk ini. Dokter kami pun sangat merekomendasikan product ini
                          karena kandungannya yang tidak begitu membuat kulit menjadi sensitif jadi aman untuk semua kulit
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-auto">
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="fas fa-chevron-circle-right"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>