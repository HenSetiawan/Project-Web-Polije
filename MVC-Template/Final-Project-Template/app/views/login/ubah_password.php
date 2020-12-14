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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title><?=$data['title']?></title>
</head>

<body>

    <!-- navbar login -->
    <div class="row-lg-12 fixed-top" >
       <div class="row ">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top col-12">
            <div class="container ml-2 mr-2">
                <a class="navbar-brand " href="<?=BASEURL;?>/home">
                    <i class="fas fa-long-arrow-alt-left text-secondary exit-login"></i>
                    <span>kembali</span>
                </a>
            </div>
        </nav>
    </div>
</div>
<!--end navbar login -->

<!-- start container -->
<div class="container main-login">


    <!-- login page -->
    <div class="row">

       <!-- mobile login page -->
       <div class="col-md-4 login-page">
        <div class="row">
            <div class="col-md-6">
                <img src="<?=BASEURL;?>/public/image/kos.svg" class="img-fluid mt-2">
            </div>
        </div>

        <div class="row login-title mt-4">
            <div class="col-md-12">
                <h2 class="">Ubah Password</h2>
                <p class=" mt-3">Ayo bergabung dengan kami kembali sekarang juga</p>
            </div>
        </div>

        <!-- form login -->
        <form action="" method="POST" >
            <div class="row form-login" >
                <div class="col-md-12">
                    <label for="password">Password Baru</label>
                    <input type="password" name="password1" class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="masukan password" id="email">
                </div>
                <div class="col-md-12">
                    <label for="password">Konfirmasi Password</label>
                    <input type="password" name="password2"  class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="masukan password" id="password">
                </div>
            </div>

            <div class="row mt-2 button-login">
                <div class="col">
                    <button class="btn btn-success btn-sm rounded-pill" type="submit" name="submit">Ubah Password</button>
                </div>
            </div>
        </form>
        <!-- end form login -->
    </div>
    <!--end mobile login page -->

    <!-- hero image desktop -->
    <div class="col-md-8 hero-login">
        <img src="<?=BASEURL;?>/public/image/login.svg" class="img-fluid">
    </div>
    <!--end hero image desktop -->
</div>
<!-- end login page -->

</div>
<!-- end container -->
</body>
</html>
