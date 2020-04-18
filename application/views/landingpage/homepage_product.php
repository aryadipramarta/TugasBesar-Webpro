<!-- jumbotron -->
<section id="banner">
  <div class="d-flex justify-content-center">
    <br>
    <h2 class="isibanneruser"><b>OUR PRODUCT</b></h2>
  </div>
  <div class="d-flex justify-content-center">
    <br>
    <img src="<?= base_url('assets/image/contact.png') ?>" class="about-banner">
  </div>
  <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
</section>

<!--Service-->
<section class="services">
  <div class="d-flex justify-content-center">
    <?php foreach ($data as $d) : ?>
      <div class="row text-center">
        <div class="col product-card">
          <h2 class="judulproduct"><b><?= $d->nama_produk ?></b></h2>
          <br>
          <img src="<?= base_url('assets/image/') . $d->produk_img ?>" class="gambarproduct">
          <p><?= $d->deskripsi; ?></p>
          <h5><?= $d->harga ?></h5>
        </div>
      </div>
    <?php endforeach; ?>
  </div>


</section>