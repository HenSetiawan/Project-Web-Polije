<?php 

    class Login extends Controller{

        public function index()
        {
            $data['title'] = "Sign In";
            $this->views('login/index',$data);
        }

    }

