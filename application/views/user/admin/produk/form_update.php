<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
</head>

<body>

    <div class="container">
        <h2>Update Produk</h2>
        <hr>
        <?= form_open_multipart('admin/updateProduk/' . $produk['id_produk']) ?>
        <div class="form-group">
            <?= form_label('Nama Produk') ?>
            <?= form_input(['name' => 'nama_produk', 'class' => 'form-control', 'required' => 'required', 'value' => $produk['nama_produk']]) ?>
        </div>
        <div class="form-group">
            <?= form_label('Kategori') ?>
            <?= form_input(['name' => 'kategori', 'class' => 'form-control', 'required' => 'required', 'value' => $produk['kategori']]) ?>
        </div>
        <div class="form-group">
            <?= form_label('Deskripsi') ?>
            <?= form_textarea(['name' => 'deskripsi', 'class' => 'form-control', 'rows' => '4', 'required' => 'required', 'value' => $produk['deskripsi']]); ?>
        </div>
        <div class="form-group">
            <?= form_label('Harga') ?>
            <?= form_input(['name' => 'harga', 'class' => 'form-control', 'type' => 'number', 'required' => 'required', 'value' => $produk['harga']]) ?>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="uploadImage" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <a href="<?= site_url('admin/produk') ?>" class="btn btn-success">Back</a>
            <?= form_submit('submit', 'Update', ['class' => 'btn btn-warning']); ?>
        </div>
        <?= form_close() ?>
    </div>
    <script src="<?php echo base_url('assets/jquery-3.2.1.min.js'); ?>"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
</body>

</html>