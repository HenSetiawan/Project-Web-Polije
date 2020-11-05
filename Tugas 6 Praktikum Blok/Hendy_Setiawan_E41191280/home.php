<?php 
    
    // jalankan session
    session_start();
    $price=0;

    // lakukan pengecekan apakah session dengan key login belum ada
    // tanda ! berarti tidak
    // jika belum maka arahkan ke index.php dulu untuk login
    if(!isset($_SESSION['login'])){
        header("Location:index.php");
    }

    if(isset($_POST['count'])){
      $price=$_POST['price']-$_POST['discount'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/login/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost/login/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
    
<div class="home-page container">
<div class="row">   

    <div class="col-md-8 mt-4 hero-home">
        <form action="logout.php" method="POST">
            <div class="row">
                <div class="col-md-8">
                <button class="mt-5 mb-4 btn btn-outline-success btn-sm logout" name="logout">Logut</button>
                    <h3 class="text-secondary">Selamat datang,semangat ya belajarnya !!!</h3>
                    <img src="http://localhost/login/img/netflix.svg" class="img-fluid mb-5 hero-admin">
                        <!-- key logout diambil dari atribute name -->
                </div>    
            </div>
        </form>
    </div>

    <div class="col-md-4 mt-5 mb-5 shadow">
        <form action="" method="POST">
            <p class="text-secondary mt-2">Form Harga</p>
                <input type="text" name="price"  class="form-control" placeholder="masukan harga">
                <input type="text" name="discount"  class="form-control mt-3" placeholder="masukan diskon">
                <button type="submit" name="count" class="form-control btn btn-success mt-3">Hitung</button>

                <p class="shadow-sm border p-3 mt-4 text-secondary"><?= $price; ?></p>
        </form>
    </div>
   

</div>
</div>

</body>
</html>