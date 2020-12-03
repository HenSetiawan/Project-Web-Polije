<?php 

require '../php/functions2.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM dosen WHERE 
          nip LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' OR
          tanggal_lahir LIKE '%$keyword%' OR
          agama LIKE '%$keyword%' 
          ";

$Dosen = queryDataDosen($query);          

?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center">NIP</th>
      <th scope="col" class="text-center">Action</th>
      <th scope="col" class="text-center">Nama Lengkap</th>
      <th scope="col" class="text-center">Tanggal Lahir</th>
      <th scope="col" class="text-center">Agama</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($Dosen as $ds) : ?>    
      <tr>
        <th scope="row"><?= strtoupper($ds['nip']); ?></th>
        <td class="text-center">
          <button class="btn btn-danger" style="width: 85px;"><a href="hapusDosen.php?id=<?= $ds['nip']; ?>" class="text-white" onclick="return confirm('Apakah anda yakin ?');">Hapus</a></button> ||
          <button class="btn btn-primary" style="width: 85px;"><a href="editDosen.php?id=<?= $ds['nip']; ?>" class="text-white">Edit</a></button>
        </td>
        <td><?= $ds["nama"]; ?></td>
        <td class="text-center"><?= $ds["tanggal_lahir"]; ?></td>
        <td class="text-center"><?= $ds["agama"]; ?></td>
      </tr>
    <?php endforeach; ?>    
  </tbody>
</table> 