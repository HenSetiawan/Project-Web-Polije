<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
h1 {
    background: #87D1D8;
    padding:  10px;
    text-align: center;
    color: blue
}
    </style>
<body>
<div class="judul">
        <h1>Tabel Mahasiswa</h1>
    </div>

    <br>
    <div class="nama">
    <a href="index.php">Lihat Semua Data</a>
    <br>
    <h3>Input Data Baru</h3>
</div>
    <form action="input-aksi.php" method="POST">
        <table  style="margin-left:auto;margin-right:auto">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukan nama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"placeholder="Masukan alamat"></td>
            </tr>
            <tr>
                <td>jurusan</td>
                <td><input type="text" name="jurusan"placeholder="Masukan jurusan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
</body>
</html>