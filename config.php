<?php
    $hostname = "localhost"; // Pastikan port 3307 adalah port yang benar untuk MySQL Anda
    $userDataBase = "root";
    $password = "";
    $dataBaseName = "data";

    // Membuat koneksi ke database
    $conn = mysqli_connect($hostname, $userDataBase, $password, $dataBaseName) or die(mysqli_error($koneksi));
?>