<?php

$id = $_GET['id'];

$penjualanan = new App\Penjualanan();
$rows = $penjualanan->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=penjualanan_tampil">Kembali</a>
</div>