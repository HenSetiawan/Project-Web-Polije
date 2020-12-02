<?php 

    class Database{

        public $link, $result;
        public $dbName = DB_NAME;
        public $dbHost = DB_HOST;
        public $dbUser = DB_USER;
        public $dbPassword = DB_PASSWORD;

        // Connect to database automatically
        public function __construct()
        {
          $this->link = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);
        }

        // Query from database
        public function query($query)
        {
           $this->result = mysqli_query($this->link, $query);
        }

        // Get all data from database
        public function getAllData()
        {
            $data = null;
            while($row = mysqli_fetch_assoc($this->result)){
                $data[] = $row;
            }

            return $data;
        }

        // Get data associative
        public function getData()
        {
            return mysqli_fetch_assoc($this->result);
        }
    }