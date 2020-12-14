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
  } // end of verification email


    // method check login
    public function checkLogin($data)
    {

      // turn session on
      if(!isset($_SESSION)){
        session_start();
      }
        // variables
        $email=$data['email'];
        $password=$data['password'];
        $rememberMe=$data['remember-me'];

        // query to database
        $this->db->query("SELECT * FROM user WHERE email='$email' AND token=1");
        if(mysqli_num_rows($this->db->result)==1){
          
          // get data from database 
          $dataUser = $this->db->getData();
          $isPasswordValid = password_verify($password,$dataUser['password']);

          // set session
          if($isPasswordValid){
            $_SESSION['loginUser'] =$dataUser['id_user'];
            $this->dataUser=$this->db->getData();
            if(!$rememberMe==null){
                    setcookie('id',$dataUser['id_user'],time() + (86400 * 30),'/');
                  }
            
          }

        }
    }
    

    // method check cookie
    public function checkRememberMe()
    {
      if(isset($_COOKIE['id'])){        
        $cookieId=$_COOKIE['id'];
        $this->db->query("SELECT * FROM user WHERE id_user ='$cookieId' ");

        if(mysqli_num_rows($this->db->result)==1){
          if(!isset($_SESSION)){
            session_start();
          }
            $_SESSION['loginUser']=true;

        }
      }
    }


    public function getDataUserActive()
    {
      if(isset($_SESSION['loginUser'])){
        $userId=$_SESSION['loginUser'];
        $this->db->query("SELECT * FROM user WHERE id_user ='$userId'");
        return $this->db->getData();
      }elseif(isset($_COOKIE['id'])){
        $cookieId=$_COOKIE['id'];
        $this->db->query("SELECT * FROM user WHERE id_user ='$cookieId' ");
        return $this->db->getData();
      }
    }


    // method logout
    public function logOutUser()
    {
      // delete session
      if(!isset($_SESSION)){
        session_start();
      }
        session_destroy();
        setcookie('id',FALSE,time()-3600,'/');
    }
  } 

?>