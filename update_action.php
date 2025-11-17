<?php
include 'auth.php';
include 'connection.php';

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$deskripsi = $_POST['deskripsi'];
$harga_tiket = $_POST['harga_tiket'];
$rating_bintang = $_POST['rating_bintang'];

$query = "UPDATE destinasi SET
    nama='$nama',
    lokasi='$lokasi',
    deskripsi='$deskripsi',
    harga_tiket='$harga_tiket',
    rating_bintang='$rating_bintang'
WHERE kode = '$kode'";

if (mysqli_query($connection, $query)) {
    header("location: admin_index.php");
    exit;
} else {
    die("Error updating record: " . mysqli_error($connection));
}
?>
