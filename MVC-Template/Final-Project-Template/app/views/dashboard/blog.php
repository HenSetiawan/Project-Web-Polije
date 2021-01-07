<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
  //<![CDATA[
  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
</script>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Daftar Blog</h1>

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
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                      if(!empty($data['blog'])){
                       foreach($data['blog'] as $data){ ?>
                        <tr>
                          <td><?= $data['judul']; ?></td>
                          <td><?= $data['tanggal']; ?></td>
                          <td><img src="<?= BASEURL . '/public/blogs/' . $data['foto'] ?>"  width="50px" height="50px"></td>
                          <td class="small"><p><?= $data['tulisan']; ?></p></td>
                          <td>
                            <button class="btn btn-sm btn-danger btn-delete-mitra" data-url="<?=BASEURL;?>/dashboard/deleteJudulBlog/<?=$data['id_blog']; ?>">Hapus</button>
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

        <!-- Modal -->
        <div class="modal fade" id="TambahKos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
             <form action="<?=BASEURL?>/dashboard/insertJudulBlog" method="POST" enctype="multipart/form-data">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <label for="nama-kos">Judul Deskripsi</label>
                    <input type="text" name="judul" id="nama-kos" class="form-control" required>
                  </div>
                  <div class="col-md-4">
                    <label for="alamat-kos">Tanggal</label>
                    <input type="text" name="tanggal" id="alamat-kos" class="form-control" value="<?= 
                    date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d H:i:s"); ?>" readonly required>
                  </div>
                  <div class="col-md-2">
                      <label for="foto">Foto</label>
                      <input type="file" name="foto" id="foto" required>
                  </div>
                  <div class="form-group col-md-12 desc mt-3">
                    <label for="desc">Text Deskripsi</label>
                    <textarea name="area3" cols="100" rows="10"></textarea>
                  </div>
                </div>  
              <div class="modal-footer">
                <button type="submit" name="cancel" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <button type="submit" name="judulBlog" class="btn btn-primary btn-sm">Simpan</button>
              </div>
            </form>
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