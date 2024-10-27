<<<<<<< HEAD
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
=======
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
>>>>>>> 7f1fdd23798f927a4e57a6ab37ca93482baf3011
