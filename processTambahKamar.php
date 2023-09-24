<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ./login.php");
    exit;
}

if (isset($_POST["namaKamar"]) && isset($_POST["deskripsi"]) && isset($_POST["tipe"]) && isset($_POST["harga"])) {
    $nama = $_POST["namaKamar"];
    $deskripsi = $_POST["deskripsi"];
    $tipe = $_POST["tipe"];
    $harga = $_POST["harga"];
    
    $kamar = [
        "namaKamar" => $nama,
        "deskripsi" => $deskripsi,
        "tipe" => $tipe,
        "harga" => $harga,
    ];

    if (!isset($_SESSION["listKamar"])) {
        $_SESSION["listKamar"] = [];
    }

    $_SESSION["listKamar"][] = $kamar;

    $_SESSION["success"] = "Berhasil menyimpan data kamar " . $kamar["namaKamar"];
        header("Location: ./dashboard.php");
        exit;
    }else {
        header("Location: ./tambahKamar.php");
        exit;
    }

?>