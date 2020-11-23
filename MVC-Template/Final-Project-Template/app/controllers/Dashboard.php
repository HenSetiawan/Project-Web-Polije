<?php 

    class Dashboard extends Controller{

        public function index()
        {
            
            $this->views('template-dashboard/header');
            $this->views('dashboard/index');
            $this->views('template-dashboard/footer');
        }
    }

?>