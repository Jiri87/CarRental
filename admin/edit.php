

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styly/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editace</title>
</head>
<body>
    <h1>Správa objednávek USCAR</h1>
    <?php

require "../databaze/pripojeni.php";
$id = $_POST['id'] ?? null;

if (!$id) {
    die("Chybí ID objednávky.");
}

$stmt = $pdo -> prepare("SELECT * FROM objednavky WHERE id = ? ");
$stmt -> execute([$id]);
$obj = $stmt -> fetch();

if (!$obj) {
    die ("Objednavka nenalezena.");
}
?>
<!-- formulář pro editaci-->
<form method="post" class="form" action="update.php">
    <input type="hidden" name="id" value="<?= $obj['id'] ?>">
    <label>Jméno: <input name="jmeno" value="<?= htmlspecialchars($obj['jmeno']) ?>"></label><br>
    <label>Příjmení: <input name="prijmeni" value="<?= htmlspecialchars($obj['prijmeni']) ?>"></label><br>
    <label>Email: <input name="email" value="<?= htmlspecialchars($obj['email']) ?>"></label><br>
    <label>Telefon: <input name="telefon" value="<?= htmlspecialchars($obj['telefon']) ?>"></label><br>
    <label>Vozidlo: <input name="vozidlo" value="<?= htmlspecialchars($obj['vozidlo']) ?>"></label><br>
    <label>Doba zapůjčení: <input name="doba_zapujceni" value="<?= htmlspecialchars($obj['doba_zapujceni']) ?>"></label><br>
    <label>Celková cena: <input name="celkova_cena" value="<?= htmlspecialchars($obj['celkova_cena']) ?>"></label><br>
    <label>Datum objednávky: <input name="datum_objednavky" value="<?= htmlspecialchars($obj['datum_objednavky']) ?>"></label><br>
    
    <button class="button_ulozit" type="submit">Uložit změny</button>
</form>

</body>
</html>

