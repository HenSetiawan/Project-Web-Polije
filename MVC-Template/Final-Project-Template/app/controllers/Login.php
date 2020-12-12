<?php 

class Login extends Controller{

	// Login -> index.php
	public function index()
	{
		$modelDaftar = $this->model("login", "LoginModel");

		$data['title'] = "Sign In";
		$this->views('login/index', $data);

		if (isset($_POST["submit"])) {
			$modelDaftar->checkLogin($_POST);
		}
	}


	// Login -> verifikasi.php
	public function v($vkey = null)
	{

		if ($vkey == null) {
			header("Location:" . BASEURL . "/home");
		}
	
		$modelDaftar = $this->model("login", "LoginModel");

		$data["title"] = "Email Verification";
		$this->views('login/verifikasi', $data);

		if ($modelDaftar->checkVerification($vkey) > 0) {
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
	}

	// Login -> daftar.php
	public function daftar()
	{
		$modelDaftar = $this->model("login", "LoginModel");

		$data['title'] = "Sign Up";
		$this->views('login/daftar', $data);

		if (isset($_POST["submit"])) {
			if($modelDaftar->insertDataUser($_POST) > 0){
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
							<strong> Gagal Mengirim Email</strong>
						</span>    
					</div>
				</center>";
			}
		}

	}

}

