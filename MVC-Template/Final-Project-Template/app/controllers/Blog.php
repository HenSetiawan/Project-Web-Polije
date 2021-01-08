<?php 

    class Blog extends Controller{

        public function index()
        {
            $data['title']="Cari Kos Mudah Dan Terpercaya";
            $modelLogin = $this->model("login","LoginModel");
            $modelBlog = $this->model("dashboard", "BlogModel");
            $modelLogin->checkRememberMe();

            $data['blog']=$modelBlog->getAllDataBlog();
            $data['user']=$modelLogin->getDataUserActive();


            $this->views('template/header',$data);
            $this->views('blog/index',$data);
            $this->views('template/footer');
        }
    }
