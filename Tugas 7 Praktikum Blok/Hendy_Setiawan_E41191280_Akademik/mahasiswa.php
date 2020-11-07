<?php 
require 'modelMahasiswa.php';


  $students=getAllDataStudents();

  if(isset($_POST['insert'])){
    inserStudents($_POST);
  }

if(isset($_POST['update'])){
  $id=$_POST['id'];
  updateDataById($id,$_POST);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SISTEM AKADEMIk - Mahasiswa</title>

  

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Pages
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="mahasiswa.php">
          <i class="fas fa-graduation-cap"></i>
          <span>Mahasiswa</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-user-tie"></i>
          <span>Dosen</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small keyword" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Mahasiswa</h1>
          
          <div class="row">
            <div class="col-md-4">
              <form action="" method="POST" class="form-data">
                    
                		<label for="nim">Nim</label>
                    <input type="text" name="nim" id="nim" class="form-control" autocomplete="off" required>

                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" autocomplete="off" required>

                    <label for="tgl">Tanggal Lahir</label>
                    <input type="date" name="tgl" id="tgl" class="form-control" autocomplete="off" required>

                    <label for="agame">Agama</label>
                    <select name="agama" class="form-control" id="agama">
                      <option value="islam" class="form-control">Islam</option>
                      <option value="kristen" class="form-control">Kristen</option>
                      <option value="hindu" class="form-control">Hindu</option>
                      <option value="budha" class="form-control">Budha</option>
                      <option value="kong hu cu" class="form-control">Kong Hu Cu</option>
                    </select>

                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" class="form-control" autocomplete="off" required>

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>


                    <input type="text" name="id" class="input-id" style="display: none;">

                    <button type="submit" id="insertData" name="insert" class=" btn btn-primary btn-sm form-control mt-3 mb-3">Simpan</button>

                    <button type="submit" id="updateData" name="update" class=" btn btn-success btn-sm form-control mt-2 mb-3">Ubah</button>
              </form>
            </div>

            <div class="col table-mhs">
              <table class="table mt-2">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">TGL-L</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>

                <?php
                  $no=1;
                 foreach($students as $student) { ?>
                  <tr>
                    <th scope="row"><?= $no ; ?></th>
                    <td><?= $student['nim'] ; ?></td>
                    <td><?= $student['nama'] ; ?></td>
                    <td><?= $student['tgl_lahir'] ; ?></td>
                    <td><?= $student['agama'] ; ?></td>
                    <td>
                      <button class="btn btn-sm btn-danger btnDelete" data-url="http://localhost/akademik/delstudent.php?id=<?=$student['id']?>">hapus</button>
                      <button class="btn btn-sm btn-warning btnUpdate" data-id="<?=$student['id'] ?>">ubah</button>
                    </td>
                  </tr>
               <?php  $no++;} ?>
                 
                </tbody>
              </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="js/index.js"></script>

</body>
</html>
