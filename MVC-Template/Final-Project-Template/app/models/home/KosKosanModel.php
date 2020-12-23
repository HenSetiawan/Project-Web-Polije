<?php 

    class KoskosanModel{

        public $db;

        public function __construct()
        {
            $this->db=new Database();
        }


        public function getAllDataKos()
        {
            $this->db->query("SELECT * FROM kos_kosan");
            return $this->db->getAllData();
        }

        public function getDetailKos($data)
        {
            $this->db->query("SELECT * FROM kos_kosan WHERE id_kos = '$data'");

            if (mysqli_num_rows($this->db->result) < 0 ) {
                return 0;   
            }

            $this->db->query("SELECT * FROM kos_kosan WHERE id_kos = '$data'");
            return $this->db->getData();
        }
    }