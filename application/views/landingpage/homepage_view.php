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

<section id="carousel">
  <div class ="container">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="height:525px" >
            <img src="<?= base_url('assets/image/face.jpg') ?>" class="d-block w-100" id="face" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4" style="margin-top:-300px" >Dapatkan kandungan terbaik dari <br> <span class="font-weight-bold">Niacinamide</span></h1>
              <h5>Melalui produk kami serum niacinamide</h5>
              <p>Niacinamide adalah bentuk dari Niacin atau B3 yang berfungsi untuk mengatasi masalah kulit seperti keriput, mempromosikan kesehatan kulit, dan memberikan manfaat anti-inflamasi.</p>
            </div>
          </div>
          <div class="carousel-item" style="height:525px">
            <img src="<?= base_url('assets/image/face2.jpg') ?>"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4" id="face" style="color:darkgoldenrod" style="">Dapatkan kandungan terbaik dari <br> <span class="font-weight-bold">Ceramide</span></h1>
              <h5 style="color:darkgoldenrod">Melalui produk kami barrier moisturizer with ceramide</h5>
              <p style="color:black;">Ceramide berfungsi untuk memproteksi kulit dan mempertahankan kelembapan kulit. Dibandingkan dengan kolagen dan hyaluronic acid, ceramide mampu mempertahankan kelembapan di bagian terluar lapisan kulit (stratum corneum) lebih lama.</p>
            </div>
          </div>
          <div class="carousel-item" style="height:525px">
            <img src="<?= base_url('assets/image/face3.jpg') ?>"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="display-4" id="face2" style="color:rgb(65, 45, 57); margin-top:-330px">Dapatkan kandungan terbaik dari <br> <span class="font-weight-bold">Benzoyl Peroxide</span></h1>
              <h5 style="color:rgb(65, 45, 57)">Melalui produk kami Cleanser dengan 2% Benzoyl Peroxide </h5>
              <p style= "color:rgb(165, 75, 123)">Benzoyl Peroxide merupakan bahan yang berfungsi mengurangi peradangan, membunuh bakteri penyebab jerawat, dan membuka pori-pori kulit yang tertutup</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
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