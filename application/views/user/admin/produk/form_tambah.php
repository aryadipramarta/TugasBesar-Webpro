<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/css/style.css') ?> " rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('assets/image/logo.png') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.10/dist/sweetalert2.min.css">
</head>

<body>

    <div class="container">
        <h2>Tambah Produk</h2>
        <hr>
        <?= form_open_multipart('admin/createProduk') ?>
        <div class="form-group">
            <?= form_label('Nama Produk') ?>
            <?= form_input(['name' => 'nama_produk', 'class' => 'form-control', 'required' => 'required']) ?>
        </div>
        <div class="form-group">
            <?= form_label('Kategori') ?>
            <?= form_input(['name' => 'kategori', 'class' => 'form-control', 'required' => 'required']) ?>
        </div>
        <div class="form-group">
            <?= form_label('Deskripsi') ?>
            <?= form_textarea(['name' => 'deskripsi', 'class' => 'form-control', 'rows' => '4', 'required' => 'required']); ?>
        </div>
        <div class="form-group">
            <?= form_label('Harga') ?>
            <?= form_input(['name' => 'harga', 'class' => 'form-control', 'type' => 'number', 'required' => 'required']) ?>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Upload</span>
                </div>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
                    <label class="custom-file-label text-left" for="uploadImage">Choose file</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <a href="<?= site_url('admin/produk') ?>" class="btn btn-success">Back</a>
            <?= form_reset(['value' => 'Reset', 'class' => 'btn btn-info']) ?>
            <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']); ?>
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