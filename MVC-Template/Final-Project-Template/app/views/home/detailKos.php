<div class="row main-header" >
    <div class="col-md-6 mt-3 mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?=BASEURL; ?>/public/photos/<?= $data['detailKos']['gambar_1']; ?>" class="d-block w-100" height="320" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?=BASEURL; ?>/public/photos/<?= $data['detailKos']['gambar_2']; ?>" class="d-block w-100" height="320" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?=BASEURL; ?>/public/photos/<?= $data['detailKos']['gambar_3']; ?>" class="d-block w-100" height="320" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="mt-3">
        <center>
          <p class="btn btn-success text-text rounded-pill" style="width: 100%;">Fasilitas</p>
        </center>
        <center>
          <?php if ($data['detailKos']['fas1'] == 1): ?>
              <i class="fa fa-wifi col-md-2 mr-2 text-success"> Wifi</i>
          <?php endif ?>
          <?php if ($data['detailKos']['fas2'] == 1): ?>
              <i class="fa fa-television col-md-2 mr-2 text-success"> Televisi</i>
          <?php endif ?>
          <?php if ($data['detailKos']['fas3'] == 1): ?>
              <i class="fa fa-bed col-md-2 mr-2 text-success"> Kasur</i>
          <?php endif ?>
          <?php if ($data['detailKos']['fas4'] == 1): ?>
              <i class="fa fa-bath col-md-3 mr-2 text-success"> Kamar Mandi</i>
          <?php endif ?>
        </center>
      </div>
    </div>

    <div class="col-md-6 mt-2 mb-5">
        <h3><strong><?= $data["detailKos"]["nama_kos"]; ?></strong></h2>
        <span  class="border p-1 rounded-pill font-weight-bold span-jenis-kos"><?= $data["detailKos"]["jenis"]; ?></span>
        <i class="fas fa-map-marker-alt location-kos ml-2 mt-3"><span class="pl-1"><?= $data["detailKos"]["alamat"]; ?></span></i>
        <span class="price-kos ml-2 mr-2 mt-3"><?= "Rp. " . $data["detailKos"]["harga"] . " /bln"; ?></span>
        <div>
           <button type="button" class="btn btn-warning btn-sm rounded-pill badge mt-3 text-white" data-toggle="modal" data-target="#exampleModal">
          Beri Penilaian
           </button>
          <i class="fa fa-star ml-2" aria-hidden="true"><span class="text-dark font-weight-bold small ml-1"><?= (string)$data["star"]["rate"]; ?> Stars</span></i>
          <i class="fa fa-users ml-2" aria-hidden="true"><span class="text-dark font-weight-bold small ml-2"><?= (string)$data["star"]["user_rate"]; ?> Reviewers</span></i>
        </div>
          <p class="mt-3 small"><?= $data["detailKos"]["deskripsi"]; ?></p>
        <div class="mt-2">
          <a href="https://api.whatsapp.com/send?phone=<?= $data['hp']; ?>" class="btn btn-success btn-md" style="width: 100%;">Hubungi Pemilik Kos</a>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="<?=BASEURL;?>/home/rating/<?=$data['detailKos']['id_kos'];?>" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Beri Penilaian</h5>
      </div>
      <center>
      <div class="modal-body">
          <input type="hidden" name="kos" value="<?= $data['detailKos']['id_kos']; ?>">
          <input type="hidden" name="user" value="<?= $data['user']['id_user']; ?>">
          <input type="hidden" name="pemilik" value="<?= $data['detailKos']['id_pemilik']; ?>">
         <div class="rating">
          <i class="fa fa-smile-o mr-2 text-success" style="font-size:25px; margin-top:5px;" ></i>
          <input type="radio" name="star" id="star1" value="5"><label for="star1"></label>
          <input type="radio" name="star" id="star2" value="4"><label for="star2"></label>
          <input type="radio" name="star" id="star3" value="3"><label for="star3"></label>
          <input type="radio" name="star" id="star4" value="2"><label for="star4"></label>
          <input type="radio" name="star" id="star5" value="1"><label for="star5"></label>
          <i class="fa fa-frown ml-2 text-danger" style="font-size:25px; margin-top:5px;" ></i>
        </div>
      </div>
      </center>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="rate">Simpan</button>
      </div>
    </div>
   </form>
  </div>
</div>

