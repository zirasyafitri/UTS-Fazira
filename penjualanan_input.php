<h2>Tambah Data Penjualanan</h2>

<form action="penjualanan_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA PRODUK</td>
            <td><input type="text" name="jual_nama"></td>
        </tr>
        <tr>
            <td>JUMLAH</td>
            <td><input type="text" name="jual_jmlh"></td>
        </tr>
        <tr>
            <td>TOTAL</td>
            <td><input type="text" name="jual_total"></td>
        </tr>
        <tr>
            <td>ADMIN</td>
            <td><input type="text" name="jual_admin"></td>
        </tr>
        <tr>
            <td>TANGGAL INPUT</td>
            <td><input type="date" name="jual_tgl"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>