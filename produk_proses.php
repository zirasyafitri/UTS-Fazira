<?php

require_once "inc/Koneksi.php";
require_once "app/Produk.php";

$produk = new App\Produk();

if (isset($_POST['btn_simpan'])) {
    $produk->simpan();
    header("location:index.php?hal=produk_tampil");
}

if (isset($_POST['btn_update'])) {
    $produk->update();
    header("location:index.php?hal=produk_tampil");
}