

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
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
                                        <th>Aksi</th>
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
                                        <th>Aksi</th>
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

                                        <td>
                                            <button class="btn btn-sm btn-danger btn-block btn-delete-kos"
                                             data-url="<?=BASEURL; ?>/mitra/deletedatakosbyid"
                                             data-id="<?=$dataKos['id_kos'] ?>"
                                             
                                             >Hapus</button>
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




<!-- Modal -->
<div class="modal fade" id="TambahKos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
     <form action="<?=BASEURL?>/mitra/insertDataKos" method="POST" enctype="multipart/form-data">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
              <label for="nama-kos">Nama Kos</label>
              <input type="text" name="nama-kos" id="nama-kos" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="alamat-kos">Alamat Kos</label>
              <input type="text" name="alamat-kos" id="alamat-kos" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="sewa-kos">Harga Sewa</label>
              <input type="text" name="sewa-kos" id="sewa-kos" class="form-control" required>
            </div>

              <div class="col-md-6">
              <label for="jenis-kos">Jenis Kos</label>
                    <select name="jenis-kos" id="jenis-kos" class="form-control" required>
                        <option value="campur">Campur</option>
                        <option value="putra">Putra</option>
                        <option value="putri">Putri</option>
                    </select>
                </div>

        </div>
        <div class="row mt-2">
          <div class="col-md-4">
                <label for="foto-satu">Foto</label>
                <input type="file" name="foto-satu" id="foto-satu" required>
          </div>
          <div class="col-md-4">
                <label for="foto-dua">Foto</label>
                <input type="file" name="foto-dua" id="foto-dua" required>
          </div>
          <div class="col-md-4">
                <label for="foto-tiga">Foto</label>
                <input type="file" name="foto-tiga" id="foto-tiga" required>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-md-12">
              <label for="deskripsi-kos">Deskripsi Kos</label>
            	<textarea name="deskripsi-kos" id="deskripsi-kos" cols="30" rows="5" class="form-control" required></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="update-kos" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
        <button type="submit" name="insert-kos" class="btn btn-primary btn-sm">Simpan</button>
      </div>
      </form>
      </div>
  </div>
</div>