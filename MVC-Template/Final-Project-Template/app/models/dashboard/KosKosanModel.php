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
            $query = "SELECT COUNT(*) AS kos_kosan, (SELECT COUNT(*) FROM user) AS user, (SELECT COUNT(*) FROM pemilik_kos) AS pemilik_kos FROM kos_kosan";
            $this->db->query($query);
            return $this->db->getData();
        }

    }