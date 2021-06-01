<?php include 'KoneksiCustomer.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="formcustomer.php">Tambah Data</a>
    <table border="1">
        <tr>
            <th align="center">No</th>
            <th>nama</th>
            <th>alamat</th>
            <th>NoTelp</th>
            <th>jumlahtransaksi</th>
            <th>email</th>
            
<th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
$i = 0;
$query = mysqli_query($con, "SELECT * FROM customer_2055301051");
while ($m = mysqli_fetch_array($query)) {
    $i++;
    ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$m['nama']?></td>
            <td><?=$m['alamat']?></td>
            <td><?=$m['NoTelp']?></td>
            <td><?=$m['jumlahtransaksi']?></td>
            <td><?=$m['email']?></td>
            <td><a href="formcustomerUpdate.php?id=<?php

print $m['id_customer']?>">Edit</a> | <a href="hapus.php?id=<?php print
    $m['id_customer']?>">Hapus</a></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>