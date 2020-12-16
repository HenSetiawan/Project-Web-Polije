<?php 

class LoginModel {
	
	// attr
	public $db;

	// construct
	function __construct()
	{
		$this->db = new Database;
	}

	// method login
	public function checkLogin($data)
	{
		
		// turn session on
		if (!isset($_SESSION)) {
			session_start();
		}	

		// variables
		$email = $data["email"];
		$password = $data['password'];
		$rememberMe = $data["remember-me"];

		$this->db->query("SELECT * FROM pemilik_kos WHERE email = '$email' AND password ='$password'");

		if(mysqli_num_rows($this->db->result) == 1){
			
			// check password hash
			$dataMitra = $this->db->getData();
			$isPasswordValid = password_verify($password, $dataMitra["password"]);
			
			// set session
			if ($isPasswordValid) {
			 	$_SESSION['loginMitra'] = $dataMitra['id_pemilik'];
			 	$this->dataMitra = $this->db->getData();
			 	
			 	// set cookie
			 	if (!$rememberMe == null) {
			 		setcookie('id', $dataMitra['id_pemilik'],time() + (86400 * 30),'/');
			 	}
			} 
		}
	}

	// method check cookie
    public function checkRememberMe()
    {
      
      if(isset($_COOKIE['id'])){        
        $cookieId = $_COOKIE['id'];
        $this->db->query("SELECT * FROM pemilik_kos WHERE id_pemilik = '$cookieId'");
        $dataUser=$this->db->getData();

        if(mysqli_num_rows($this->db->result)== 1){
          if(!isset($_SESSION)){
            session_start();
          }
            $_SESSION['loginMitra'] = $dataUser['id_pemilik'];

        }
      }
    }


    // get data user active
	public function getDataUserActive()
    {
      if(isset($_SESSION['loginMitra'])){
        $userId = $_SESSION['loginMitra'];
        $this->db->query("SELECT * FROM pemilik_kos WHERE id_pemilik = '$userId'");
        return $this->db->getData();

      }else if(isset($_COOKIE['id'])){
        $cookieId = $_COOKIE['id'];
        $this->db->query("SELECT * FROM pemilik_kos WHERE id_pemilik = '$cookieId'");
        return $this->db->getData();
      }
  	}

}


 ?>