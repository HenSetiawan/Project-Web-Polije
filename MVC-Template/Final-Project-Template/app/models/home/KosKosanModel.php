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

            $this->db->query("SELECT a.id_kos, a.id_pemilik, a.nama_kos, a.alamat, a.jenis, a.harga, a.gambar_1, a.gambar_2, a.gambar_3, a.deskripsi, b.no_hp FROM kos_kosan a INNER JOIN pemilik_kos b ON a.id_pemilik = b.id_pemilik WHERE a.id_kos = '$data'");
            
            return $this->db->getData();
        }
    }