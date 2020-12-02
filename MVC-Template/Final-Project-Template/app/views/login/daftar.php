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

        <div class="row login-title mt-3">
            <div class="col-md-12">
                <h2 class="">Registrasi</h2>
                <p class=" mt-2">Ayo segara daftarkan & bergabung di website kami</p>
            </div>
        </div>

        <!-- form Registration -->
        <form action="" method="POST" >

            <!-- First Name -->
            <div class="row form-login">
                <div class="col-md-7">
                    <label for="first_name">Nama Depan</label>
                    <input type="text" name="firstname" class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="nama depan anda" id="first_name">                
                </div>

                <!-- Last Name -->
                <div class="col-md-12">
                    <label for="last_name">Nama Belakang</label>
                    <input type="text" name="lastname" class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="nama belakang anda anda" id="last_name">                
                </div>

                <!-- Gender -->
                <label for="last_name" class="mt-2">Jenis Kelamin</label>  
                  <div class="col-md-4 mt-2 ml-3">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">Laki-Laki</label>
                  </div>
                  <div class="col-md-4 mt-2 mb-1">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                  </div>
               

              <!-- No Handphone -->
              <div class="col-md-12">
                <label for="handphone">No Handphone</label>
                <input type="text" name="handphone" class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="+62 0838***" >                
            </div>

            <!-- Email -->
            <div class="col-md-12">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="alamat@email" id="email">
            </div>

            <!-- Password -->
            <div class="col-md-12">
                <label for="password">Password</label>
                <input type="password" name="password"  class="form-control shadow-sm rounded-pill" style="width: 90%;" placeholder="password" id="password">
            </div>
        </div>

        <div class="row mt-1 mb-3 button-login">
            <div class="col">
                <button class="btn btn-success btn-sm rounded-pill">Daftar</button>
            </div>
        </div>
    </form>
    <!-- end form login -->
</div>
<!--end mobile login page -->

<!-- hero image desktop -->
<div class="col-md-8 hero-login">
    <img src="<?=BASEURL;?>/public/image/signup.svg" class="img-fluid">
</div>
<!--end hero image desktop -->
</div>
<!-- end login page -->

</div>
<!-- end container -->
<script src="<?=BASEURL;?>/public/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="<?=BASEURL;?>/public/js/bootstrap.js"></script>

</body>
</html>
