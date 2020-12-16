<?php 

class Mitra extends Controller{
		
		// view of index
 		public function index()
        {
            $LoginModel = $this->model('mitra','LoginModel');
            $LoginModel->checkCookie();

            if(!isset($_SESSION['loginMitra'])){
                header("Location:". BASEURL ."/mitra/login");
            }

            $data['dataMitra'] = $LoginModel->getDataUserActive();
            $this->views('template-mitra/header',$data);
            $this->views('mitra/index');
            $this->views('template-mitra/footer');
        }

        // view of login
        public function login()
        {
			if(isset($_SESSION['loginMitra'])){
                header("Location:". BASEURL ."/mitra/login");
			}
        	if (isset($_SESSION["loginMitra"])) {
        		header("Location:" . BASEURL . "/mitra");
        	}

        	$data["title"] = "Login Dashboard Mitra";
        	$this->views('mitra/login', $data);
        }

        // logic of login Mitra
        public function loginMitra()
        {
        	$LoginModel = $this->model('mitra', 'LoginModel');
        	if(isset($_SESSION['loginMitra'])){
				header("Location:" . BASEURL . "/mitra");
			}

				if (isset($_POST["submitmitra"])) {

					$LoginModel->checkLogin($_POST);
					
				if(isset($_SESSION['loginMitra'])){
					header("Location:" . BASEURL . "/mitra");
				}else{
					header("Location:" . BASEURL . "/mitra/login");
				}
        	  } 
		}


		public function logout()
		{
			$LoginModel = $this->model('mitra', 'LoginModel');
			$LoginModel->logOutMitra();
			header("Location:" . BASEURL . "/mitra/login");

		}

		public function forgotPassword()
		{
			$this->views("mitra/ForgotPassword");
			$modelResetPassword=$this->model("mitra","ResetPasswordModel");
			if(isset($_POST['submit'])){
			 $isEmailValid=($modelResetPassword->sendResetPassword($_POST));
			 if($isEmailValid){
				echo "<center>
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


		public function editPassword($vkey=null)
		{
			$modelResetPassword=$this->model("mitra","ResetPasswordModel");

			if($vkey!=null){
				$data['title']="Reset Password";
				$this->views("mitra/EditPassword",$data);
			}

			if(isset($_POST['submit'])){
				if($_POST['password1']!=$_POST['password2']){
					echo "<script>
					swal('Konfirmasi password tidak sesuai');
					</script>";
				}else{
					$isPasswordUpdate=$modelResetPassword->editPassword($_POST,$vkey);
					if($isPasswordUpdate){
						echo "<script>
						swal('Password Berhasil diubah');
						</script>";
					}else{
						echo "<script>
					swal('Password Gagal Diubah');
					</script>";
					}
					
				}
			}
		}
}	