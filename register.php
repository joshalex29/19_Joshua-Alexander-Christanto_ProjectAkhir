<?php
session_start();
include 'connection.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $error = "Konfirmasi kata sandi tidak cocok.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $check_user = mysqli_query($connection, "SELECT * FROM users WHERE username='$username'");
        if (mysqli_num_rows($check_user) > 0) {
            $error = "Username sudah digunakan. Silakan pilih username lain.";
        } else {
            $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
            if (mysqli_query($connection, $query)) {
                header("location: login.php?register=success");
                exit;
            } else {
                $error = "Pendaftaran gagal. Silakan coba lagi.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Wisata</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="register_style.css">
</head>
<body>
    <div class="nav">
        <a href="index.php"><img src="./img/logoback.png" alt="Logo Tresna Nusantara" class="nav-logo"></a>
        <a href="index.php">Destinasi Populer</a>
        <a href="about.html">Tentang Kami</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>

    <div class="register-container">
        <h2>Daftar Akun Pengelola Wisata</h2>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <input type="password" name="confirm_password" placeholder="Konfirmasi Kata Sandi" required>
            <button type="submit">DAFTAR</button>
        </form>
        <div class="links">
            Sudah punya akun? <a href="login.php">Login di sini</a>
        </div>
    </div>

    <div class="footer">
        Joshua Alexander Christanto - Tresna Nusantara - 2025<br>
        <br>
        All Rights Reserved
    </div>
</body>
</html>
