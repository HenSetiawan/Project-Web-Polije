<?php
    $cek_login =  [
        [
            'username' => "dewi",
            'password' => "indonesia",
        ],
        [
            'username' => "agesti",
            'password' => "indonesia",
        ]
    ];
    foreach($cek_login as $val){
        if($_POST['user'] == $val['username'] && $_POST['pass'] == $val['password']){
                session_start();
                header("Location: dashboard.php");
                die();
        }else {
            echo "Username atau password salah, periksa lalu coba lagi";
            die();
        }    
    }
?>