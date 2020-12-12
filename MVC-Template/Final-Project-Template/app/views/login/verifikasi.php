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
    <div class="alert alert-warning col-md-12" role="alert">
        <h4 class="alert-heading">Perhatian</h4>
        <p class="mt-3">Saat anda sudah menyiapkan akun anda, kami akan mengirimkan kode verifikasi ke alamat email yang telah Anda gunakan untuk membuat akun. Jika tidak memverifikasi alamat, Anda tidak dapat membuat Akun KosKosang. Jika akun belum diverifikasi, Anda akan melihat pesan yang meminta Anda untuk memverifikasi akun pada email anda</p>
        <hr>
        <p class="mb-0">Pastikan akun anda telah menerima email dari tim kami</p>
    </div>
</div>

<!-- end container -->
<script src="<?=BASEURL;?>/public/js/index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="<?=BASEURL;?>/public/js/bootstrap.js"></script>
<script src="<?=BASEURL;?>/public/js/wa.js"></script>
</body>
</html>
