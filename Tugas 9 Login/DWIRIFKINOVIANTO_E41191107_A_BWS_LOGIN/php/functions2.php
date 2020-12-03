<?php 

$db = mysqli_connect('localhost', 'root', '', 'polije');

function queryDataDosen($data){
	global $db;
	$result = mysqli_query($db, $data);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function addDataDosen($data){
	global $db;
	$nip = strtolower(htmlspecialchars($data["nip"]));
	$nama = htmlspecialchars($data["nama"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$agama = htmlspecialchars($data["agama"]);
	$username = strtolower(htmlspecialchars($data["username"]));
	$password = htmlspecialchars($data["password"]);

	if (strlen($nip) > 15) {
		echo 
		"<script>
			alert('Masukan 15 digit NIP');
		</script>";
		return false;
	}


	if (!preg_match('/^([a-zA-Z .,]*)$/', $nama)) {

		echo 
		"<script>
			alert('Tidak boleh ada angka di dalam nama');
		</script>";
		return false;	

	}
		
		$result = mysqli_query($db, "SELECT * FROM dosen WHERE username = '$username'");

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

		$query = "INSERT INTO dosen VALUES
		('$nip', '$nama', '$tanggal_lahir', 
		'$agama', '$username', '$password')";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
}

function deleteDataDosen($data){
	global $db;
	$query = "DELETE FROM dosen WHERE nip = '$data'";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}

function editDataDosen($data){
	global $db;
	$nip = htmlspecialchars($data["nip"]);
	$nama = htmlspecialchars($data["nama"]);
	$tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
	$agama = htmlspecialchars($data["agama"]);
	$username = htmlspecialchars($data["username"]);
	$password = htmlspecialchars($data["password"]);


	if (!preg_match('/^([a-zA-Z .,]*)$/', $nama)) {

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

		$query = "UPDATE dosen SET 
				  nama = '$nama',
		          tanggal_lahir = '$tanggal_lahir', 
				  agama = '$agama',
				  password = '$password'
				  WHERE nip = '$nip'";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
}


function addDataUser($data){
	global $db;
	$username = strtolower(htmlspecialchars($data["username"]));
	$password = htmlspecialchars($data["password"]);
	$nama = htmlspecialchars($data["nama"]);

	if (!preg_match('/^([a-zA-Z .,]*)$/', $nama)) {

		echo 
		"<script>
			alert('Tidak boleh ada angka di dalam nama');
		</script>";
		return false;	

	}

	$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

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
		}elseif (strlen($password) > 15) {
			echo 
			"<script>
				alert('Password lebih dari 15 karakter');
			</script>";
			return false;
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		$query = "INSERT INTO user VALUES
		('$username', '$password', '$nama')";

		mysqli_query($db, $query);

		return mysqli_affected_rows($db);
}

function deleteDataUser($data){
	global $db;
	$query = "DELETE FROM user WHERE username = '$data'";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}


 ?>