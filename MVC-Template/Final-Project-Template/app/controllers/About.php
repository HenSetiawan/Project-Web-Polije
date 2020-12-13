<?php 

class About extends Controller{

    public function index()
    {
        $data['title']="Cari Kos Mudah Dan Terpercaya";
        $this->views('template/header',$data);
        $this->views('about/index',$data);
    }
}

?>