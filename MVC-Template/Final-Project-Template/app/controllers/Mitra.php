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
}	