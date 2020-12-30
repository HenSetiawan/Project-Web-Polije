<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi," update tabel_mahasiswa set nama='$nama', alamat='$alamat', jurusan='$jurusan' where id='$id'");

header("location:index.php?pesan=update");
?>