<?php
// Memulai session
session_start();

// Update count untuk page2
if (!isset($_SESSION['page2_count'])) {
    $_SESSION['page2_count'] = 0;
}
$_SESSION['page2_count']++;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
</head>
<body>

    <h1>Page 2</h1>
    <p>You have viewed this page <?= $_SESSION['page2_count'] ?> times.</p>
    <a href="index.php">Back to Session Manager</a>
    <br><br>
    <a href="page1.php">Go to Page 1</a> (Viewed: <?= isset($_SESSION['page1_count']) ? $_SESSION['page1_count'] : 0 ?> times)

</body>
</html>
