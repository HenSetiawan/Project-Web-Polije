<div class="row mb-4 blog-container">
  <div class="col-md-6 mt-3">
    <div class="card card-blog">
      <img src="<?=BASEURL; ?>/public/blogs/<?= $data['blog']['foto']; ?>" class="card-img-top w-100" height="350" alt="...">
      <div class="card-body">
        <h3 class="card-title">
          <a href="#" style="text-decoration: none; font-weight: bold;" class="text-dark"><?= $data['blog']['judul']; ?></a>
        </h3>
        <p class="card-text small"><?= $data['blog']['tulisan']; ?></p>
      </div>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated <?= $data['blog']['tanggal']; ?></small>
    </div>
  </div>


  <div class="col-md-6 mt-3">
    <div class="card card-blog">
      <div class="card-header">
        Mungkin yang anda cari ?
      </div>

    <?php if ($data['blog'] != null) { foreach ($data['cari'] as $data) { ?>
      <ul class="list-group list-group-flush">
        <li class="list-group-item small"><a href="<?=BASEURL;?>/blog/detailBlog/<?= $data['id_blog']; ?>" class="text-dark" style="text-decoration: none;" ><?= $data['judul']; ?></a></li>
      </ul>
    <?php }} ?>

    </div>
  </div>

</div>