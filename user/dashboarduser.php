<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
</head>

<body>
    <h1>Dashboard User</h1>
    <p>Selamat datang di halaman dashboard, user!</p>
    <a href="logout.php">Logout</a>
</body>

</html>