<?php 

class LoginModel {

    public $db;
    public $auth = AUTH;
    public $BASEURL = BASEURL;

    function __construct()
    {
        $this->db = new Database;
    }

    // registration user
    public function insertDataUser($data)
    {
 
    	// variables
        $idUser = uniqid();
        $name = $data["name"];
        $email = $data['email'];
        $password = $data['password'];
        $noHandphone = $data['handphone'];
        $vkey = md5(time() . $email);
        $token = 0;

        // check email user
        $this->db->query("SELECT * FROM user WHERE email = '$email'");

        // there's no same email in database
        if (mysqli_num_rows($this->db->result) > 0) {
        	echo 
        	"<script>
        		alert('Email sudah digunakan');
        	</script>";
        return false;
        }

        // hash password
        $password = password_hash($password, PASSWORD_DEFAULT);
       
    // Send an email to user
		require_once './app/phpmailer/PHPMailerAutoload.php';
		
		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();
		$mail->SMTPKeepAlive = true;
		$mail->Mailer = "smtp";                                    // Set mailer to use SMTP
		$mail->Host = "ssl://smtp.gmail.com";					      // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'mybisnis0101@gmail.com';           // SMTP username
		$mail->Password =  $this->auth;                       // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		$mail->setFrom('mybisnis0101@gmail.com', 'KosKosang');
		$mail->addAddress($email, $name);   

		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = 'Selamat Datang di KosKosang';
		$mail->Body    = 
		'<h1>
			<b>
				Selamat Datang $name, <br>
				Yuk Verifikasi Email Kamu !
			</b>
		</h1>
		<p>
			Yuk Konfirmasi kalau $email adalah benar 
			alamat email kamu dengan 
			klik halaman berikut untuk konfirmasi email
			<a href= "$BASEURL/login/v/$vkey">
				Konfirmasi Akun Anda
			</a>
		</p>';

		// check an email has sent
		if ($mail->send()) {
			$insertQuery = "INSERT INTO user
							VALUES 
							('$idUser','$name','$email','$password',
							'$noHandphone','$vkey', $token)";
			$this->db->query($insertQuery);
			echo 
			"<script>
				swal('Konfirmasi email berhasil dikirim');
			</script>";
			return 1;
		}else{
      echo 
			"<script>
				swal('Konfirmasi email gagal dikirim');
			</script>";
			return 0;
		}

   	} //end of registration user 


   	// verification email
   	public function checkVerification($data)
   	{
   		if (isset($data)) {
   			// insert to variable vkey
   			$vkey = $data;

   			// Query to database
   			$this->db->query("SELECT vkey, token FROM user WHERE token = 0 AND vkey = '$vkey'");

   			if (mysqli_num_rows($this->db->result) == 1) {
   				
   				// validate email
   				$this->db->query("UPDATE user SET token = 1 WHERE vkey = '$vkey'");

   				if (mysqli_affected_rows($this->db->link) > 0) {
   					echo 
   					"<script>
   						swal('Akun anda telah diverifikasi');
   					</script>";
   				return 1;
   				} 

   			}else{
   				echo 
   				"<script>
   					swal('Kode verifikasi anda tidak valid');
   				</script>";
   			return 0;	
   			}
   		}
   	
   	} //end of verification email



}

?>