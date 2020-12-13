<?php 

class About extends Controller{

    public function index()
    {

        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $modelDaftar = $this->model("login", "LoginModel");
        $data['user']=$modelDaftar->checkRememberMe();
        
        $this->views('template/header',$data);
        $this->views('about/index',$data);
    }
}

?>