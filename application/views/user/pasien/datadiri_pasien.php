<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SkinSaver</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">

  </section>

  <!--Service-->
  <section class="services">
    <div class="d-flex justify-content-center">
      <div class="cardeditprofile">
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/image/feedback.png') ?>" alt="" class="editprofileimg">
          </div>
          <div class="d-flex justify-content-center">
            <span id="success_message"></span>
          </div>
          <div class="d-flex justify-content-center">
            <h3 class="juduledit"><b>DATA DIRI</b></h3>
          </div>
          <div class="d-flex justify-content-center">
          <form>
          <label id="nama" class="nama"><i class="fas fa-id-card"></i> Nama : </label><span id='sname'></span><br/>
          <label id="uname"><i class="far fa-id-badge"></i> Username : </label><span id='susername'></span><br/>
          <label id="emails"><i class="far fa-envelope"></i> Email : </label><span id='semail'></span><br/>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endforeach; ?>
<script type="text/javascript">
ambilData()
        function ambilData(){
          $.ajax({
            type:'POST',
            url:'<?php echo base_url()."pasien/ambildatapasien"?>',
            dataType : 'json',
            success: function(data){
                var nama = `<h5> ${data[0].name} </h5>`;
                var username = `<h5> ${data[0].username} </h5`;
                var email = `<h5> ${data[0].email} </h5>`;
                $('.nama').append(nama);
                $('#uname').append(username);
                $('#emails').append(email);
            }
          })
        }

</script>