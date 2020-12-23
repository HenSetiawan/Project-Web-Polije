<div class="row main-header" >
    <div class="col-md-6 mt-3 mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?=BASEURL; ?>/public/image/<?= $data['detailKos']['gambar_1']; ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?=BASEURL; ?>/public/image/<?= $data['detailKos']['gambar_2']; ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?=BASEURL; ?>/public/image/<?= $data['detailKos']['gambar_3']; ?>" class="d-block w-100" alt="...">
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
        <h3><?= $data["detailKos"]["nama_kos"]; ?></h2>
        <span  class="border p-1 rounded-pill font-weight-bold span-jenis-kos"><?= $data["detailKos"]["jenis"]; ?></span>
        <i class="fas fa-map-marker-alt location-kos ml-2"><span class="pl-1"><?= $data["detailKos"]["alamat"]; ?></span></i>
        <span class="price-kos ml-2"><?= "Rp. " . $data["detailKos"]["harga"] . " /bulan"; ?></span>
        <p class="mt-3"><?= $data["detailKos"]["deskripsi"]; ?></p>

    </div>
</div>

