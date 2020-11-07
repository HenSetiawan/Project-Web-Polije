<?php
$nama = [
    'username'=>'sulton',
    'password'=>'123'
];
if ($_POST['user']==$nama["username"]){
    if ($_POST['pass']==$nama["password"]){
        header ('location : index.php');
    }
    else {
        echo "Password Anda Salah";
    }}
    else {
        echo "Username Anda salah";
    }
    

?>