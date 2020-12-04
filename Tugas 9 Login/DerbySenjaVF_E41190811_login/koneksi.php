<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_login");

if(mysqli_connect_error()){
    echo "Koneksi dengan database gagal : " . mysqli_connect_error();
}
?>