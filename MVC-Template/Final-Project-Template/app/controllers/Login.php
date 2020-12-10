<?php 

class Login extends Controller{

	public function index()
	{
		$data['title'] = "Sign In";
		$this->views('login/index',$data);
	}

	public function lupa_password()
	{
		$data['title'] = "Forgot Password";
		$this->views('login/lupa_password', $data);
	}

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
					<div class='alert alert-danger alert-dismissible fade show mt-3 col-md-6' role='alert'>
						<span>Data gagal ditambahkan, 
							<strong> Gagal Mengirim Email </strong>
						</span>    
					</div>
				</center>";
			}
		}

	}

}

