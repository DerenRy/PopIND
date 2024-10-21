<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = ""; // Kosongkan jika belum disetel
    $db_name = "popind";

    // Membuat koneksi
    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    // Memeriksa koneksi
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Koneksi berhasil
    echo "Connected successfully";
?>
