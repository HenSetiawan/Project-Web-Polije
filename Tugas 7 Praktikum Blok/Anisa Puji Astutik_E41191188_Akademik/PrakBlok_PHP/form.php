<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data pada form berdasarkan pilihan Combo Box di PHP</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>

</head>
<body>
<div class="container">
    <h4>Menampilkan Data pada form berdasarkan pilihan Combo Box di PHP</h4>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get">
        <div class="form-group">
            <label for="sel1">Pilih Mahasiswa:</label>
            <select class="form-control" name="nik">
                <?php
                include "koneksi.php";
                //Perintah sql untuk menampilkan semua data pada tabel jurusan
                $sql="select nik,nama from mahasiswa";

                $hasil=mysqli_query($kon,$sql);
                $no=0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;

                    $ket="";
                    if (isset($_GET['nik'])) {
                        $nik = trim($_GET['nik']);

                        if ($nik==$data['nik'])
                        {
                            $ket="selected";
                        }
                    }
                    ?>
                    <option <?php echo $ket; ?> value="<?php echo $data['nik'];?>"><?php echo $data['nik'];?> - <?php echo $data['nama'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Pilih">
        </div>
    </form>
    <h2>Input Data</h2>
    <?php

    if (isset($_GET['nik'])) {
        $nik=$_GET["nik"];

        $sql="select * from mahasiswa where nik=$nik";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);
    }
    ?>
<a href="hapus.php?id=<?php echo $data['nik']; ?>">hapus</a>
<a href="tambah.php">tambah</a>
<form action="update.php" method="post">
        <div class="form-group">
            <label>NIK:</label>
            <input type="text" name="nik" value="<?php echo $data['nik']; ?>" class="form-control" required readonly/>
        </div>
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="form-control"  required/>
        </div>
        <div class="form-group">
            <label>jenis kelamin:</label>
            <select class="form-control" name="jk">
            <?php
            if ($data['jk'] == 1) {
                $ket="selected";
            ?>
            <option <?php echo $ket; ?> value="<?php echo $data['jk'];?>">Laki laki</option>
            <option value="<?php echo $data['jk'];?>">perempuan</option>
            <?php
        } else if ($data['jk'] == 2) {
            $ket="selected";
        ?>
       <option value="<?php echo $data['jk'];?>">Laki laki</option>
            <option <?php echo $ket; ?> value="<?php echo $data['jk'];?>">perempuan</option>
        <?php
        }
        ?>
        </select>
        </div>
        

        <div class="form-group">
            <label>Tanggal Lahir:</label>
            <input type="date" name="tanggal_lhr" value="<?php echo $data['tanggal_lhr']; ?>" class="form-control" required/>
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
            <input type="number" name="umur" value="<?php echo $data['umur']; ?>" class="form-control"required/>
        </div>
        <input type="submit" class="btn btn-info" value="edit">
</form>
</div>
</body>
</html>