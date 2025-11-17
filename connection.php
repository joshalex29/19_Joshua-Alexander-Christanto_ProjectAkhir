<?php
$connection = mysqli_connect("localhost", "root", "mysql", "pariwisata");

if (mysqli_connect_error()) {
    die("Koneksi Database Gagal : " . mysqli_connect_error());
}
?>
