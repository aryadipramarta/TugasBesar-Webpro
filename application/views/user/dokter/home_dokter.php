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
</head>
<!-- Navigation -->
<section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">
        <?php foreach ($data as $d) : ?>
            <h1 class="navbar-brand"><i class="fas fa-user-circle"></i><b> | DOKTER </b></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>dokter">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('dokter/datapasien'); ?>">DATA PASIEN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>dokter/editprofiledokter">EDIT PROFILE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section id="banner">
        <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/image/logo.png') ?>" alt="" class="img-logobanner">
        </div>
        <div class="d-flex justify-content-center">
            <br>
            <h2 class="isibanneruser"><b>WELCOME DOKTER</b></h2>
        </div><div class="d-flex justify-content-center">
            <h2 class="isibanneruser"><b><?= $d->name; ?></b></h2>
        </div>
        <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
    </section>
  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
              <img src="<?= base_url('assets/image/indian.png') ?>" width="50%" class="rounded-circle">
              <h1 class="display-4">dr. <span><?= $d->name; ?></span></h1>
              <p class="lead">Spesialis Kulit dan Kelamin</p>
              <p class="lead">"Saya siap mendengarkan setiap keluhan anda dan memberikan solusinya"</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="row">
            <div class="jumbotron jumbotron-fluid">
              <div class="container text-center">
                <h2 class= "text-center">LATAR BELAKANG PENDIDIKAN</h2>
                <p class="lead mt-5">Latar belakang pendidikan saya yaitu telah melakukan magang selama 1 tahun di puskesmas daerah,
                  setelah saya lulus dari fak.Kedokteran UI. Setelah itu saya mengajukan diri untuk bekerja di rumah sakit Mitra Keluarga
                  Bekasi.Setelah menjadi dokter umum disana selama 1,5 tahun saya memutuskan untuk lanjut kuliah S2. Kebetulan S2 saya
                  mengambil spesialis kulit dan kelamin, dan alhamdulillah semua berjalan lancar. Setelah itu saya kembali menjadi dokter
                  spesialis di rs mitra keluarga, dan hingga akhirnya sekarang menjadi Dokter khusus untuk menangani permasalahan
                  kulit para Customer SkinSaver ini.</p>
              </div>
            </div>  
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
  </section>
  <?php endforeach; ?>
</html>