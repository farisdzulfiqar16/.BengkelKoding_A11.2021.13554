<?php
$databaseHost = 'localhost';
$databaseName = 'kegiatan';
$databaseUsername = 'root';
$databasePassword = '';

// Membuat koneksi ke database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Mengecek koneksi
if (!$mysqli) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
