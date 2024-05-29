<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melindungi dari serangan SQL Injection
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

    // Mengambil data user dari database
    $sql = "SELECT id, username, password FROM users WHERE username = '$username'";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        // Memeriksa apakah password sesuai
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password benar, mulai sesi dan arahkan ke index.php
            session_start();
            $_SESSION['username'] = $row['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            // Password salah
            header("Location: login.php?error=1");
            exit();
        }
    } else {
        // Username tidak ditemukan
        header("Location: login.php?error=1");
        exit();
    }
}

$db->close();
?>