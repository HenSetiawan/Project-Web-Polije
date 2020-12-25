<?php 

    class KosKosanModel{
        public $db;


        public function __construct()
        {
            $this->db=new Database();
        }

        public function insertDataKos($data,$files,$dataMitra)
        {
            $imagePath='./public/photos/';
            $tmpFile=null;
            $nameFile=null;
            $extensionFile=null;
            $sizeFile=null;
            $isValidExtension=['jpg','jpeg','png'];
            $imagesName=[];


            foreach($files as $file){
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
                            $imagesName[]=$unixFileName;
                        }
                    }
                }
            }
            $idKos=random_int(0,100).time();
            $idMitra=$dataMitra['id_pemilik'];
            $namaKos=$data['nama-kos'];
            $alamatKos=$data['alamat-kos'];
            $sewaKos=$data['sewa-kos'];
            $jenisKos=$data['jenis-kos'];
            $deskripsiKos=$data['deskripsi-kos'];

            $query=("INSERT INTO kos_kosan VALUES ('$idKos','$idMitra','$namaKos','$alamatKos','$jenisKos',$sewaKos,'$imagesName[0]','$imagesName[1]','$imagesName[2]','$deskripsiKos')");

            $this->db->query($query);
           
        }


        public function getDataKos($idMitra)
        {
            $this->db->query("SELECT * FROM kos_kosan WHERE id_pemilik='$idMitra'");
            return  $this->db->getAllData();
        }

        public function deleteDataById($id)
        {
            $this->db->query("SELECT * FROM kos_kosan WHERE id_kos='$id'");
            $dataKos=$this->db->getData();
        
            $images=[$dataKos['gambar_1'],$dataKos['gambar_2'],$dataKos['gambar_3']];
            var_dump($dataKos);
            foreach($images as $image){
                unlink('./public/photos/'.$image);
            }
            $this->db->query("DELETE FROM kos_kosan WHERE id_kos='$id'");
        }
    }