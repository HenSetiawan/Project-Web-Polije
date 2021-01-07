<?php

class UserModel
{

    public $db;

    function __construct()
    {
        $this->db = new Database;
    }


    public function getAllDataUsers()
    {
        $this->db->query("SELECT * FROM user");
        return $this->db->getAllData();
    }

    public function deleteDataUser($data)
    {
        $this->db->query("DELETE FROM user WHERE id_user = '$data'");
        return 1;
    }

}

?>