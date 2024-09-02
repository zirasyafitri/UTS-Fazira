<?php

$penjualanan = new App\Penjualanan;
$rows = $penjualanan->tampil();

?>

<h2>Data Penjualanan</h2>

<a href="index.php?hal=penjualanan_input" class="btn">tambah data penjualanan</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA PRODUK</th>
        <th>JUMLAH</th>
        <th>TOTAL</th>
        <th>ADMIN</th>
        <th>TANGGAL INPUT</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['jual_id']; ?></td>
        <td><?php echo $row['jual_nama']; ?></td>
        <td><?php echo $row['jual_jmlh']; ?></td>
        <td><?php echo $row['jual_total']; ?></td>
        <td><?php echo $row['jual_admin']; ?></td>
        <td><?php echo $row['jual_tgl']; ?></td>
        <td><a href="index.php?hal=penjualanan_edit&id=<?php echo $row['jual_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=penjualanan_delete&id=<?php echo $row['jual_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
