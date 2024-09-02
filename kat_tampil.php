<?php

$kat = new App\Kategori;
$rows = $kat->tampil();

?>

<h2>Data Kategori</h2>

<a href="index.php?hal=kat_input" class="btn">tambah kategori</a>

<table>
    <tr>
        <th>NO</th>
        <th>KATEGORI</th>
        <th>TANGGAL INPUT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['cat_id']; ?></td>
        <td><?php echo $row['cat_kategori']; ?></td>
        <td><?php echo $row['cat_tanggal']; ?></td>
        <td><a href="index.php?hal=kat_edit&id=<?php echo $row['cat_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=kat_delete&id=<?php echo $row['cat_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
