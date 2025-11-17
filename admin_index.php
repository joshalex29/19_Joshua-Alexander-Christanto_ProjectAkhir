<?php
include 'auth.php';
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Destinasi - CRUD</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="admin_index_style.css">
</head>
<body>
    <div class="nav">
        <a href="index.php"><img src="./img/logoback.png" alt="Logo Tresna Nusantara" class="nav-logo"></a>
        <a href="index.php">Destinasi Populer</a>
        <a href="about.html">Tentang Kami</a>
        <a href="register.php">Register</a>
    </div>

    <div class="titlespace">
        <h1>Admin Panel - Data Destinasi Wisata</h1>
    </div>

    <div class="container">
        <div class="actions">
            <a href="add.php"><button>+ TAMBAH DESTINASI +</button></a>
            <div class="logout"><a href="logout.php">Logout</a></div>
        </div>

        <table>
            <tr>
                <th>Kode</th>
                <th>Nama Destinasi</th>
                <th>Lokasi</th>
                <th>Deskripsi</th>
                <th>Harga Tiket (Rp)</th>
                <th>Rating Bintang</th>
                <th>Aksi</th>
            </tr>
            <?php
            $destinasi = mysqli_query($connection, "SELECT * FROM destinasi ORDER BY kode ASC");
            while ($d = mysqli_fetch_array($destinasi)) {
                ?>
                <tr>
                    <td><?php echo htmlspecialchars($d['kode']); ?></td>
                    <td><?php echo htmlspecialchars($d['nama']); ?></td>
                    <td><?php echo htmlspecialchars($d['lokasi']); ?></td>
                    <td><?php
                        $deskripsi_singkat = substr($d['deskripsi'], 0, 145);
                        if (strlen($d['deskripsi']) > 145) $deskripsi_singkat .= '...';
                        echo htmlspecialchars($deskripsi_singkat);
                    ?></td>
                    <td><?php echo number_format($d['harga_tiket'], 0, ',', '.'); ?></td>
                    <td><?php echo htmlspecialchars($d['rating_bintang']); ?> ⭐</td>
                    <td>
                        <a href="update.php?kode=<?php echo htmlspecialchars($d['kode']); ?>">UPDATE</a>
                        <a href="delete.php?kode=<?php echo htmlspecialchars($d['kode']); ?>" class="delete-btn" onclick="return confirm('Yakin ingin menghapus destinasi ini?');">DELETE</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>

    <div class="footer">
        Joshua Alexander Christanto - Tresna Nusantara - 2025<br>
        <br>
        All Rights Reserved
    </div>
</body>
</html>
