<?php 

require 'php/functions2.php';


$id = $_GET["id"];

if (deleteDataUser($id) > 0) {
	echo 
	"<script>
		alert('Data berhasil dihapus');
		document.location.href = 'user.php';
	</script>";
}else{
	echo 
	"<script>
		alert('Data gagal dihapus);
		document.location.href = 'user.php';
	</script>";
}





?>