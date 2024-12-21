<?php
// Memulai session
session_start();

// Cek apakah sesi sudah ada untuk halaman 1 dan 2
if (!isset($_SESSION['page1_count'])) {
    $_SESSION['page1_count'] = 0; // Set halaman 1 jika belum ada
}
if (!isset($_SESSION['page2_count'])) {
    $_SESSION['page2_count'] = 0; // Set halaman 2 jika belum ada
}

// Increment jumlah tampilan halaman sesuai dengan parameter yang dikirim
if (isset($_GET['page']) && $_GET['page'] == 'page1') {
    $_SESSION['page1_count']++;
}
if (isset($_GET['page']) && $_GET['page'] == 'page2') {
    $_SESSION['page2_count']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Manager</title>
</head>
<body>

    <h1>Session Manager</h1>
    <p>Welcome to the session manager page. Click on the links below to visit different pages.</p>

    <ul>
        <li><a href="?page=page1">Go to Page 1</a> (Viewed: <?= $_SESSION['page1_count'] ?> times)</li>
        <li><a href="?page=page2">Go to Page 2</a> (Viewed: <?= $_SESSION['page2_count'] ?> times)</li>
    </ul>

</body>
</html>
