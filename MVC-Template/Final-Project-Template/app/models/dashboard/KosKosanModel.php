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

        public function getCountData()
        {
            $query = "SELECT COUNT(A.id_kos) AS kos_kosan, COUNT(B.id_pemilik) AS pemilik_kos, COUNT(C.id_user) AS user FROM kos_kosan A, pemilik_kos B, user C";
            $this->db->query($query);
            return $this->db->getData();
        }

    }