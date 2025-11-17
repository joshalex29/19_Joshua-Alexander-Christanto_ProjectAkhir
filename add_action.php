<?php
include 'auth.php';
include 'connection.php';

$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];
$harga_tiket = $_POST['harga_tiket'];
$rating_bintang = $_POST['rating_bintang'];

$nama = mysqli_real_escape_string($connection, $nama);
$lokasi = mysqli_real_escape_string($connection, $lokasi);
$deskripsi = mysqli_real_escape_string($connection, $deskripsi);
$harga_tiket = (float)$harga_tiket;
$rating_bintang = (float)$rating_bintang;

mysqli_query($connection, "INSERT INTO destinasi(nama, lokasi, deskripsi, harga_tiket, rating_bintang)
VALUES('$nama', '$lokasi', '$deskripsi', '$harga_tiket', '$rating_bintang')");

header("location: admin_index.php");
exit;
?>
