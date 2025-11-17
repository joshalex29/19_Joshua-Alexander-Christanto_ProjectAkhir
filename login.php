<?php
session_start();
include 'connection.php';
$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: admin_index.php");
            exit;
        } else {
            $error = "Username atau Kata Sandi salah.";
        }
    } else {
        $error = "Username atau Kata Sandi salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wisata</title>
    <link rel="icon" type="image/x-icon" href="./img/favicon.png">
    <link rel="stylesheet" href="login_style.css">
</head>
<body>
    <div class="nav">
        <a href="index.php"><img src="./img/logoback.png" alt="Logo Tresna Nusantara" class="nav-logo"></a>
        <a href="index.php">Destinasi Populer</a>
        <a href="about.html">Tentang Kami</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>

    <div class="login-container">
        <h2>Login Pengelola Wisata</h2>
        <?php if (isset($_GET['register']) && $_GET['register'] == 'success'): ?>
            <p class="success">Pendaftaran berhasil! Silakan login.</p>
        <?php endif; ?>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Kata Sandi" required>
            <button type="submit">LOGIN</button>
        </form>
        <div class="links">
            Belum punya akun? <a href="register.php">Daftar di sini</a>
        </div>
    </div>

    <div class="footer">
        Joshua Alexander Christanto - Tresna Nusantara - 2025<br>
        <br>
        All Rights Reserved
    </div>
</body>
</html>
