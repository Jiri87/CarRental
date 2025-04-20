

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styly/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
</head>
<body>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"]=== "POST") {
    $username = $_POST["username"] ?? '';
    $password = $_POST["password"] ?? '';


    if ($username === "admin" && $password === "heslo123") {
        $_SESSION['admin'] = true;
        header ("Location: admin.php");
        exit();
    } else {
        $error = "Neplatné přihlašovací údaje";
    }
}

?>

<h1>Přihlášení administrátora</h1>

<form method="post" class="login-form">
    <input type="text" name="username" placeholder="Uživatelské jméno" required>
    <input type="password" name="password" placeholder="Heslo" required>
    <button class="button_log" type="submit">Přihlásit</button>  
    <button class="zpet" type="submit" onclick="window.location.href='../index.php'">Hlavní stránka</button>

    <?php  if (isset($error)): ?>
    <p  style="color:red"><strong><?= htmlspecialchars($error) ?></strong></p>
    <?php endif; ?>   

</form>

</body>
</html>





