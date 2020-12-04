<?php 

    class Dashboard_mitra extends Controller{

        public function index()
        {
            $data['mitra']=$this->model("dashboard","MitraModel")->getAllMitra();
            $this->views('template-dashboard/header');
            $this->views('dashboard/mitra',$data);
            $this->views('template-dashboard/footer');
        }
    }

?>