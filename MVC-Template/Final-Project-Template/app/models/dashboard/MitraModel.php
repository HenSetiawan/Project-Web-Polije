<?php 

class MitraModel{

    public $db;

    function __construct()
    {
        $this->db=new Database;
    }


    public function getAllMitra()
    {
        $this->db->query("SELECT * FROM pemilik_kos");
        return $this->db->getAllData();
    }
}

?>