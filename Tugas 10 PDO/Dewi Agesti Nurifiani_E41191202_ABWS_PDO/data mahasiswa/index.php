<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="data">
    <h1>Tabel Mahasiswa</h1>
    </div>
    <br>

    <?php
    if (isset($_GET['pesan'])) {
        $pesan = $_GET['pesan'];
        if ($pesan == "input") {
            echo "<script>alert('Data Berhasil di Tambahkan')</script>";
        } elseif ($pesan == "update") {
            echo "<script>alert('Data Berhasil di update')</script>";
        } elseif ($pesan == "hapus") {
            echo "<script>alert('Data Berhasil di Hapus')</script>";
        }
        
    }
    ?>
    <br>
    <div class="nama">
    <h3>Data mahasiswa</h3>
</div>
    <table style="margin-left:auto;margin-right:auto" border="1" class="table">
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>jurusan</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($koneksi,"select * from tabel_mahasiswa");
        $nomor = 1;
        while ($data = mysqli_fetch_array($query_mysql)) {
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="hapus">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <div class="tombol">
        <a href="input.php" class="tombol">Tambah Data Mahasiswa Baru</a>
</div>
        </br>
</body>
</html>
</body>
</html>