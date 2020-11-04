<?php 

    class Login extends Controller{

        public function index()
        {
            $data['title']="Cari Kos Mudah Dan Terpercaya";
            $this->views('login/index',$data);
        }

    }

