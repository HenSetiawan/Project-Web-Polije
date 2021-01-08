        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Daftar User</h1>

            <div class="row">
            <div class="col-md-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Handphone</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No Handphone</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                              <?php 
                              if ($data['user'] != null) {
                              foreach($data['user'] as $user){ ?>
                                <tr>
                                    <td><?= $user['nama'] ; ?></td>
                                    <td><?= $user['email'] ; ?></td>
                                    <td><?= $user['no_handphone'] ; ?></td>
                                    <td>
                                      <?php
                                        if ($user['token'] == 1) {
                                            echo "Aktif";
                                          }else{
                                            echo "Tidak Aktif";
                                        }
                                      ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-danger btn-delete-mitra" data-url="<?=BASEURL?>/dashboard/deleteDataUser/<?=$user['id_user'] ?>">Hapus</button>
                                    </td>
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


        <!-- Button trigger modal -->
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
