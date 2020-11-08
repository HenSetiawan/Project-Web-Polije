<?php 

require '../php/functions2.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM user WHERE 
          username LIKE '%$keyword%' OR
          password LIKE '%$keyword%' OR
          nama LIKE '%$keyword%' 
          ";

$Dosen = queryDataDosen($query);          

?>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center">Action</th>
      <th scope="col" class="text-center">Username</th>
      <th scope="col" class="text-center">Password</th>
      <th scope="col" class="text-center">Nama Lengkap</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($Dosen as $ds) : ?>    
      <tr>
        <td class="text-center">
          <button class="btn btn-danger" style="width: 85px;"><a href="hapusUser.php?id=<?= $ds['username']; ?>" class="text-white" onclick="return confirm('Apakah anda yakin ?');">Hapus</a></button>
        </td>
        <td><?= $ds["nama"]; ?></td>
        <td class="text-center"><?= strtoupper($ds["username"]); ?></td>
        <td class="text-center"><?= $ds["password"]; ?></td>
      </tr>
    <?php endforeach; ?>    
  </tbody>
</table> 