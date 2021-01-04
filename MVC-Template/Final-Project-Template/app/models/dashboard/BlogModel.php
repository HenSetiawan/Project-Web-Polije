<?php 

    class BlogModel{

        public $db;

        public function __construct()
        {
            $this->db=new Database();
        }


        public function insertJudulBlog($data, $file, $admin)
        {
            $imagePath='./public/blogs/';
            $tmpFile=null;
            $nameFile=null;
            $extensionFile=null;
            $sizeFile=null;
            $isValidExtension=['jpg','jpeg','png'];


                if($file['error']===0){
                    $randomInt=random_int(0,1000000);
                    $nameFile=$file['name'];

                    $tmpFile=$file['tmp_name'];
                    $unixFileName=str_replace(' ','-',"$randomInt"."$nameFile");
                    $sizeFile=$file['size'];
                    $extensionFile=explode('/',$file['type'])[1];

                    if(in_array($extensionFile,$isValidExtension)){
                        if($sizeFile<2000000){
                            move_uploaded_file($tmpFile, "$imagePath".$unixFileName);
                            $imagesName=$unixFileName;
                        }
                    }
                }

            $idBlog=random_int(0,100).time();
            $idAdmin=$admin;
            $judul=$data['judul'];
            $tanggal=$data['tanggal'];
            $desc=$data['area3'];

            $query=("INSERT INTO blog VALUES('$idBlog', '$idAdmin', '$judul', '$desc', '$imagesName',  '$tanggal')");

            $this->db->query($query);
        }

        public function getDataBlog($idAdmin)
        {
            $this->db->query("SELECT * FROM blog WHERE id_admin='$idAdmin'");
            return  $this->db->getAllData();
        }

        public function getAllDataBlog()
        {
            $this->db->query("SELECT * FROM blog");
            return $this->db->getAllData();
        }
    }