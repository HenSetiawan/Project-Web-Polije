<?php   

class Home extends Controller {
    
    public function index(){
        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $modelDaftar = $this->model("login", "LoginModel");
		$modelDaftar->checkRememberMe();
        $this->views('template/header',$data);
        $this->views('home/index');
        $this->views('template/footer');
    }

    public function detail()
    {
        if(!isset($_SESSION['loginUser'])){
			header("Location:" . BASEURL . "/login");
		}
        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $this->views('template/header',$data);
        $this->views('home/detailKos');
        $this->views('template/footer');
    }
    

}