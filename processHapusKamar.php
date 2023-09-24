<?php
session_start();

if (isset($_POST['hapusKamar'])) {

    $index = $_POST['index']; $namaKamar = $_SESSION['listKamar'][$index]["namaKamar"];

    unset($_SESSION['listKamar'][$index]);

    $_SESSION['listKamar'] = array_values($_SESSION['listKamar']);
    $_SESSION["success"] = "Berhasil menghapus data kamar " . $namaKamar;
}
header('Location:./dashboard.php');