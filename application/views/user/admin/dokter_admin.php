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
          <button type="button" data-target="#tambahdokter" class="btnforform" data-toggle="modal">ADD NEW DOCTOR</button>
          </div>
          <div class="d-flex justify-content-center">
          <h3><b>TABLE DOKTER YANG MELAYANI</b></h3>
          </div>
          <div class="d-flex justify-content-center">
          </div>
          <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Username</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          </table>
        </div>
      </div>
  </div>
  </section>

  <!---ModalAddDokter--->
  <div class="modal" tabindex="-1" role="dialog" id="tambahdokter">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">CREATE DOCTOR ACCOUNT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
      <div class="form-group">
        <label for="formGroupExampleInput">Nama Lengkap</label>
        <input type="text" class="form-control" id="namaservice">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput">Username</label>
        <input type="text" class="form-control" id="namaservice">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>  
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>