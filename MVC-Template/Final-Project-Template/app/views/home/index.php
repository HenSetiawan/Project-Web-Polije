
<div class="row justify-content-md-center main-header ">
  <div class="col-md-6">
    <h2 class="title-cari">Mau cari kos di Bondowoso?</h1>
    <p class="text-secondary ">Dapatkan infonya dan langsung sewa di KosKosang</p>

      <div class="input-group mt-5 mb-3 border main-search">
      <div class="input-group-prepend">
        <i class="fas fa-search text-secondary pl-2 icon-search"></i>
      </div>
      <input type="text" class="keyword-input pl-3" placeholder="masukan nama atau alamat" autocomplete="off" autofocus data-url="<?=BASEURL;?>">
    </div>

  </div>
  <div class="col-md-6">
    <img src="<?=BASEURL;?>/public/image/house.svg" alt="house" class="img-fluid" width="600">
  </div>
</div>



<div class="row mt-5 view-data-kos">
  <?php
  if($data['dataKos']!=null){
   foreach($data['dataKos'] as $dataKos){ ?>
    <div class="col-md-3 mb-3">
    <a href="<?=BASEURL?>/home/detail/<?= $dataKos['id_kos']; ?>" class="link-secondary text-decoration-none">
          <div class="card" >
          <img src="<?=BASEURL; ?>/public/photos/<?=$dataKos['gambar_1'] ?>" class="card-img-top w-100" height="170" alt="...">
          <div class="card-body">
            <span  class="border p-1 rounded-pill font-weight-bold span-jenis-kos"><?= $dataKos['jenis'] ; ?></span>
            <p class="card-text mt-2 ml-1"><?= $dataKos['nama_kos'] ; ?></p>
            <i class="fas fa-map-marker-alt location-kos ml-1"><span class="pl-1"><?= $dataKos['alamat'] ; ?></span></i>
            <p class="price-kos mt-1 text-success ml-1 font-weight-bold"><?= "Rp. " . $dataKos['harga'] ; ?></p>
          </div>
          </div>
        </a>
  </div>
<?php  }} ?>
</div>

