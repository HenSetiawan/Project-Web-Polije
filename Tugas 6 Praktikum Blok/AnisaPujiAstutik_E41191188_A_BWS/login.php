<?php
    $login =  [
        [
            'username' => "anisa",
            'password' => "234",
            'level' => "1"
        ],
        [
            'username' => "puji",
            'password' => "432",
            'level' => "2"
        ]
    ];
    foreach($login as $data){
        if($_POST['user'] == $data['username'] && $_POST['pass'] == $data['password']){
                session_start();
                $_SESSION['user'] = $_POST['user'];
                $_SESSION['level'] = ($data['level']=="1")?'Admin':'User Biasa';
                header("Location: dashboard.php");
                die();
        }else {
            echo "Username atau Password Salah";
            die();
        }    
    }
?>