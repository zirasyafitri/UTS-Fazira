<?php

$id = $_GET['id'];
$kat = new App\Kategori();

$row = $kat->edit($id);
?>

<h2>Edit Kategori</h2>

<form action="kat_proses.php" method="post">
    <input type="hidden" name="cat_id" value="<?php echo $row['cat_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="cat_kategori" value="<?php echo $row['cat_kategori']; ?>"></td>
        </tr>
        <tr>
            <td>TANGGAL INPUT</td>
            <td><input type="text" name="cat_tanggal" value="<?php echo $row['cat_tanggal']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>