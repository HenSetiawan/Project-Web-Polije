<?php 

    class Dashboard_mitra extends Controller{

        public function index()
        {
            $this->views('template-dashboard/header');
            $this->views('dashboard/mitra');
            $this->views('template-dashboard/footer');
        }
    }

?>