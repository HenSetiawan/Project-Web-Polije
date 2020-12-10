<?php 

    class Dashboard extends Controller{

        public function index()
        {
            
            $this->views('template-dashboard/header');
            $this->views('dashboard/index');
            $this->views('template-dashboard/footer');
        }

        // controller dashboard mitra
        public function mitra()
        {
            $mitraModelClass = $this->model("dashboard","MitraModel");
            $data['mitra'] = $mitraModelClass->getAllMitra();
            
            $this->views('template-dashboard/header');
            $this->views('dashboard/mitra',$data);
            $this->views('template-dashboard/footer');

            if(isset($_POST['submitMitra'])){
                $mitraModelClass->insertDataMitra($_POST);
            }

        }


        public function hapusMitra($id)
        {
            $mitraModelClass = $this->model("dashboard","MitraModel");
            $mitraModelClass->deleteMitra($id);
            $baseUrl=BASEURL;
            header("Location:$baseUrl/dashboard/mitra");
        }


        public function blog()
        {
            $this->views('template-dashboard/header');
            $this->views('dashboard/blog');
            $this->views('template-dashboard/footer');
        }
    }

?>