<?php   

class Home extends Controller {
    
    public function index(){
        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $this->views('template/header',$data);
        $this->views('home/index');
        $this->views('template/footer');
    }

    public function detail()
    {
        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $this->views('template/header',$data);
        $this->views('home/detailKos');
        $this->views('template/footer');
    }
    

}