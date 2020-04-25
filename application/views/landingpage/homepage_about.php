  <!-- jumbotron -->
  <section id="banner">
    <div class="d-flex justify-content-center">
      <br>
      <h2 class="isibanneruser"><b>ABOUT US</b></h2>
    </div>
    <div class="d-flex justify-content-center">
      <br>
      <img src="<?= base_url('assets/image/abouts.png') ?>" class="about-banner">
    </div>
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
  </section>

  <!--Service-->
  <section class="services">
     <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active" style="height:525px" >
            <img src="<?= base_url('assets/image/about001.jpg') ?>" class="d-block w-100" id="face" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" style="height:525px">
            <img src="<?= base_url('assets/image/about002.jpg') ?>"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" style="height:525px">
            <img src="<?= base_url('assets/image/about003.jpg') ?>"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
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