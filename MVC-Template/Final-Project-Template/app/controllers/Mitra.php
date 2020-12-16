<?php 

class Mitra extends Controller{
		
		// view of index
 		public function index()
        {
            $LoginModel = $this->model('mitra','LoginModel');
            $LoginModel->checkRememberMe();

            if(!isset($_SESSION['loginMitra'])){
                header("Location:". BASEURL ."/mitra/login");
            }

            $data['dataMitra'] = $LoginModel->getDataUserActive();
            $this->views('template-mitra/header');
            $this->views('mitra/index', $data);
            $this->views('template-mitra/footer');
        }

        // view of login
        public function login()
        {
        	$LoginModel = $this->model("mitra", "LoginModel");
        	$LoginModel->checkRememberMe();	
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
}	