<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tresna Nusantara</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="index_style.css">
</head>
<body>
    <div class="nav">
        <a href="index.php"><img src="./img/logoback.png" alt="Logo Tresna Nusantara" class="nav-logo"></a>
        <a href="index.php">Destinasi Populer</a>
        <a href="about.html">Tentang Kami</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>

    <div class="container">
        <div class="jumbotron">
            <img src="./img/logoback.png" alt="Logo Tresna Nusantara" class="jumbo-logo">
            <p class="lead">Sedia layanan perjalanan terbaik dan tak terlupakan untuk anda.</p>
        </div>

        <h2 class="text-center">
            <div class="textsubtitle">
                <strong>Layanan Kami</strong>
            </div>
        </h2>

        <div class="wisata-grid">
            <div class="card">
                <img src="./img/indomap.jpg" class="card-img-top" alt="Paket Wisata">
                <div class="card-body">
                    <h5 class="card-title"><strong>Paket Wisata</strong></h5>
                    <p class="card-text">Paket wisata lengkap untuk pengalaman yang berharga.</p>
                </div>
            </div>
            <div class="card">
                <img src="./img/tourguide.jpeg" class="card-img-top" alt="Tour Guide">
                <div class="card-body">
                    <h5 class="card-title"><strong>Tour Guide</strong></h5>
                    <p class="card-text">Pemandu wisata yang sudah berpengalaman siap untuk menemani perjalanan anda.</p>
                </div>
            </div>
            <div class="card">
                <img src="./img/travelagent (1).jpg" class="card-img-top" alt="Dukungan Pelanggan">
                <div class="card-body">
                    <h5 class="card-title"><strong>Dukungan Pelanggan</strong></h5>
                    <p class="card-text">Tim Pariwisata kami siap melayani anda kapan saja.</p>
                </div>
            </div>
        </div>

        <h2 class="text-center">
            <div class="textsubtitle">
                <strong>Destinasi Pilihan Kami</strong>
            </div>
        </h2>

        <div class="wisata-grid">
            <?php
            $destinasi = mysqli_query($connection, "SELECT * FROM destinasi ORDER BY nama ASC");
            if (mysqli_num_rows($destinasi) > 0) {
                while ($d = mysqli_fetch_array($destinasi)) {
                    ?>
                    <div class="card">
                        <div class="card-content">
                            <h3><?php echo htmlspecialchars($d['nama']); ?></h3>
                            <div class="rating">
                                ⭐ <?php echo htmlspecialchars($d['rating_bintang']); ?>
                                <span>/ 5.0</span>
                            </div>
                            <span class="location">📍 Lokasi: <?php echo htmlspecialchars($d['lokasi']); ?></span>

                            <p><?php
                                echo nl2br(htmlspecialchars($d['deskripsi']));
                            ?></p>

                            <span class="price">Tiket: Rp <?php echo number_format($d['harga_tiket'], 0, ',', '.'); ?></span>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<p style='text-align: center;'>Belum ada data destinasi wisata yang tersedia.</p>";
            }
            ?>
        </div>
    </div>

    <div class="footer">
        Joshua Alexander Christanto - Tresna Nusantara - 2025<br>
        <br>
        All Rights Reserved
    </div>
</body>
</html>
