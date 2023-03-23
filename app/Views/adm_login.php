<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('temp_admin/temp_login') ?>/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('temp_admin/temp_login') ?>/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('temp_admin/temp_login') ?>/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('temp_admin/temp_login') ?>/css/style.css">
    <link rel="shortcut icon" href="<?= base_url('temp_admin/temp_login') ?>/favicon.ico" type="image/x-icon">
    <link rel="manifest" href="<?= base_url('temp_admin/temp_login') ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <title><?= $judul; ?></title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="<?= base_url('temp_admin/temp_login') ?>/images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3 class="text-center"> Administrator</h3>
            </div>
            <?php
          if(!empty(session()->getFlashdata('pesan'))){ ?>
          <div class="alert alert-info">
              <?= session()->getFlashdata('pesan') ?>
          </div>
          <?php } ?>
            <form action="<?= base_url('adminkampus/adm_cek') ?>" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="adm_username" name="adm_username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="adm_password" name="adm_password">
                
              </div>
              

              <input type="submit" value="Log In" class="btn btn-block btn-primary">              
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?= base_url('temp_admin/temp_login') ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('temp_admin/temp_login') ?>/js/popper.min.js"></script>
    <script src="<?= base_url('temp_admin/temp_login') ?>/js/bootstrap.min.js"></script>
    <script src="<?= base_url('temp_admin/temp_login') ?>/js/main.js"></script>
  </body>
</html>