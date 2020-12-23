<?php   

class Home extends Controller {
    
    public function index(){
        $modelLogin = $this->model("login","LoginModel");
        $KoskosanModel=$this->model('home','KosKosanModel');
        $modelLogin->checkRememberMe();

        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $data['user']=$modelLogin->getDataUserActive();
        $data['dataKos']=$KoskosanModel->getAllDataKos();
        
        $this->views('template/header',$data);
        $this->views('home/index',$data);
        $this->views('template/footer');
    }

    public function detail($id = null)
    {
        if(!isset($_SESSION['loginUser'])){
			header("Location:" . BASEURL . "/login");
        }

        if (is_null($id)) {
            header("Location:" . BASEURL . "/home");
        }

        $modelLogin = $this->model("login","LoginModel");
        $KoskosanModel=$this->model('home','KosKosanModel');
        $modelLogin->checkRememberMe();

        $data['user']=$modelLogin->getDataUserActive();
        $data['detailKos']=$KoskosanModel->getDetailKos($id);
        $data['title']="Cari Kos Mudah Dan Terpercaya";

        if ($data['detailKos'] == 0) {
            header("Location: " . BASEURL . "/home");
        }

        $this->views('template/header', $data);
        $this->views('home/detailKos', $data);
        $this->views('template/footer');
        
    }
    

}