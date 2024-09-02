<?php

$produk = new App\Produk;
$rows = $produk->tampil();

?>

<h2>Data Produk</h2>

<a href="index.php?hal=produk_input" class="btn">tambah produk</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>HARGA</th>
        <th>STOK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['produk_id']; ?></td>
        <td><?php echo $row['produk_nama']; ?></td>
        <td><?php echo $row['produk_harga']; ?></td>
        <td><?php echo $row['produk_stok']; ?></td>
        <td><a href="index.php?hal=produk_edit&id=<?php echo $row['produk_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=produk_delete&id=<?php echo $row['produk_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
