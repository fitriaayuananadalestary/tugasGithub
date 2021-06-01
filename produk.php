<?php include 'Koneksi.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="formMahasiswa.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th align="center">No</th>
            <th>Nama</th>
            <th>harga</th>
            <th>kategori</th>
            <th>deskripsi</th>
            <th>stok</th>
            
<th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
$i = 0;
$query = mysqli_query($con, "SELECT * FROM 2055301051_produk");
while ($m = mysqli_fetch_array($query)) {
    $i++;
    ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$m['nama']?></td>
            <td><?=$m['harga']?></td>
            <td><?=$m['kategori']?></td>
            <td><?=$m['deskripsi']?></td>
            <td><?=$m['stok']?></td>
            <td><a href="formMahasiswaUpdate.php?id=<?php

print $m['id_mahasiswa']?>">Edit</a> | <a href="hapus.php?id=<?php print
    $m['id_mahasiswa']?>">Hapus</a></td>
        </tr>
        <?php }?>
    </table>
</body>

</html>