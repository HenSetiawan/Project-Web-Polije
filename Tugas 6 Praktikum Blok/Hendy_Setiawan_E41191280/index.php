<?php 

    // untuk menjalakan session kita butuh session start
    // session adalah variable super global sama seperti post dan get
    // session dapat di akses antar halaman
    // isi dari session adalah array associative
    session_start();
    $err=false;


    // dibawah ini adalah array asociative dengan dua nilai
    // username berisi hendy,password berisi l
    $data=["username"=>"hendy","password"=>"lavender"];


    // melakukan pengecekan apakah variable post dengan key login sudah ada atau belum
    // variable post dengan key login akan ada ketika button submit dengan name login di tekan
    // post berasal dari tag form dengan method post
    // ketika tombol sudah ditekan jalankan perintah dibawahnya
    if(isset($_POST['login'])){

        // data adalah variable local sehingga tidak bisa diakses di dalam function
        //kita mengubah data menjadi variable global
        global $data;

        // mengambil nilai dari form dengan name username
        // mengambil 
        $name=$_POST['username'];
        $password=$_POST['password'];


        // kita melakukan pengecekan apakah nilai data dari array sama dengan nilai data dari post
        // nilai data post diinput oleh user
        // jika data sama maka buat variabel session dengan key login dengan nilai true
        // arahkan halaman ke home.php dengan perintah header
        if($data['username']==$name && $data['password']==$password){
            $_SESSION['login']=true;
            header("Location:home.php");
            die();
        }


        $err=true;

    }


    // session yang sudah dibuat akan hilang dalam satu sesi
    // satu sesi berarti ketika kita menutup browser
    // sebelum itu session akan tetap ada



    // lakukan pengecekan apakah session masih ada
    // jika session belum hilang makan login.php tidak boleh diakses
    if(isset($_SESSION['login'])){
        header("Location:home.php");
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost/login/css/style.css">
    <link rel="stylesheet" href="http://localhost/login/css/bootstrap.css">
    <title>Login PHP</title>
</head>
<body>



<!-- form dengan method post ditangkap dengan variable post -->
<!-- data dikirim ke halaman dalam atribute action -->
<!-- data dikirim ke halam ini sendiri karena action berisi kosong -->
<form action="" method="post">
        <div class="row container-login">
            <div class="col-md-4 ml-3 main-login ">

                <div class="row mt-3">
                    <div class="col-md-12">
                        <h2 class="title-login">Login</h2>
                        <p>Bagi kamu yang sudah terdaftar silahkan login</p> 
                        <?php 
                        if($err){
                            echo '<p class="font-italic text-danger">username atau password salah</p>';
                        }    
                        ?>
                           
                    </div>
                </div>

                <div class="row input-item mt-3">
                    <div class="col-md-12">

                    <!-- data username diambil dari input dibawah ini -->
                        	<label for="username" class="ml-2">Username</label>
                            <input type="text" name="username" id="username" class="form-control shadow-sm" placeholder="username" autocomplete="off">
                    </div>

                    <div class="col-md-12 mt-1">
                        <!-- data password diambil dari input dibawah ini -->
                        	<label for="passsword" class="ml-2">Passsword</label>
                            <input type="password" name="password" id="passsword" class="form-control shadow-sm" placeholder="password">
                    </div>
                </div>


                <div class="row mt-2">
                    <div class="col">
                            <input type="checkbox" name="remember" id="remember">
                            <span>ingat saya</span>
                    </div>

                    <div class="col">
                        <a href="">lupa password?</a>
                    </div>
                </div>

                <div class="row mt-5 btn-login">
                    <div class="col-md-12">
                        <!-- tombol login dengan key login diambil dari button dibawah -->
                        <button type="submit" name="login" class="btn btn-success btn-sm">Login</button>
                    </div>
                    <div class="col-md-12 mt-2 mb-3">
                        <button type="submit" class="btn btn-outline-success btn-sm">Daftar</button>
                    </div>
                </div>
            </div>

            <div class="col hero-login ">
                <img src="http://localhost/login/img/loginHero.svg" class="img-fluid mb-5">
            </div>
        </div>
    </form>
 

   <script src="http://localhost/login/js/bootstrap.js"></script> 
</body>
</html>