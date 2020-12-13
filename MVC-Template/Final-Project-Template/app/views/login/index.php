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
                <h2 class="">Login</h2>
                <p class=" mt-3">Bagi kamu yang sudah terdaftar silahkan login</p>
            </div>
        </div>

        <!-- form login -->
        <form action="" method="POST" >
            <div class="row form-login" >
                <div class="col-md-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="alamat@email" id="email">
                </div>
                <div class="col-md-12">
                    <label for="password">Password</label>
                    <input type="password" name="password"  class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="password" id="password">
                </div>
            </div>

            <div class="row option-login">
                <div class="col ml-2">
                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                </div>
                <div class="col ml-5">
                    <a href="<?=BASEURL?>/login/lupa_Password" class="text-decoration-none">Lupa password</a>
                </div>
            </div>

            <div class="row mt-5 mb-5 button-login">
                <div class="col">
                    <button class="btn btn-success btn-sm rounded-pill" type="submit" name="submitLogin">Login</button>
                </div>
                <div class="col">
                    <button class="btn btn-outline-success btn-sm rounded-pill" onclick="location.href='<?=BASEURL?>/login/daftar'" type="button">Daftar</button>
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
