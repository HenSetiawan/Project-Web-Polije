<?php 

    class LoginModel{

        public $db;
        public function __construct()
        {
            $this->db=new Database();
        }

        public function checkLogin($data)
        {
            $email=$data['email'];
            $password=$data['password'];

            $this->db->query("SELECT * FROM admin WHERE email='$email' AND password ='$password'");
            if(mysqli_num_rows($this->db->result)==1){
                $dataAdmin=$this->db->getData();
                $_SESSION['loginAdmin']=$dataAdmin['id_admin'];
            }
        }

        public function getDataAdmin()
        {
            if(isset($_SESSION['loginAdmin'])){
                $idAdmin=$_SESSION['loginAdmin'];
                $this->db->query("SELECT * FROM admin WHERE id_admin='$idAdmin'");
                return $this->db->getData();
            }
        }

        public function logoutAdmin()
        {
            session_destroy();
        }

    }