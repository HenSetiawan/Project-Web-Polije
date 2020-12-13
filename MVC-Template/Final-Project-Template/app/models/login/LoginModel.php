<?php 

class LoginModel {

  // attr
  public $db;
  public $auth = AUTH;

  // call database automatically
  function __construct()
  {
    // instantiate
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
  $URL = 'http://localhost/Project-Web-Polije/MVC-Template/Final-Project-Template';   

  // check email user
  $this->db->query("SELECT * FROM user WHERE email = '$email'");

  // there's no same email in database
  if (mysqli_num_rows($this->db->result) > 0) {
    echo
    "<script>
    swal('email sudah digunakan');
    </script>";
    return false;
  }

  // hash password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Send an email to user
  require_once './app/phpmailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                                  // Enable verbose debug output

  $mail->isSMTP();
  $mail->SMTPKeepAlive = true;
  $mail->Mailer = "smtp";                               // Set mailer to use SMTP
  $mail->Host = "ssl://smtp.gmail.com";					       // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                             // Enable SMTP authentication
  $mail->Username = 'mybisnis0101@gmail.com';        // SMTP username
  $mail->Password =  $this->auth;                   // SMTP password
  $mail->SMTPSecure = 'ssl';                       // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 465;                              // TCP port to connect to

  $mail->setFrom('mybisnis0101@gmail.com', 'KosKosang');
  $mail->addAddress($email, $name);   

  // Set email format to HTML
  $mail->isHTML(true);                        

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
                        <a href='$URL/login/v/$vkey'>
                          Konfirmasi Akun Anda
                        </a>
                      </p>";

    // check an email has sent
    if ($mail->send()) {
      
      // insert to database
      $insertQuery = "INSERT INTO user VALUES 
                    ('$idUser','$name','$email','$password','$noHandphone','$vkey', $token)";
      
      $this->db->query($insertQuery);

      // show messege if true
      echo 
      "<script>
        swal('Konfirmasi email berhasil dikirim');
      </script>";
      return 1;

    }else{
    
    // show messege if false
    echo 
    "<script>
        swal('Konfirmasi email gagal dikirim');
    </script>";
    return 0;

  }

} // end of registration user 


// verification email
public function checkVerification($data)

{

  // run source code if data has set
  if (isset($data)) {
  
    // insert to variable vkey
    $vkey = $data;

    // Query to database
    $this->db->query("SELECT vkey, token FROM user WHERE token = 0 AND vkey = '$vkey'");

    if (mysqli_num_rows($this->db->result) == 1) {
      
      // validate email
      $this->db->query("UPDATE user SET token = 1 WHERE vkey = '$vkey'");

      // return the value
      if (mysqli_affected_rows($this->db->link) > 0) {
        
        // show messege data is valid
        echo 
        "<script>
            swal('Akun anda telah diverifikasi');
          </script>";
          return 1;
        } 

      // show messege data is invalid 
      }else{
        echo 
        "<script>
          swal('Kode verifikasi anda tidak valid');
        </script>";
        return 0;	
      }
    }
    }
        // end of verification email

    // method check login
    public function checkLogin($data)
    {
      if(!isset($_SESSION)){
        session_start();
      }
        $email=$data['email'];
        $password=$data['password'];

        $this->db->query("SELECT * FROM user WHERE email='$email'");
        if(mysqli_num_rows($this->db->result)){
          $dataUser=$this->db->getData();
          $isPasswordValid=password_verify($password,$dataUser['password']);
          if($isPasswordValid){
            $_SESSION['loginUser']=true;
          }else{
            echo 
          "<script>
              swal('Email atau password anda salah');
          </script>";
          }
        }else{
          echo 
        "<script>
            swal('Email atau password anda salah');
        </script>";
        }
    }


    // method logout
    public function logOutUser()
    {
      if(!isset($_SESSION)){
        session_start();
        }
        session_destroy();
    }

      } 

   ?>