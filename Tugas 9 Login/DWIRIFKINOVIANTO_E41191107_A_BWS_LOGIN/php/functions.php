<?php 

$db = mysqli_connect('localhost', 'root', '', 'polije');

function queryDataMahasiswa($data){
	global $db;
	$result = mysqli_query($db, $data);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function addDataMahasiswa($data){
	global $db;
	$nim = strtolower(htmlspecialchars($data["nim"]));
	$nama = htmlspecialchars($data["nama"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$agama = htmlspecialchars($data["agama"]);
	$username = strtolower(htmlspecialchars($data["username"]));
	$password = htmlspecialchars($data["password"]);

	if (strlen($nim) != 9) {
		echo 
		"<script>
		alert('Masukan 9 digit NIM');
		</script>";
		return false;
	}


	if (!preg_match('/^([a-zA-Z ]*)$/', $nama)) {

		echo 
		"<script>
			alert('Tidak boleh ada angka di dalam nama');
		</script>";
		return false;	

	}
		
		$result = mysqli_query($db, "SELECT * FROM mahasiswa WHERE username = '$username'");

		if (mysqli_num_rows($result) === 1) {
			echo 
			"<script>
				alert('Username sudah terdaftar');
			</script>";
			return false;	
		}

		if (strlen($username) > 15) {
			echo 
			"<script>
				alert('Username lebih dari 15 karakter');
			</script>";
			return false;
		}elseif (strlen($password) > 25) {
			echo 
			"<script>
				alert('Password lebih dari 25 karakter');
			</script>";
			return false;
		}

		$query = "INSERT INTO mahasiswa VALUES
		('$nim', '$nama', '$tanggal_lahir', 
		'$agama', '$username', '$password')";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
}

function editDataMahasiswa($data){
	global $db;
	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$agama = htmlspecialchars($data["agama"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);


	if (!preg_match('/^([a-zA-Z ]*)$/', $nama)) {

		echo 
		"<script>
			alert('Tidak boleh ada angka di dalam nama');
		</script>";
		return false;	

	}
		
		if(strlen($password) > 25) {
			echo 
			"<script>
				alert('Password lebih dari 25 karakter');
			</script>";
			return false;
		}

		$query = "UPDATE mahasiswa SET 
				  nama = '$nama',
		          tanggal_lahir = '$tanggal_lahir', 
				  agama = '$agama',
				  password = '$password'
				  WHERE nim = '$nim'";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
}


function deleteDataMahasiswa($data){
	global $db;
	$query = "DELETE FROM mahasiswa WHERE nim = '$data'";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}














?>