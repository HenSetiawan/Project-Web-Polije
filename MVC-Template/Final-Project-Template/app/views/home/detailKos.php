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
    </div>

    <div class="col-md-6 mt-3 mb-5">
        <h3 class="font-weight-bold"><?= $data["detailKos"]["nama_kos"]; ?></h2>
        <span  class="border p-1 rounded-pill font-weight-bold span-jenis-kos"><?= $data["detailKos"]["jenis"]; ?></span>
        <i class="fas fa-map-marker-alt location-kos ml-2 mt-3"><span class="pl-1"><?= $data["detailKos"]["alamat"]; ?></span></i>
        <span class="price-kos ml-2 mr-2 mt-3"><?= "Rp. " . $data["detailKos"]["harga"] . " /bln"; ?></span>
        <div>
           <button type="button" class="btn btn-warning btn-sm rounded-pill badge mt-3" data-toggle="modal" data-target="#exampleModal">
          Beri Penilaian
           </button>
           <i class="fa fa-star ml-2" aria-hidden="true"><span class="text-dark font-weight-bold small ml-1"><?= (string)$data["star"]["rate"]; ?></span></i>
        </div>
        <p class="mt-3 small"><?= $data["detailKos"]["deskripsi"]; ?></p>
        <a href="https://api.whatsapp.com/send?phone=<?= $data['hp']; ?>" class="btn btn-success btn-sm rounded-pill" >Hubungi Pemilik Kos</a>
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
          <i class="fa fa-thumbs-o-down mr-1" style="font-size:24px"></i>
          <input class="form-check-input" type="radio" name="radio" value="1">
          <input class="form-check-input" type="radio" name="radio" value="2">
          <input class="form-check-input" type="radio" name="radio" value="3" checked>
          <input class="form-check-input" type="radio" name="radio" value="4">
          <input class="form-check-input" type="radio" name="radio" value="5">
          <i class="fa fa-thumbs-o-up ml-1" style="font-size:24px"></i>
      </div>
      </center>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="rate">Save changes</button>
      </div>
    </div>
   </form>
  </div>
</div>

