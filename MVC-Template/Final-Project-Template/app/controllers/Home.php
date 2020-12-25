<?php   

class Home extends Controller {
    
    public function index(){
        $modelLogin = $this->model("login","LoginModel");
        $KoskosanModel=$this->model('home','KosKosanModel');
        $modelLogin->checkRememberMe();

        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $data['user']=$modelLogin->getDataUserActive();
        $data['dataKos']=$KoskosanModel->getAllDataKos();
        
        $this->views('template/header',$data);
        $this->views('home/index',$data);
        $this->views('template/footer');
    }

    public function detail($id = null)
    {
        if(!isset($_SESSION['loginUser'])){
			header("Location:" . BASEURL . "/login");
        }

        if (is_null($id)) {
            header("Location:" . BASEURL . "/home");
        }

        $modelLogin = $this->model("login","LoginModel");
        $KoskosanModel=$this->model('home','KosKosanModel');
        $modelLogin->checkRememberMe();

        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $data['user']=$modelLogin->getDataUserActive();
        $data['detailKos']=$KoskosanModel->getDetailKos($id);
        $data["star"] = $KoskosanModel->getRating($id);

        //ubah 08 menjadi 62
        $data['hp'] = substr_replace($data['detailKos']['no_hp'], "62", 0,1);
        
        if ($data['detailKos'] == 0) {
            header("Location: " . BASEURL . "/home");
        }

        $this->views('template/header', $data);
        $this->views('home/detailKos', $data);
        $this->views('template/footer');
        
    }

    public function rating($id){
        if(!isset($_SESSION['loginUser'])){
            header("Location:" . BASEURL . "/login");
        }

        if (is_null($id)) {
            header("Location:" . BASEURL . "/home");
        }

        $KoskosanModel = $this->model('home', 'KosKosanModel');
        $modelLogin = $this->model('login', 'LoginModel');
        $data['user'] = $modelLogin->getDataUserActive();

        if (isset($_POST['rate'])) {
            if ($KoskosanModel->insertRating($_POST) > 0) {
                $data["header"] = "Dear " . $data['user']['nama'];
                $data["status"] = "Terima Kasih";
                $data["desc"] = "Terima kasih ya telah berpartisipasi dengan memberikan nilai terhadap mitra kami";
                $data["links"] = BASEURL . "/home/detail/" . $id;
                $data["title"] = "Cari Kos Mudah Dan Terpercaya";
                $data["type"] = "text-success";

                $this->views('template/header', $data);
                $this->views('home/temp', $data);
        
            }else{
                $data["header"] = "Dear " . $data['user']['nama'];
                $data["status"] = "Kamu Sudah Pernah Berpartisipasi";
                $data["desc"] = "Maaf ya kamu sudah pernah memberikan nilai pada mitra kami disini";
                $data["links"] = BASEURL . "/home/detail/" . $id;
                $data["title"] = "Cari Kos Mudah Dan Terpercaya";
                $data["type"] = "text-danger";

                $this->views('template/header', $data);
                $this->views('home/temp', $data);
            }             
        }else{
            header("Location:" . BASEURL . "/home/detail/" . $id);
        }
    }
    
}