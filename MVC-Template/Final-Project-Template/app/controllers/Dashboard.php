<?php 

    class Dashboard extends Controller{

        public function index()
        {
            $LoginModel=$this->model('dashboard','LoginModel');
            $KoskosanModel=$this->model('dashboard','KosKosanModel');

            if(!isset($_SESSION['loginAdmin'])){
                header("Location:".BASEURL."/dashboard/login");
            }
            $data['dataAdmin']=$LoginModel->getDataAdmin();
            $data['dataKos']=$KoskosanModel->getAllDataKos();

            $this->views('template-dashboard/header',$data);
            $this->views('dashboard/index',$data);
            $this->views('template-dashboard/footer');
        }

        public function login()
        {
            if(isset($_SESSION['loginAdmin'])){
                header("Location:".BASEURL."/dashboard");
            }
            
            $data['title']="Login Dashboard Admin";
            $this->views('dashboard/login',$data);
        }

        public function loginAdmin()
        {
            $LoginModel=$this->model('dashboard','LoginModel');
            if(isset($_SESSION['loginAdmin'])){
                header("Location:".BASEURL."/dashboard");
            }
            if(isset($_POST['submit-login-admin'])){
                $LoginModel->checkLogin($_POST);
                header("Location:".BASEURL."/dashboard");
            }else{
                header("Location:".BASEURL."/dashboard/login");
            }
        }

        public function logout()
        {
            $LoginModel=$this->model('dashboard','LoginModel');
            $LoginModel->logoutAdmin();
            header("Location:".BASEURL."/dashboard/login");
        }

        public function mitra()
        {
            $LoginModel=$this->model('dashboard','LoginModel');
            if(!isset($_SESSION['loginAdmin'])){
                header("Location:".BASEURL."/dashboard/login");
            }
            $mitraModelClass = $this->model("dashboard","MitraModel");
            $data['mitra'] = $mitraModelClass->getAllMitra();

            $data['dataAdmin']=$LoginModel->getDataAdmin();
            $this->views('template-dashboard/header',$data);
            $this->views('template-dashboard/header');
            $this->views('dashboard/mitra',$data);
            $this->views('template-dashboard/footer');


        }


        public function createOrUpdateMitra()
        {
            $mitraModelClass = $this->model("dashboard","MitraModel");
            if(isset($_POST['submitMitra'])){
                $mitraModelClass->insertDataMitra($_POST);
                header("Location:".BASEURL."/dashboard/mitra");
            }elseif(isset($_POST['updateMitra'])){
                $mitraModelClass->updateMitra($_POST);
                header("Location:".BASEURL."/dashboard/mitra");
            }else{
                header("Location:".BASEURL."/dashboard/mitra");
            }

        }


        public function DeleteMitra($id)
        {
            if(!isset($_SESSION['loginAdmin'])){
                header("Location:".BASEURL."/dashboard/login");
            }
            $mitraModelClass = $this->model("dashboard","MitraModel");
            $mitraModelClass->deleteMitra($id);
            $baseUrl=BASEURL;
            header("Location:$baseUrl/dashboard/mitra");
        }


        public function getMitraById($id)
        {
            if(!isset($_SESSION['loginAdmin'])){
                header("Location:".BASEURL."/dashboard/login");
            }
            $mitraModelClass = $this->model("dashboard","MitraModel");
            $result=json_encode( $mitraModelClass->getMitraById($id));
            echo $result;
  
        }


        public function blog()
        {
            $LoginModel=$this->model('dashboard','LoginModel');
            $BlogModel=$this->model('dashboard', 'BlogModel');
            if(!isset($_SESSION['loginAdmin'])){
                header("Location:".BASEURL."/dashboard/login");
            }

            $data['dataAdmin']=$LoginModel->getDataAdmin();
            $data['blog']=$BlogModel->getDataBlog($data['dataAdmin']['id_admin']);

            $this->views('template-dashboard/header',$data);
            $this->views('dashboard/blog',$data);
            $this->views('template-dashboard/footer');
        }

        public function insertJudulBlog()
        {
            $BlogModel=$this->model('dashboard', 'BlogModel');
            $LoginModel=$this->model('dashboard','LoginModel');

            $data['dataAdmin']=$LoginModel->getDataAdmin();

            if (isset($_POST["judulBlog"])) {
                $BlogModel->insertJudulBlog($_POST, $_FILES['foto'], $data['dataAdmin']['id_admin']);
                header("Location:" . BASEURL . "/dashboard/blog");
            }

        }


    }

?>