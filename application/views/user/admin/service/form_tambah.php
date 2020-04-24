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
        <h2>Tambah Service</h2>
        <hr>
        <?= form_open('service/createService') ?>
        <div class="form-group">
            <?= form_label('Nama Service') ?>
            <?= form_input(['name' => 'nama_produk', 'class' => 'form-control', 'required' => 'required']) ?>
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
            <a href="<?= site_url('admin/service') ?>" class="btn btn-success">Back</a>
            <?= form_reset(['value' => 'Reset', 'class' => 'btn btn-info']) ?>
            <?= form_submit('submit', 'Submit', ['class' => 'btn btn-primary']); ?>
        </div>
        <?= form_close() ?>
    </div>
</body>

</html>