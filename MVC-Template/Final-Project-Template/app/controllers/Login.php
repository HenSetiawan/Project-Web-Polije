<?php 

class Login extends Controller{

	// Login -> index.php
	public function index()
	{
		$LoginModel = $this->model("login", "LoginModel");
		$LoginModel->checkRememberMe();
		if(isset($_SESSION['loginUser'])){
			header("Location:" . BASEURL . "/home");
		}
		$data['title'] = "Sign In";
		$this->views('login/index', $data);

	}


	public function loginUser()
	{
		$LoginModel = $this->model("login", "LoginModel");
		if(isset($_SESSION['loginUser'])){
			header("Location:" . BASEURL . "/home");
		}

		if(isset($_POST["submitLogin"])) {

			$LoginModel->checkLogin($_POST);

			if(isset($_SESSION['loginUser'])){
				header("Location:" . BASEURL . "/home");
			}else{
				header("Location:" . BASEURL . "/login");
				$_SESSION['isUserNotFound']=true;
			}
		}else{
			header("Location:" . BASEURL . "/login");
		}
	}


	// Login -> verifikasi.php
	public function v($vkey = null)
	{

		if (is_null($vkey)) {
			header("Location:" . BASEURL . "/home");
		}
	
		$LoginModel = $this->model("login", "LoginModel");

		$data["title"] = "Email Verification";
		$this->views('login/verifikasi', $data);

		if ($LoginModel->checkVerification($vkey) > 0) {
			echo 
				"<center>
					<div class='alert alert-success alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span> 
							<strong>Akun Anda berhasil diverifikasi</strong>
						</span>  
					</div>
				</center>";

			}else{
				echo 
				"<center>
					<div class='alert alert-danger alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span> 
							<strong>Kode verifikasi Anda tidak valid</strong>
						</span>    
					</div>
				</center>";
			}		
	}


	// Login -> lupa_password.php
	public function lupa_password()
	{
		$data['title'] = "Forgot Password";
		$this->views('login/lupa_password', $data);

		$LoginModel = $this->model("login", "LupaPasswordModel");
		if (isset($_POST["submit"])) {
			if ($LoginModel->forgotPassword($_POST) > 0){
			echo 
				"<center>
					<div class='alert alert-success alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span> 
							<strong>Email berhasil dikirim</strong>
						</span>  
					</div>
				</center>";

			}else{
				echo 
				"<center>
					<div class='alert alert-danger alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span> 
							<strong>Tidak ada satupun data yang cocok</strong>
						</span>    
					</div>
				</center>";
			}
		}
		
	}

	// Login -> daftar.php
	public function daftar()
	{
		$LoginModel = $this->model("login", "LoginDaftarModel");

		$data['title'] = "Sign Up";
		$this->views('login/daftar', $data);

		if (isset($_POST["submit"])) {
			if($LoginModel->insertDataUser($_POST) > 0){
				echo 
				"<center>
					<div class='alert alert-success alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span>Data berhasil ditambahkan, 
							<strong> check email kamu sekarang </strong>
						</span>  
					</div>
				</center>";

			}else{
				echo 
				"<center>
					<div class='alert alert-warning alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span>Data gagal ditambahkan, 
							<strong> Gagal mengirim email </strong>
						</span>    
					</div>
				</center>";
			}
		}

	}

	public function logout()
	{
		$LoginModel = $this->model("login", "LoginModel");
		$LoginModel->logOutUser();
		header("Location:" . BASEURL . "/home");
	}

	// edit from forgot password
	public function resetPassword($vkey = null)
	{
		if (is_null($vkey)) {
			header("Location: " . BASEURL . "/home");
		}

		$data["title"] = 'Forgot Password';

		$this->views('login/ubah_password', $data);

		$LoginModel = $this->model("login", "LoginModel");

		if(isset($_POST["submit"])){
			if($LoginModel->editPassword($vkey) > 0){
				echo 
				"<center>
					<div class='alert alert-success alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span>
							<strong>Password berhasil diubah</strong>
						</span>  
					</div>
				</center>";

			}else{
				echo 
				"<center>
					<div class='alert alert-warning alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span>
							<strong>Password gagal diubah</strong>
						</span>    
					</div>
				</center>";
			}
		}
	}

}

