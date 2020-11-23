<?php 

    class Dashboard_blog extends Controller{
        
        public function index()
        {
            $this->views('template-dashboard/header');
            $this->views('dashboard/blog');
            $this->views('template-dashboard/footer');
        }
    }

?>