<div class="row mb-4 blog-container">
    <?php if ($data['blog'] != null) {
        foreach ($data['blog'] as $data) { ?>
            <div class="col-md-6 mt-5">
                <div class="card card-blog">
                    <img src="<?=BASEURL; ?>/public/blogs/<?= $data['foto']; ?>" class="card-img-top w-100" height="350" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="#" style="text-decoration: none;"><?= $data['judul']; ?></a>
                        </h5>
                        <p class="card-text">klik disini untuk membaca lebih lanjut ...</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated <?= $data['tanggal']; ?></small>
              </div>
          </div>
      <?php }} ?>
  </div>