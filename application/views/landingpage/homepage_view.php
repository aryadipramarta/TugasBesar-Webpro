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