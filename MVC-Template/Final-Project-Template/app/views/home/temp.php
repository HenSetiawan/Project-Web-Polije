<center>
<div class="main-header">
<div class="card mt-5 col-md-6">
  <h5 class="card-header"><?= $data["header"]; ?></h5>
  <div class="card-body">
    <h5 class="card-title <?=$data['type'];?> font-weight-bold"><?= $data["status"]; ?></h5>
    <p class="card-text"><?= $data["desc"]; ?></p>
    <a href="<?= $data['links'] ?>" class="btn btn-primary">Menuju ke Halaman Awal</a>
  </div>
</div>
</div>
</center>