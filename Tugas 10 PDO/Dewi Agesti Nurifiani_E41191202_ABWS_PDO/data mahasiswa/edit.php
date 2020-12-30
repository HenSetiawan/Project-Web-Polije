<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="data">
    <h1>Tabel mahasiswa</h1>
    </div>
    <br>
    <div class="nama">
    <h3>Edit Data</h3>
    </div>
</br>
    <?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query_mysql = mysqli_query($koneksi,"select * from tabel_mahasiswa where id = '$id'");
    $nomor = 1;
    while ($data = mysqli_fetch_array($query_mysql)) {
    ?>
    <form action="update.php" method="POST">
        <table style="margin-left:auto;margin-right:auto">
            <tr>
                <td>Nama</td>
                <td><input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>">
                </td>
            </tr>
            <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="jurusan" value="<?php echo $data['jurusan'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                <input type="submit" value="Simpan">
                </td>
            </tr>
        </table>
    </form>
    <?php } ?>
    <br>
    <div class="tombol">
    <a href="index.php">Lihat Semua Data</a>
    </div>
    </br>
</body>
</html>
</body>
</html>