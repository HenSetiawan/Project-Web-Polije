
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">JUMLAH KOS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= (String)$data['jumlah']['kos_kosan']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">JUMLAH USER</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= (String)$data['jumlah']['user']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-- Pending Requests Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">JUMLAH MITRA</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= (String)$data['jumlah']['pemilik_kos']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card shadow">
                <div class="card-header">
                   <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#TambahKos">
                      Tambah Data
                    </button>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                    <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Gambar</th>
                                        <th>Gambar</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Jenis</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Gambar</th>
                                        <th>Gambar</th>
                                        <th>Gambar</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                  <?php
                                  if(!empty($data['dataKos'])){
                                   foreach($data['dataKos'] as $dataKos){ ?>
                                    <tr>
                                        <td><?= $dataKos['nama_kos'] ; ?></td>
                                        <td><?= $dataKos['alamat'] ; ?></td>
                                        <td><?= $dataKos['jenis'] ; ?></td>
                                        <td><?= $dataKos['harga'] ; ?></td>
                                        <td><?= $dataKos['deskripsi'] ; ?></td>
                                        <td><img src="<?=BASEURL; ?>/public/photos/<?=$dataKos['gambar_1'] ?>" width="50px" height="50px"></td>
                                        <td><img src="<?=BASEURL; ?>/public/photos/<?=$dataKos['gambar_2'] ?>" width="50px" height="50px"></td>
                                        <td><img src="<?=BASEURL; ?>/public/photos/<?=$dataKos['gambar_3'] ?>" width="50px" height="50px"></td>
                                    </tr>
                                 <?php }} ?>
                                </tbody>
                            </table>
                        </div>
                </div>
                </div>
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

