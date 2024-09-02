<?php

require_once "inc/Koneksi.php";
require_once "app/Penjualanan.php";

$penjualanan = new App\Penjualanan();

if (isset($_POST['btn_simpan'])) {
    $penjualanan->simpan();
    header("location:index.php?hal=penjualanan_tampil");
}

if (isset($_POST['btn_update'])) {
    $penjualanan->update();
    header("location:index.php?hal=penjualanan_tampil");
}