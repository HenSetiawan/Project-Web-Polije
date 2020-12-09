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


    public function insertDataMitra($data)
    {
        $noKtp=$data['noKtp'];
        $name=$data['name'];
        $alamat=$data['alamat'];
        $email=$data['email'];
        $noHandphone=$data['noHandphone'];
        $password=password_hash("rasmuslerdorf", PASSWORD_DEFAULT);


       

        $insertQuery="INSERT INTO pemilik_kos
                    VALUES ('$noKtp','$name','$alamat','$email','$password','$noHandphone')";

        $this->db->query($insertQuery);
    }
}

?>