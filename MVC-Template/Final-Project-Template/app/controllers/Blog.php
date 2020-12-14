<?php 

    class Blog extends Controller{

        public function index()
        {
            $data['title']="Cari Kos Mudah Dan Terpercaya";
            $modelLogin = $this->model("login","LoginModel");
            $modelLogin->checkRememberMe();
            $data['user']=$modelLogin->getDataUserActive();
            
            $this->views('template/header',$data);
            $this->views('blog/index');
            $this->views('template/footer');
        }
    }

