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

      <h1 class="navbar-brand"><i class="fas fa-user-circle"></i><b> | ADMIN </b></h1>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/produk'); ?>">PRODUCT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>home/contact">SERVICE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>home/product">DOKTER</a>
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
    <div class="d-flex justify-content-center">
      <br>
      <h2 class="isibanneruser"><b>ADMIN PAGE</b></h2>
    </div>
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
  </section>

  <!--Service-->
  <section class="services">
    <div class="d-flex justify-content-center">
      <div class="cardtable">
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <button type="button" data-target="#tambahservice" class="btnforform" data-toggle="modal">ADD SERVICE</button>
          </div>
          <div class="d-flex justify-content-center">
            <h3><b>TABLE SERVICE YANG TERSEDIA</b></h3>
          </div>
          <div class="d-flex justify-content-center">
          </div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama Service</th>
                <th>Deskripsi</th>
                <th>Harga Service</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($data as $d) : ?>
                <tr>
                  <form action="">
                    <td><?= $d['nama_service'] ?></td>
                    <td><?= $d['deskripsi'] ?></td>
                    <td><?= $d['harga'] ?></td>
                    <td><button type="button" data-target="#updateservice<?= $d['id_service'] ?>" data-toggle="modal" class="btn btn-primary btn-sm">
                        <i><i class="fas fa-user-edit"></i></button>&nbsp;
                      <a type="button" class="btn btn-danger btn-sm" href="<?= base_url('admin/deleteService/' . $d['id_service']) ?>" onClick="return confirm('Apakah Anda Yakin?')"><i class="fas fa-user-times"></i></a>
                    </td>
                  </form>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

  <!---ModalAddService--->
  <?= form_open_multipart('admin/createService') ?>
  <div class="modal" tabindex="-1" role="dialog" id="tambahservice">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">CREATE NEW SERVICE</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <?= form_label('Nama Service') ?>
              <!-- <label for="formGroupExampleInput">Nama Service</label> -->
              <?= form_input(['name' => 'nama_service', 'class' => 'form-control', 'required' => 'required']) ?>
              <!-- <input type="text" class="form-control" id="namaservice" name="nama_service"> -->
            </div>
            <div class="form-group">
              <?= form_label('Harga') ?>
              <?= form_input(['name' => 'harga', 'class' => 'form-control', 'required' => 'required']) ?>
              <!-- <label for="formGroupExampleInput">Harga</label>
              <input type="text" class="form-control" id="namaservice" name="harga"> -->
            </div>
            <div class="form-group">
              <?= form_label('Deskripsi') ?>
              <?= form_textarea(['name' => 'deskripsi', 'class' => 'form-control', 'rows' => '4', 'required' => 'required']) ?>
              <!-- <label for="exampleFormControlTextarea1">Deskripsi</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea> -->
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']); ?>
          <!-- <a type="button" class="btn btn-primary" href="">Save changes</a> -->
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!---ModalUpdateService--->
  <?php foreach ($data as $d) : ?>
    <?= form_open_multipart('admin/updateService/' . $d['id_service']) ?>
    <div class="modal" tabindex="-1" role="dialog" id="updateservice<?= $d['id_service'] ?>">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">UPDATE SERVICE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <?= form_label('Nama Service') ?>
                <!-- <label for="formGroupExampleInput">Nama Service</label> -->
                <?= form_input(['name' => 'nama_service', 'class' => 'form-control', 'required' => 'required', 'value' => $d['nama_service']]) ?>
                <!-- <input type="text" class="form-control" id="namaservice" name="nama_service"> -->
              </div>
              <div class="form-group">
                <?= form_label('Harga') ?>
                <?= form_input(['name' => 'harga', 'class' => 'form-control', 'required' => 'required', 'value' => $d['harga']]) ?>
                <!-- <label for="formGroupExampleInput">Harga</label>
              <input type="text" class="form-control" id="namaservice" name="harga"> -->
              </div>
              <div class="form-group">
                <?= form_label('Deskripsi') ?>
                <?= form_textarea(['name' => 'deskripsi', 'class' => 'form-control', 'rows' => '4', 'required' => 'required', 'value' => $d['deskripsi']]) ?>
                <!-- <label for="exampleFormControlTextarea1">Deskripsi</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea> -->
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']); ?>
            <!-- <a type="button" class="btn btn-primary" href="">Save changes</a> -->
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>