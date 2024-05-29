<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4682b4;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        h3 {
            margin: 10px 0 0;
        }

        nav {
            background-color: #87cefa;
            padding: 10px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #000080;
        }

        h4 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            font-size: 1.1em;
            color: green;
        }

        p.error {
            color: red;
        }

    </style>
</head>
<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        </ul>
    </nav>

    <?php if(isset($_GET['status'])): ?>
    <p class="<?php echo ($_GET['status'] == 'sukses') ? 'success' : 'error'; ?>">
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>
    
</body>
</html>