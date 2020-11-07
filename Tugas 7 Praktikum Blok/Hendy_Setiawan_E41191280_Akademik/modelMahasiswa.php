<?php 

    $link =mysqli_connect('localhost','root','','akademik');

    function inserStudents($data){
        global $link;

        $nim=$data['nim'];
        $nama=$data['nama'];
        $tgl=$data['tgl'];
        $agama=$data['agama'];
        $username=$data['username'];
        $password=$data['password'];


     $hashedPassword=password_hash($password,PASSWORD_BCRYPT);


         $query="INSERT INTO mahasiswa VALUES 
            ('$nim','$nama','$tgl','$agama','$username','$hashedPassword',null)";


         mysqli_query($link,$query);


         if(mysqli_affected_rows($link)==1){
             header("Location:mahasiswa.php");
         }

    }



    function getAllDataStudents(){
        global $link;
        $query="SELECT * FROM mahasiswa";
        $students=[];

        $result=mysqli_query($link,$query);

        while($row=mysqli_fetch_assoc($result)){
            $students[]=$row;
        }

        return $students; 
    }



    function deleteStudentById($id){
        global $link;

        $query="DELETE FROM mahasiswa WHERE id =$id";
        mysqli_query($link,$query);

        if(mysqli_affected_rows($link)==1){
            header("Location:mahasiswa.php");
        }
    }


    function getDataById($id){
        global $link;
        $query="SELECT * FROM mahasiswa WHERE id = $id";
        $result=mysqli_query($link,$query);

        $student=mysqli_fetch_assoc($result);

        return json_encode($student);

        
    }


    function updateDataById($id,$data){
        global $link;

        $nim=$data['nim'];
        $nama=$data['nama'];
        $tgl=$data['tgl'];
        $agama=$data['agama'];
        $username=$data['username'];
        $password=$data['password'];

        $hashedPassword=password_hash($password,PASSWORD_BCRYPT);


        $query="UPDATE mahasiswa SET
         nim ='$nim',
         nama='$nama',
         tgl_lahir='$tgl',
        agama ='$agama',
        username='$username',
        password='$hashedPassword' WHERE id =$id";

         mysqli_query($link,$query);

         if(mysqli_affected_rows($link)==1){
            header("Location:mahasiswa.php");
        }


        return $query;


    }



    function searchDataStudents($key){
        global $link;
        $query="SELECT * FROM mahasiswa WHERE nama LIKE '%$key%' OR nim LIKE '%$key%' ";
        $result=mysqli_query($link,$query);

        $students=[];



        while($row=mysqli_fetch_assoc($result)){
            $students[]=$row;
        }

        return $students;

    }

?>