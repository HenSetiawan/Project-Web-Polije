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
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Daftar Mitra</h1>

            <div class="row">
            <div class="col-md-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                  Tambah
                  </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>No Handphone</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Email</th>
                                    <th>No Handphone</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                              <?php 
                              foreach($data['mitra'] as $mitra){ ?>
                                <tr>
                                    <td><?= $mitra['nama'] ; ?></td>
                                    <td><?= $mitra['alamat'] ; ?></td>
                                    <td><?= $mitra['email'] ; ?></td>
                                    <td><?= $mitra['no_hp'] ; ?></td>
                                    <td>
                                        <button class="btn btn-sm btn-danger btn-delete-mitra" data-url="<?=BASEURL?>/dashboard/hapusMitra/<?=$mitra['id_pemilik'] ?>">Hapus</button>
                                        <a href="http://" class="btn btn-sm btn-warning">Ubah</a>
                                    </td>
                                </tr>
                              <?php } ?>  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
            </div>

        </div>
        <!-- /.container-fluid -->


        <!-- Button trigger modal -->
   

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <form action="" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mitra</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>

                <div class="form-group">
                    	<label for="noKtp">No KTP</label>
                      <input type="text" name="noKtp" id="noKtp" class="form-control">
                </div>
                
                  </div>

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" id="email" class="form-control">
                  </div>

                  <div class="form-group">
                    	<label for="noHandphone">No Handphone</label>
                      <input type="text" name="noHandphone" id="noHandphone" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                  </div>
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary btn-sm" name="submitMitra">Simpan Data</button>
                </div>
              </div>
            </form>
            </div>
          </div>

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
