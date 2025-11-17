<?php
include 'auth.php';
include 'connection.php';

$kode = $_GET['kode'];
$kode = mysqli_real_escape_string($connection, $kode);

mysqli_query($connection, "DELETE FROM destinasi WHERE kode = '$kode'");

header("location: admin_index.php");
exit;
?>
