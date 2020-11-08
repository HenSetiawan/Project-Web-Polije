<?php 

require 'php/functions2.php';


$id = $_GET["id"];

if (deleteDataDosen($id) > 0) {
	echo 
	"<script>
		alert('Data berhasil dihapus');
		document.location.href = 'dosen.php';
	</script>";
}else{
	echo 
	"<script>
		alert('Data gagal dihapus);
		document.location.href = 'dosen.php';
	</script>";
}





?>