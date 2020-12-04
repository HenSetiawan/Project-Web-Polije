<?php 

    class Dashboard extends Controller{

        public function index()
        {
            
            $this->views('template-dashboard/header');
            $this->views('dashboard/index');
            $this->views('template-dashboard/footer');
        }


        public function mitra()
        {
            $data['mitra']=$this->model("dashboard","MitraModel")->getAllMitra();
            $this->views('template-dashboard/header');
            $this->views('dashboard/mitra',$data);
            $this->views('template-dashboard/footer');
        }


        public function blog()
        {
            $this->views('template-dashboard/header');
            $this->views('dashboard/blog');
            $this->views('template-dashboard/footer');
        }
    }

?>