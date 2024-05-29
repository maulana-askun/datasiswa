<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Melindungi dari serangan SQL Injection
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

    // Mengenkripsi password sebelum menyimpannya ke database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Menyimpan data pengguna ke database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    
    if ($db->query($sql) === TRUE) {
        echo "Registrasi berhasil. Silakan <a href='login.php'>login</a>.";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

$db->close();
?>