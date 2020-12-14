<?php 

class About extends Controller{

    public function index()
    {

        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $modelLogin = $this->model("login","LoginModel");
        $data['user']=$modelLogin->getDataUserActive();
        
        $this->views('template/header',$data);
        $this->views('about/index',$data);
    }
}

?>