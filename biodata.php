<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit();
}

$username = $_SESSION['username'] ?? 'Pengguna';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="biodata-container">
        <h1>Biodata</h1>
        <img src="asset/3.jpeg" alt="Profile Picture" class="profile-picture">
        <p><strong>Nama:</strong> M Farhan Alhabsy</p>
        <p><strong>NIM:</strong> 09031282328029</p>
        <p><strong>Jurusan:</strong> Sistem Informasi</p>
        <p><strong>Username:</strong> <?= htmlspecialchars($username) ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
