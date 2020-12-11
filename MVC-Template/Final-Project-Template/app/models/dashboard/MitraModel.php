<?php

class MitraModel
{

    public $db;

    function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMitra()
    {
        $this->db->query("SELECT * FROM pemilik_kos");
        return $this->db->getAllData();
    }


    public function insertDataMitra($data)
    {
        $noKtp = $data['noKtp'];
        $name = $data['name'];
        $alamat = $data['alamat'];
        $email = $data['email'];
        $noHandphone = $data['noHandphone'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        $insertQuery = "INSERT INTO pemilik_kos
                        VALUES ('$noKtp','$name','$alamat','$email','$password','$noHandphone')";

        $this->db->query($insertQuery);
    }


    public function deleteMitra($id)
    {
        $this->db->query("DELETE FROM pemilik_kos WHERE id_pemilik='$id'");
    }

    public function getMitraById($id)
    {
       $this->db->query("SELECT * FROM pemilik_kos WHERE id_pemilik='$id'");
       return $this->db->getData();
    }

    public function updateMitra($data)
    {
        $noKtp = $data['noKtp'];
        $name = $data['name'];
        $alamat = $data['alamat'];
        $email = $data['email'];
        $noHandphone = $data['noHandphone'];
        $password = password_hash($data['password'], PASSWORD_DEFAULT);

        $updateQuery="UPDATE pemilik_kos SET id_pemilik='$noKtp',nama='$name',alamat='$alamat',email='$email',password='$password',no_hp='$noHandphone' WHERE id_pemilik='$noKtp'";
        $this->db->query($updateQuery);
    }
}
