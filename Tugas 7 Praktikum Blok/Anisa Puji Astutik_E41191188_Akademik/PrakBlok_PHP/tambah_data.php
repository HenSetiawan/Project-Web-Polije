<?php 
include 'koneksi.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lhr = $_POST['tanggal_lhr'];
$jurusan = $_POST['jurusan'];
$umur = $_POST['umur'];
$jk = $_POST['jk'];
mysqli_query($kon, "INSERT INTO mahasiswa VALUES('$nik','$nama','$jk','$tanggal_lhr','$jurusan','$umur')");
 
header("location:form.php");
?>