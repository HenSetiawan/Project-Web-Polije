<?php 

    class Blog extends Controller{

        public function index()
        {
            $data['title']="Cari Kos Mudah Dan Terpercaya";
            $this->views('template/header',$data);
            $this->views('blog/index');
            $this->views('template/footer');
        }
    }

