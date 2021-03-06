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
      <?php foreach ($user as $d) : ?>
        <h1 class="navbar-brand"><i class="fas fa-user-circle"></i><b> | <?= $d['username']; ?> </b></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien'); ?>">HOME</a>
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
              <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">LOGOUT</a>
            </li>
          </ul>
        </div>
    </nav>
  </section> <!-- jumbotron -->
  <section id="banner">
    <div class="d-flex justify-content-center">
      <img src="<?= base_url('assets/image/logo.png') ?>" alt="" class="img-logobanner">
    </div>
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">

  </section>

  <!--Service-->
  <section class="services">
    <div class="d-flex justify-content-center">
      <div class="cardtable">
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <button type="button" data-target="#addpesanan" class="btnforform" data-toggle="modal">PESAN SERVICE</button>
          </div>
          <div class="d-flex justify-content-center">
            <h3><b>TABLE PEMESANAN SERVICE</b></h3>
          </div>
          <div class="d-flex justify-content-center">
            <h3><b><?= $d['name'] ?></b></h3>
          </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama Dokter</th>
                <th>Jenis Service</th>
                <th>Pilih Waktu</th>
                <th>Biaya</th>
                <th>Keluhan</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($pesanS as $ps) : ?>
                <tr>
                  <form action="">
                    <td><?= $ps['nama_dokter'] ?></td>
                    <td><?= $ps['nama_service'] ?></td>
                    <td><?= $ps['bookingdate'] ?></td>
                    <td><?= $ps['harga'] ?></td>
                    <td><?= $ps['keluhan'] ?></td>
                  </form>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!---ModalAddPemesanan--->
  <?= form_open_multipart('pasien/pesanService') ?>
  <div class="modal" tabindex="-1" role="dialog" id="addpesanan">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">FORM PEMESANAN SERVICE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Nama Dokter</label>
              <select class="form-control" id="exampleFormControlSelect1" name="name">
                <?php foreach ($dokter as $dt) : ?>
                  <option value="<?= $dt['id_user'] ?>"><?= $dt['name'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Service</label>
              <select class="form-control" id="exampleFormControlSelect1" name="service">
                <?php foreach ($service as $s) : ?>
                  <option value="<?= $s['id_service'] ?>"><?= $s['nama_service']  ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Booking Tanggal</label>
              <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="booking">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Keluhan</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keluhan"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <?= form_submit('submit', 'Pesan', ['class' => 'btn btn-primary']); ?>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>