


<?php
//Vytvoření základního připojení k databázi
$host = "localhost";
$dbname = "objednavky_db";
$username = "root";
$password = "";

try {
    $dsn = "mysql::host=$host;dbname=$dbname;charset=utf8";
    $pdo = new PDO($dsn,$username,$password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);


    //echo "Připojení k databázi bylo úspěšné!";

} catch (PDOException $e) {
    die ("Chyba připojení k databázi: " . $e -> getMessage());
}

?>