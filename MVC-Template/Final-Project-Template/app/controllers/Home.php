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

    public function detail()
    {
        if(!isset($_SESSION['loginUser'])){
			header("Location:" . BASEURL . "/login");
        }
        $modelLogin = $this->model("login","LoginModel");
        $modelLogin->checkRememberMe();
        $data['user']=$modelLogin->getDataUserActive();
        
        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $this->views('template/header',$data);
        $this->views('home/detailKos');
        $this->views('template/footer');
    }
    

}