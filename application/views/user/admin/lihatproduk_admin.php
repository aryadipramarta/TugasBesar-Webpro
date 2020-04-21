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
    <link rel="icon" href="<?= base_url('assets/image/logo.png') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
</head>

<body>

    <!-- Navigation -->
    <section id="nav-bar">
        <nav class="navbar navbar-expand-lg navbar-light">

            <h1 class="navbar-brand"><i class="fas fa-user-circle"></i><b> | </b></h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('admin/produk'); ?>">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>home/contact">SERVICE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>home/product">DOKTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section> <!-- jumbotron -->
    <section id="banner">


        <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">

    </section>
    <section id="produk">
        <div class="container text-right">
            <a href="<?= site_url('admin/form_tambah') ?>" class="btn btn-primary">Tambah Produk</a>
        </div>
        <br>
        <?php
        $template = array(
            'table_open' => '<table id="tbProduk" class="table table-striped table-bordered">',
            'thead_open' => '<thead class="text-center">'
        );
        $this->table->set_template($template);
        $this->table->set_heading('ID', 'Nama Produk', 'Kategori', 'Deskripsi', 'Harga', 'Image', 'Aksi');
        foreach ($data as $d) {
            $url = 'TugasBesar-Webpro/admin/deleteProduk/' . $d->id_produk;
            $this->table->add_row(
                $d->id_produk,
                $d->nama_produk,
                $d->kategori,
                $d->deskripsi,
                'Rp ' . number_format($d->harga),
                $d->produk_img,
                '<a href="' . site_url('admin/form_update/' . $d->id_produk)
                    . '" class="btn btn-warning btn-sm">'
                    . '<i class="fa fa-edit"></i>'
                    . '</a> &nbsp;'
                    . "<button href=\"#\" onclick=\"del('" . $url . "')\" class=\"btn btn-danger btn-sm\">"
                    . '<i class="fa fa-trash"></i>'
                    . '</button>'
            );
        }
        echo $this->table->generate();
        $this->table->clear();
        ?>
    </section>

    <!--Service-->