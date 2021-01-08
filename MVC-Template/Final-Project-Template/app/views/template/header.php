<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=BASEURL;?>/public/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/public/css/style.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/public/css/rating.css">
    <link rel="stylesheet" href="<?=BASEURL;?>/public/font-awesome/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<?=BASEURL;?>/public/image/kos.svg">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title><?=$data['title']?></title>
</head>

<body>

<!-- navbar home -->
<div class="row-lg-12 fixed-top" >
<div class="row">
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top col-12">
    <div class="container ml-2">
        <a class="navbar-brand " href="<?=BASEURL;?>/home">
            <img src="<?=BASEURL;?>/public/image/kos.svg" class="img-fluid" alt="logo" width="160">
        </a>
        <button class="btn-nav btn btn-outline-light ml-5" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-dark mr-2" href="<?=BASEURL;?>/home">Beranda</a>
                <a class="nav-link text-dark mr-2" href="<?=BASEURL;?>/blog">Blog</a>
                <a class="nav-link text-dark mr-2" href="<?=BASEURL;?>/about">Tentang</a><br>
                <?php if(!isset($_SESSION['loginUser'])){ ?>
                    <a class="nav-link text-light rounded-pill bg-success btn-login ml-5" href="<?=BASEURL;?>/login">Masuk</a><br>
                <?php } ?>
            </div>
        </div>
        
        <ul class="navbar-nav navbar-brand mr-4">
        <?php if(isset($_SESSION['loginUser'])) { ?>
            <span class="d-lg-inline small user-name mr-1"><?php echo( (explode(" ",$data['user']['nama'])[0])) ?></span> 
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow" style="list-style: none;">
              <div id="userDropdown" role="button" data-toggle="dropdown" >
                <img class="img-profile rounded-circle" src="https://dashboard.prakerja.go.id/images/avatar-placeholder.png" width="32px" height="32px">
            </div>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu shadow logout-user">
                <a class="dropdown-item" href="<?=BASEURL?>/login/logout">
                  Logout
                </a>
              </div>
            </li>
            <?php  } ?>
        </ul>
    </div>

</nav>
</div>
</div>
    <!--end navbar home -->

    <!-- start container -->
<div class="container">

