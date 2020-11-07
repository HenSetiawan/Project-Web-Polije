<?php 
    require 'modelMahasiswa.php';
    $keyword=$_POST['keyword'];

    $students=searchDataStudents($keyword);


?>


<table class="table mt-2">
    <thead class="thead-light">
        <tr>
        <th scope="col">NO</th>
        <th scope="col">NIM</th>
        <th scope="col">NAMA</th>
        <th scope="col">TGL-L</th>
        <th scope="col">Agama</th>
        <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>

    <?php
        $no=1;
        foreach($students as $student) { ?>
        <tr>
        <th scope="row"><?= $no ; ?></th>
        <td><?= $student['nim'] ; ?></td>
        <td><?= $student['nama'] ; ?></td>
        <td><?= $student['tgl_lahir'] ; ?></td>
        <td><?= $student['agama'] ; ?></td>
        <td>
            <button class="btn btn-sm btn-danger btnDelete" data-url="http://localhost/akademik/delstudent.php?id=<?=$student['id']?>">hapus</button>
            <button class="btn btn-sm btn-warning btnUpdate" data-id="<?=$student['id'] ?>">ubah</button>
        </td>
        </tr>
    <?php  $no++;} ?>
        
    </tbody>
    </table>