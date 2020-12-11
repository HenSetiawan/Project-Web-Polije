<?php 

class LoginModel {

    public $db;
    public $auth = AUTH;

    function __construct()
    {
        $this->db = new Database;
    }

    public function insertDataUser($data)
    {
 

        $idUser = uniqid();
        $name = $data["name"];
        $email = $data['email'];
        $password = $data['password'];
        $noHandphone = $data['handphone'];
        $vkey = md5(time() . $email);
        $token = 0;

        $this->db->query("SELECT * FROM user WHERE email = '$email'");

        if (mysqli_num_rows($this->db->result) > 0) {
        	echo 
        	"<script>
        		alert('Email sudah digunakan');
        	</script>";
        return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);



        $insertQuery = "INSERT INTO user
                        VALUES 
                        ('$idUser','$name','$email','$password','$noHandphone','$vkey', $token)";

       
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
		"<h1>
			<b>
				Selamat Datang $name, <br>
				Yuk Verifikasi Email Kamu !
			</b>
		</h1>
		<p>
			Yuk Konfirmasi kalau $email adalah benar 
			alamat email kamu dengan 
			klik halaman berikut untuk konfirmasi email
			<a href='<?=BASEURL?>/login/verivikasi/<?=$vkey ?>'>
				Konfirmasi Akun Anda
			</a>
		</p>";

		if ($mail->send()) {
			$insertQuery = "INSERT INTO user
							VALUES 
							('$idUser','$name','$email','$password',
							'$noHandphone','$vkey', $token)";
			$this->db->query($insertQuery);
			echo 
			"<script>
				swal('Email berhasil dikirim');
			</script>";
			return 1;
		}else{
			"<script>
				swal('Email gagal dikirim');
			</script>";
			echo "<center><p>$mail->ErrorInfo</p><center>";
			return 0;
		}
   	}

   	public function checkLogin($data)
   	{

   	}



}

?>