<?php
session_start();
if (!isset($_SESSION['user'])) 
{
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel</title>
</head>
<body>
    <h2>Panel</h2>
    <p>Witaj, <?php echo htmlspecialchars($_SESSION['user']); ?>!</p>
    <p><a href="logout.php">Wyloguj się</a></p>
</body>
</html>