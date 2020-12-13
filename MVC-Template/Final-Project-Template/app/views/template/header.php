<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASEURL;?>/public/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/public/css/style.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/public/font-awesome/css/all.css">
    <link rel="icon" href="<?=BASEURL;?>/public/image/kos.svg">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title><?=$data['title']?></title>
</head>

<body>

<!-- navbar home -->
<div class="row-lg-12 fixed-top" >
 <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top col-12">
        <div class="container ml-2 mr-2">
        <a class="navbar-brand " href="<?=BASEURL;?>/home">
            <img src="<?=BASEURL;?>/public/image/kos.svg" class="img-fluid" alt="logo" width="160">
        </a>
        <button class="btn-nav btn btn-outline-light" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-link text-dark" href="<?=BASEURL;?>/home">Beranda</a>
            <a class="nav-link text-dark" href="<?=BASEURL;?>/blog">Blog</a>
            <a class="nav-link text-dark" href="<?=BASEURL;?>/about">Tentang</a><br>

        <?php if(!isset($_SESSION['loginUser'])){ ?>
            <a class="nav-link text-light rounded-pill bg-success btn-login" href="<?=BASEURL;?>/login">Masuk</a><br>
       <?php } ?>

       <?php if(isset($_SESSION['loginUser'])) { ?>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline small"><?= $data['user']['nama'] ; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60" width="32px" height="32px">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=BASEURL?>/login/logout">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-secondary fs-6"></i>
                  Logout
                </a>
              </div>
            </li>
        <?php  } ?>
            
            </div>
        </div>
    </div>
    </nav>
    </div>
</div>
<!--end navbar home -->

    <!-- start container -->
<div class="container">