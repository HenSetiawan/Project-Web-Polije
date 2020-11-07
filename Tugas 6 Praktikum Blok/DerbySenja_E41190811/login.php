<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>
            
                  <?php
                        session_start();
                        $username = 'Derby';
                        $password = 'Luwak white coffee';
                        if (isset($_POST['submit'])) {
                            if ($_POST['username'] == $username && $_POST['password'] == $password){
                                
                                $_SESSION["username"] = $username; 
        
                                
                                header("Location: index.php"); 
                            } else {
                               
                                display_login_form();
                                echo '<p>Username Atau Password Anda Salah</p>';
                            }
                        }    
                        else { 
                            display_login_form();
                        }
                      function display_login_form(){ ?>
                      <form calss="user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
                            <div class="form-group">
                              <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="username" aria-describedby="emailHelp" placeholder="Masukkan Username">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Masukkan Password">
                            </div>
                              <div class="form-group">
                              <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
                            </div>   
                            <div class="keterangan">
                              <p>
                                Keterangan user 1 : username <b><i>Derby</i></b> passwordnya <b><i>Luwak white coffee</i></b>
                              </p>
                            </div>
                        <?php } ?>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>