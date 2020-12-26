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


        public function getRating($id){
            $this->db->query("SELECT FORMAT(AVG(rate), 0) AS rate, SUM(rate) AS user_rate FROM rate WHERE id_kos = '$id'");
            return $this->db->getData();
        }

        public function insertRating($data)
        {
            $id_user = $data["user"];
            $id_kos = $data["kos"];
            $id_pemilik = $data['pemilik'];
            $radio = $data["star"];

            $rate = $this->db->query("SELECT * FROM rate WHERE id_user = '$id_user' AND id_kos = '$id_kos'");

            if (mysqli_num_rows($this->db->result) > 0) {
            echo
                "<script>
                  swal('Anda sudah memberikan nilai');
                </script>";
            return false;
            }

            $this->db->query("INSERT INTO rate VALUES('$id_pemilik', '$id_user', '$id_kos', $radio)");

            return 1;
        }
    }