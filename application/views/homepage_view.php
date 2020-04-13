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

</head>

<body>

  <!-- Navigation -->
  <section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light">
     <h1 class="navbar-brand">SKIN SAVER</h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">LINK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SERVICE</a>
        </li>      
        <li class="nav-item">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>      
      </ul>
    </div>
  </nav>
</section>
  <!-- jumbotron -->
  <section id="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
        <img src="<?= base_url('assets/image/logo.png')?>" class="container">
          <p class="isipromo">Kami siap membantu segala permasalah kulit dan wajah anda , <br> Gabung bersama kami untuk mendapatkan solusi dari segala permasalahan yang anda butuhkan</p>
            <div class="col-md">
              <button type="button" class="btn-banner" button onclick="location.href = '<?= base_url('auth/register'); ?>';">Register <i class="fas fa-sign-in-alt"></i></>
              <button type="button" class="btn-banner" button onclick="location.href = '<?= base_url('auth'); ?>';"><i class="fas fa-user"></i> Login</button>
            </div>
        </div>
        <div class="col-md-6 text-center">
          <img src="<?= base_url('assets/image/3568982.png')?>" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <img src="<?= base_url('assets/image/wave1.png')?>" class="bottom-img">
  </section>

<!--Service-->
<section class="services">
  <div class="container text-center">
    <h1 class="title">LAYANAN KAMI</h1>
    <div class="row text-center">
      <div class="col-md services">
        <img src="<?= base_url('assets/image/product.png')?>" class="service-img">
        <h4><b>PRODUCT</b></h4>
        <p>Kami menyediakan produk unggulan yang bisa membantu customer dalam menyembuhkan 
           segala permasalahan kulit mereka</p>
      </div>
      <div class="col-md services">
        <img src="<?= base_url('assets/image/doctor.png')?>" class="service-img">
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
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
            <h5>Stephanie Putri</h5>
            <p class="font-weight-light mb-0">"Mantap! saya senang dengan ini semua"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
            <h5>Jessica Monica</h5>
            <p class="font-weight-light mb-0">"Kualitas terpercaya dan layanan yang sangat memuaskan dari skinsaver"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
            <h5>Johnson A.</h5>
            <p class="font-weight-light mb-0">"Sudah beberapa kali saya melakukan pemesanan dan pemeriksaan disini sangat terpercaya dan hasilnya mantap"</p>
          </div>
        </div>
      </div>
    </div>
  </section>


   <!-- Footer -->
   <section id="footer">
    <img src="<?= base_url('assets/image/footers.png')?>" class="footer-img">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box">
          <img src="<?= base_url('assets/image/logo.png')?>" class="footer-img">
          <p>SkinSaver merupakan Klinik Kecantikan yang mempunyai nama dan sudah 
            terkenal dikalangan masyarakat umum.</p>
        </div>
        <div class="col-md-4 footer-box">
          <h4><b>CONTACT US</b></h4>
          <p><i class="fa fa-map-marker"></i> Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura, Kec. Dayeuhkolot, Bandung, Jawa Barat 40257</p>
          <p><i class="fa fa-phone"></i> +628123456789</p>
          <p><i class="fa fa-envelope"></i> skinsaver@company.com</p>
        </div>
        <div class="col-md-4 footer-box">
          <h4><b>SUBSCRIBE NEWSLATTER</b></h4>
          <input type="email" class="form-control" placeholder="Your Email">
          <button type="button" class="btn btn-primary">Subscribe</button>
        </div>
      </div>
      <p class="copyright">SkinSaver Website 2020 - Web Programming</p>
    </div>
  </section>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>