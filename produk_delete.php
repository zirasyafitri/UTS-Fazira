<?php

$id = $_GET['id'];

$produk = new App\Produk();
$rows = $produk->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=produk_tampil">Kembali</a>
</div>