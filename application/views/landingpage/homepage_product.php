<!-- jumbotron -->
<section id="banner">
  <div class="d-flex justify-content-center">
    <br>
    <h2 class="isibanneruser"><b>OUR PRODUCT</b></h2>
  </div>
  <div class="d-flex justify-content-center">
    <br>
    <img src="<?= base_url('assets/image/productpage.png') ?>" class="about-banner">
  </div>
  <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">
</section>

<!--Service-->
<?php
$data = file_get_contents('assets/image/produk.json');
$produk = json_decode($data, true);
$produk = $produk["produk"];
?>
<section class="services">
  <div class="d-flex justify-content-center">
      <div class="row">
      <?php foreach ($produk as $d) : ?>
        <div class="col-md-auto product-card center" style="width:87rem; height:30rem;">
          <br>
          <br>
          <h5><b><?= $d["tipe_produk"];?><b></h5>
          <div class="card-body bg-light mb-3" style="margin:0 auto; width: 500px ">
          <img src="<?=base_url('assets/image/')?><?=$d["gambar"]?>"class="gambarproduct">
          </div>
          <h5><?=$d["nama_produk"];?></h5>
          <p><?=$d["deskripsi"]; ?></p>
          <h5><?= $d["harga"];?></h5>
        </div>
      <?php endforeach; ?>
      </div>
  </div>
</section>