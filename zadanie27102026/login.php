<?php
session_start();

if (isset($_SESSION['user'])) 
{
    header("Location: panel.php");
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $login = $_POST['login'] ?? '';
    $haslo = $_POST['haslo'] ?? '';
    $zapamietaj = isset($_POST['zapamietaj']);

    if ($login === 'admin' && $haslo === '1234') 
    {
        $_SESSION['user'] = $login;

        if ($zapamietaj) 
        {
            setcookie('saved_login', $login, time() + (7 * 24 * 60 * 60), "/");
        } 
        else 
        {
           
            if (isset($_COOKIE['saved_login'])) 
            {
                setcookie('saved_login', '', time() - 3600, "/");
            }
        }

        header("Location: panel.php");
        exit();
    } 
    else 
    {
        $error = "Nieprawidłowy login lub hasło!";
    }
}

$saved_login = $_COOKIE['saved_login'] ?? '';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h2>Formularz logowania</h2>
    
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <div>
            <label for="login">Login:</label><br>
            <input type="text" id="login" name="login" value="<?php echo htmlspecialchars($saved_login); ?>" required>
        </div>
        <br>
        <div>
            <label for="haslo">Hasło:</label><br>
            <input type="password" id="haslo" name="haslo" required>
        </div>
        <br>
        <div>
            <input type="checkbox" id="zapamietaj" name="zapamietaj" value="1">
            <label for="zapamietaj">Zapamiętaj mnie</label>
        </div>
        <br>
        <div>
            <input type="submit" value="Zaloguj się">
        </div>
    </form>
</body>
</html>