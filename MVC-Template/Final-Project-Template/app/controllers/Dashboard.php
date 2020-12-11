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


        }


        public function createOrUpdateMitra()
        {
            $mitraModelClass = $this->model("dashboard","MitraModel");
            if(isset($_POST['submitMitra'])){
                $mitraModelClass->insertDataMitra($_POST);
                $baseUrl=BASEURL;
                header("Location:$baseUrl/dashboard/mitra");
            }

            if(isset($_POST['updateMitra'])){
                $mitraModelClass->updateMitra($_POST);
                $baseUrl=BASEURL;
                header("Location:$baseUrl/dashboard/mitra");
            }
        }


        public function DeleteMitra($id)
        {
            $mitraModelClass = $this->model("dashboard","MitraModel");
            $mitraModelClass->deleteMitra($id);
            $baseUrl=BASEURL;
            header("Location:$baseUrl/dashboard/mitra");
        }


        public function getMitraById($id)
        {
            $mitraModelClass = $this->model("dashboard","MitraModel");
            $result=json_encode( $mitraModelClass->getMitraById($id));
            echo $result;
  
        }



        public function blog()
        {
            $this->views('template-dashboard/header');
            $this->views('dashboard/blog');
            $this->views('template-dashboard/footer');
        }
    }

?>