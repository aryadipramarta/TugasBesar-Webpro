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
  <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>

  <!-- Navigation -->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
      <?php foreach ($data as $d) : ?>
        <h1 class="navbar-brand"><i class="fas fa-user-circle"></i><b> | <?= $d['username']; ?> </b></h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien'); ?>">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/produk'); ?>">PESAN PRODUCT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/service'); ?>">PESAN SERVICE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/feedback'); ?>">FEEDBACK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('pasien/profile'); ?>">EDIT PROFILE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('home'); ?>">LOGOUT</a>
            </li>
          </ul>
        </div>
    </nav>
  </section> <!-- jumbotron -->
  <section id="banner">
    <div class="d-flex justify-content-center">
      <img src="<?= base_url('assets/image/logo.png') ?>" alt="" class="img-logobanner">
    </div>
    <img src="<?= base_url('assets/image/wave1.png') ?>" class="bottom-img">

  </section>

  <!--Service-->
  <section class="services">
    <div class="d-flex justify-content-center">
      <div class="cardeditprofile">
        <div class="card-body">
          <div class="d-flex justify-content-center">
            <img src="<?= base_url('assets/image/feedback.png') ?>" alt="" class="editprofileimg">
          </div>
          <div class="d-flex justify-content-center">
            <h3 class="juduledit"><b>GIVE FEEDBACK TO US</b></h3>
          </div>
          <div class="d-flex justify-content-center">
            <span id="success_message"></span>
            <form method="post" id="feedback_form">
              <div class="form-group">
                <label for="exampleInputName">Nama</label>
                <input type="text" class="form-control" id="exampleInputnama" name="name" aria-describedby="nameHelp">
                <span id="name_error" class="text-danger"></span>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail" name="email" aria-describedby="emailHelp">
                <span id="email_error" class="text-danger"></span>  
            </div>
              <div class="form-group">
                <label for="pesan">Berikan Kami Masukkan</label>
                 <textarea class="form-control" id="pesan" rows="3" name="pesan"></textarea>
                 <span id="pesan_error" class="text-danger"></span>
                </div>
             <input type="submit" name="feedback" id="feedback" class="btn btn-info" value="Kirim Feedback">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      $(document).ready(function(){

        $("feedback_form").on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: "<?php echo base_url(); ?>pasien/feedback_validation",
                method:"POST",
                data:$(this).serialize(),
                dataType:"json",
                beforeSend:function(){
                    $('#feedback').attr('disable','disabled');
                },
                success:function(data){
                    if(data.error){
                        if(data.name_error != ''){
                            $('#name_error').html(data.name_error);
                        }else{
                            $('#name_error').html('');
                        }
                        if(data.email_error != ''){
                            $('#email_error').html(data.email_error);
                        }
                        else{
                            $('#email_error').html('');
                        }
                        if(data.pesan_error != ''){
                            $('#pesan_error').html(data.email_error);
                        }
                        else{
                            $('#pesan_error').html('');
                        }
                    }
                    if(data.success){
                        $('#success_message').html(data.success);
                        $('#name_error').html('');
                        $('#email_error').html('');
                        $('#pesan_error').html('');
                        $('#feedback_form')[0].reset();
                    }
                    $('#feedback').attr('disabled', false)
                }             
            })
        });
      });
</script>
<?php endforeach; ?>