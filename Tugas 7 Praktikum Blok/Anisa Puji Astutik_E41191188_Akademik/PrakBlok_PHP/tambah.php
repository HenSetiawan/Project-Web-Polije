<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<div class="container">
    <form action="tambah_data.php" method="post">
    <div class="form-group">
            <label>NIK:</label>
            <input type="text" name="nik"  class="form-control" required />
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control"  required/>
        </div>
        <div class="form-group">
            <label>jenis kelamin:</label>
           <select class="form-control" name="jk" id="jk">
           <option value="1">laki-laki</option>
           <option value="2">Perempuan</option>
           </select>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lhr" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="sel1">Jurusan:</label>
            <select class="form-control" name="jurusan">
                <?php
                include "koneksi.php";
                //Perintah sql untuk menampilkan semua data pada tabel jurusan
                $sql="select * from jurusan";

                $hasil=mysqli_query($kon,$sql);
                $no=0;
                $jurusan=$data['jurusan'];
                while ($ambil = mysqli_fetch_array($hasil)) {
                    $no++;

                    $ket="";
                    if (isset($_GET['nik'])) {

                        if ($jurusan==$ambil['kode_jurusan'])
                        {
                            $ket="selected";
                        }
                    }
                    ?>
                    <option <?php echo $ket; ?> value="<?php echo $ambil['kode_jurusan'];?>"><?php echo $ambil['nama_jurusan'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Umur:</label>
            <input type="number" name="umur" class="form-control"required/>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="tambah">
        </div>
    </form>
    </div>
</body>
</html>