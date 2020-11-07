<?php
include "koneksi.php";
$nim = $_POST ['nim'];
$name = $_POST ['name'];
$lahir = $_POST ['lahir'];
$agama = $_POST ['agama'];
$username = $_POST ['username'];
$password = $_POST ['password'];

mysqli_query($host,"insert into tb_mahasiswa values ('$nim','$name','$lahir','$agama','$username','$password')");
header ("location:index.php")
?>