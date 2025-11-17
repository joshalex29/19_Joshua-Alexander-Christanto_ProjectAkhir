<?php
include 'auth.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Destinasi Wisata</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="update_style.css">
</head>
<body>
    <div class="nav">
        <a href="index.php"><img src="./img/logoback.png" alt="Logo Tresna Nusantara" class="nav-logo"></a>
        <a href="index.php">Destinasi Populer</a>
        <a href="about.html">Tentang Kami</a>
        <a href="register.php">Register</a>
    </div>

    <div class="titlespace">
        <h1>Update Data Destinasi Wisata</h1>
    </div>

    <div class="form-container">
        <?php
        $kode = $_GET['kode'];
        $destinasi = mysqli_query($connection, "SELECT * FROM destinasi WHERE kode='$kode'");
        while ($d = mysqli_fetch_array($destinasi)) {
        ?>
        <form method="post" action="update_action.php">
            <fieldset>
                <legend>Data Destinasi</legend>
                <table class="table-input">
                    <tr>
                        <td>Kode Destinasi</td>
                        <td><?php echo htmlspecialchars($d['kode']); ?></td>
                    </tr>
                    <input type="hidden" name="kode" value="<?php echo htmlspecialchars($d['kode']); ?>">
                    <tr>
                        <td>Nama Destinasi</td>
                        <td><input type="text" name="nama" value="<?php echo htmlspecialchars($d['nama']); ?>" required></td>
                    </tr>
                    <tr>
                        <td>Lokasi (Kota/Provinsi)</td>
                        <td><input type="text" name="lokasi" value="<?php echo htmlspecialchars($d['lokasi']); ?>" required></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td><textarea name="deskripsi" rows="4"><?php echo htmlspecialchars($d['deskripsi']); ?></textarea></td>
                    </tr>
                    <tr>
                        <td>Harga Tiket (Rp)</td>
                        <td><input type="number" name="harga_tiket" step="1000" min="0" value="<?php echo htmlspecialchars($d['harga_tiket']); ?>" required></td>
                    </tr>
                    <tr>
                        <td>Rating Bintang</td>
                        <td><input type="number" name="rating_bintang" step="0.1" min="1" max="5" value="<?php echo htmlspecialchars($d['rating_bintang']); ?>" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="submit" type="submit" value="SIMPAN PERUBAHAN"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <?php
        }
        ?>
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
