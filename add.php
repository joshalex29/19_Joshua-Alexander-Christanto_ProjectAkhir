<?php
include 'auth.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Destinasi Wisata</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="add_style.css">
</head>
<body>
    <div class="nav">
        <a href="index.php"><img src="./img/logoback.png" alt="Logo Tresna Nusantara" class="nav-logo"></a>
        <a href="index.php">Destinasi Populer</a>
        <a href="about.html">Tentang Kami</a>
        <a href="register.php">Register</a>
    </div>

    <div class="titlespace">
        <h1>Tambah Destinasi Wisata Baru</h1>
    </div>

    <div class="form-container">
        <form method="post" action="add_action.php">
            <fieldset>
                <legend>Data Destinasi</legend>
                <table class="table-input">
                    <tr>
                        <td>Nama Destinasi</td>
                        <td><input type="text" name="nama" required></td>
                    </tr>
                    <tr>
                        <td>Lokasi (Kota/Provinsi)</td>
                        <td><input type="text" name="lokasi" required></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><textarea name="deskripsi" rows="4"></textarea></td>
                    </tr>
                    <tr>
                        <td>Harga Tiket (Rp)</td>
                        <td><input type="number" name="harga_tiket" step="1000" min="0" required></td>
                    </tr>
                    <tr>
                        <td>Rating Bintang</td>
                        <td><input type="number" name="rating_bintang" step="0.1" min="1" max="5" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="submit" type="submit" value="SIMPAN DATA"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>

    <div class="but">
        <a href="admin_index.php"><button><== Kembali ke Admin Dashboard <==</button></a>
    </div>

    <div class="footer">
        Joshua Alexander Christanto - Tresna Nusantara - 2025<br>
        <br>
        All Rights Reserved
    </div>
</body>
</html>
