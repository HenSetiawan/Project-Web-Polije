<?php 


// ketika button submit dengan key logout ditekan hancurkan sessionnya
//arahkan ke index.php untuk login lagi

    if(isset($_POST['logout'])){
        session_start();
        session_destroy();
        header("Location:index.php");
    }else{
        header("Location:home.php");
    }

  

?>