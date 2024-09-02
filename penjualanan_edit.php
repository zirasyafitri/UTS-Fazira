<?php

$id = $_GET['id'];
$penjualanan = new App\Penjualanan();

$row = $penjualanan->edit($id);
?>

<h2>Edit Data Penjualanan</h2>

<form action="penjualanan_proses.php" method="post">
    <input type="hidden" name="jual_id" value="<?php echo $row['jual_id']; ?>">
    <table>
        <tr>
            <td>NAMA PRODUK</td>
            <td><input type="text" name="jual_nama" value="<?php echo $row['jual_nama']; ?>"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="jual_jmlh" value="<?php echo $row['jual_jmlh']; ?>"></td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td><input type="text" name="jual_total" value="<?php echo $row['jual_total']; ?>"></td>
        </tr>
        <tr>
            <td>ADMIN</td>
            <td><input type="text" name="jual_admin" value="<?php echo $row['jual_admin']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL INPUT</td>
            <td><input type="date" name="jual_tgl" value="<?php echo $row['jual_tgl']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>