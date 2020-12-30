<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi,"insert into tabel_mahasiswa values ('','$nama','$alamat','$jurusan')");

header("location:index.php?pesan=input");
?>