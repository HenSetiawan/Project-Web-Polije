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

        public function detailBlog($id = null)
        {

            if (is_null($id)) {
                header("Location:" . BASEURL . "/blog");
            }
        
            $data['title'] = "Cari Kos Mudah Dan Terpercaya";
            $modelLogin = $this->model("login","LoginModel");
            $modelBlog = $this->model("dashboard", "BlogModel");
            $modelLogin->checkRememberMe();

            $data['user']=$modelLogin->getDataUserActive();
            $data['cari']=$modelBlog->getAllDataBlogLimit();
            $data['blog']=$modelBlog->getDataBlogById($id);

            if ($data['blog'] == 0) {
                header("Location:" . BASEURL . "/blog");
            }

            $this->views('template/header',$data);
            $this->views('blog/detailBlog',$data);
            $this->views('template/footer'); 
        }
    }
