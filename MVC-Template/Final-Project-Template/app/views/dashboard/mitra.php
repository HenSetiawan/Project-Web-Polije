        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Daftar Mitra</h1>

            <div class="row">
            <div class="col-md-12">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <button type="button" class="btn btn-primary btn-sm" id="btn-tambah-mitra" data-toggle="modal" data-target="#exampleModal">
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
                                        <button class="btn btn-sm btn-danger btn-delete-mitra" data-url="<?=BASEURL?>/dashboard/DeleteMitra/<?=$mitra['id_pemilik'] ?>">Hapus</button>

                                        <button  class="btn btn-sm btn-warning btn-update-mitra" data-toggle="modal" data-target="#exampleModal" data-url="<?=BASEURL?>/dashboard/getMitraById/<?=$mitra['id_pemilik'] ?>">Ubah</a>
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
            <form action="<?=BASEURL?>/dashboard/createOrUpdateMitra" method="post">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title title-modal-mitra" id="title-modal-mitra">Tambah Data Mitra</h5>
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

                  </div>
                </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                  <button type="submit" id="btn-submit-mitra" class="btn btn-primary btn-sm" name="submitMitra">Simpan Data</button>
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
