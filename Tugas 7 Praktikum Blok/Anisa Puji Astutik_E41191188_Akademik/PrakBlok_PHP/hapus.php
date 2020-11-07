<?php
include 'koneksi.php';
$id = $_GET['id'];
echo $id;
mysqli_query($kon,"delete from mahasiswa where nik='$id'");
header("location:form.php");
?>