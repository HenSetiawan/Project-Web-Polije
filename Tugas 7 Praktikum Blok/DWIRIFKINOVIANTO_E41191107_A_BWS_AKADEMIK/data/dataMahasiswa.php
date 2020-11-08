<?php 

require '../php/functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa WHERE 
          nim LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' OR
          tanggal_lahir LIKE '%$keyword%' OR
          agama LIKE '%$keyword%' 
          ";

$mahasiswa = queryDataMahasiswa($query);          

?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center">NIM</th>
      <th scope="col" class="text-center">Action</th>
      <th scope="col" class="text-center">Nama Lengkap</th>
      <th scope="col" class="text-center">Tanggal Lahir</th>
      <th scope="col" class="text-center">Agama</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($mahasiswa as $mhs) : ?>    
      <tr>
        <th scope="row"><?= strtoupper($mhs['nim']); ?></th>
        <td class="text-center">
          <button class="btn btn-danger" style="width: 85px;"><a href="hapusMahasiswa.php?id=<?= $mhs['nim']; ?>" class="text-white" onclick="return confirm('Apakah anda yakin ?');">Hapus</a></button> ||
          <button class="btn btn-primary" style="width: 85px;"><a href="editMahasiswa.php?id=<?= $mhs['nim']; ?>" class="text-white">Edit</a></button>
        </td>
        <td><?= $mhs["nama"]; ?></td>
        <td class="text-center"><?= $mhs["tanggal_lahir"]; ?></td>
        <td class="text-center"><?= $mhs["agama"]; ?></td>
      </tr>
    <?php endforeach; ?>    
  </tbody>
</table> 