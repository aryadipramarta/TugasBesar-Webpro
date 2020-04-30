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
      <h1 class="navbar-brand"><i class="fas fa-user-circle"></i><b> | DOKTER <?= $d['name'] ?> </b></h1>
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
                        <a class="nav-link" href="<?php echo base_url(); ?>dokter/editprofiledokter">VIEW PROFILE</a>
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
        <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
    </section>
    <section class="services">
  <div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url('assets/image/logo.png') ?>" alt="" class="img-logobanner"> -->
  </div>
  <!-- <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img"> -->
</section>
<section class="services">
  <div class="d-flex justify-content-center">
    <div class="cardeditprofile">
      <div class="card-body">
        <div class="d-flex justify-content-center">
          <img src="<?= base_url('assets/image/profileedit.png') ?>" alt="" class="editprofileimg">
          </div>
          <div class="d-flex justify-content-center">
          <h3 class="juduledit"><b>PROFILE</b></h3>
          </div>
          <div class="d-flex justify-content-center">
          <form>
          <div class="form-group">
          <label for="exampleInputName">Nama Dokter</label>
          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?=$d['name']?>>
          </div>
          <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?=$d['username']?>>
          </div>
          <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" readonly class="form-control-plaintext" id="staticEmail" value=<?=$d['email']?>>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </section>
  <?php endforeach; ?>
</html>