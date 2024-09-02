<?php

$id = $_GET['id'];
$produk = new App\Produk();

$row = $produk->edit($id);
?>

<h2>Edit Data Produk</h2>

<form action="produk_proses.php" method="post">
    <input type="hidden" name="produk_id" value="<?php echo $row['produk_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="produk_nama" value="<?php echo $row['produk_nama']; ?>"></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="produk_harga" value="<?php echo $row['produk_harga']; ?>"></td>
        </tr>   
        <tr>
            <td>STOK</td>
            <td><input type="text" name="produk_stok" value="<?php echo $row['produk_stok']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>