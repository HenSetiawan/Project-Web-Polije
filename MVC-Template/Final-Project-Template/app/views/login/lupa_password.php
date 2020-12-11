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
                <h2>Lupa Password</h2>
                <p class=" mt-3">Gunakan email untuk melakukan lupa password</p>
            </div>
        </div>

        <!-- form login -->
        <form action="" method="POST" >
            <div class="row form-login" >
                <div class="col-md-12">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="alamat@email" id="email">
                </div>
            </div>

            <div class="row mt-3 button-login">
                <div class="col">
                    <button class="btn btn-success btn-sm rounded-pill">Lupa Password</button>
                </div>
            </div>

            <div class="row option-login">
                <div class="col ml-2">
                    <a href="<?=BASEURL?>/login" class="text-decoration-none">Kembali Ke halaman login</a>
                </div>
            </div>
        </form>
        <!-- end form login -->
    </div>
    <!--end mobile login page -->

    <!-- hero image desktop -->
    <div class="col-md-8 hero-login">
        <img src="<?=BASEURL;?>/public/image/auth.svg" class="img-fluid">
    </div>
    <!--end hero image desktop -->
</div>
<!-- end login page -->

</div>
<!-- end container -->
<script src="<?=BASEURL;?>/public/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="<?=BASEURL;?>/public/js/bootstrap.js"></script>
<script src="<?=BASEURL;?>/public/js/wa.js"></script>
</body>
</html>
