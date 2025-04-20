

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objednávky</title>
</head>
<body>
<!-- připojení k databázi-->
<?php
require "../databaze/pripojeni.php";

$stmt = $pdo -> query("SELECT * FROM objednavky ORDER BY datum_objednavky DESC");
$objednavky = $stmt -> fetchAll();
?>

<h1>Objednávky USCAR</h1>

<!--Tabulka pro správu objednávek-->

<table>
    <tr>
        <th>id</th>
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Vozidlo</th>
        <th>Doba zapůjčení</th>
        <th>Celková cena</th>
        <th>Datum objednávky</th>
        <th>Editace objednávky</th>
        <th>Vymazání objednávky</th>
    </tr>
    <tr>
       <?php  foreach ($objednavky as $obj): ?>
    </tr>
    <tr>
        <td><?= htmlspecialchars($obj['id']) ?></td>
        <td><?= htmlspecialchars($obj['jmeno']) ?></td>
        <td><?= htmlspecialchars($obj['prijmeni']) ?></td>
        <td><?= htmlspecialchars($obj['email']) ?></td>
        <td><?= htmlspecialchars($obj['telefon']) ?></td>
        <td><?= htmlspecialchars($obj['vozidlo']) ?></td>
        <td><?= htmlspecialchars($obj['doba_zapujceni']) ?></td>
        <td><?= htmlspecialchars($obj['celkova_cena']) ?></td>
        <td><?= htmlspecialchars($obj['datum_objednavky']) ?></td>
        <td>
        
            <form method="POST" action="edit.php" style="display:line,">
                <input type="hidden" name="id" value="<?= $obj['id'] ?>">
                <button type="submit" class="button_edit">Editace</button>
            </form>
        </td>
        <td>  
            <form method="POST" action="delete.php" style="display:inline;">
                <input type="hidden" name="id" value="<?= $obj['id'] ?>">
                <button type="submit" class="button_delete" onclick="return confirm('Opravdu smazat?')">Smazat</button>
            </form>
        </td>  
    </tr>
    <?php endforeach; ?>
</table>
<button class="button_zpet_admin" type="submit" onclick="window.location.href='../index.php'">Hlavní stránka</button>
<button class="button_odhlasit" type="button" onclick="window.location.href='logout.php'">Odhlásit se</button>
</body>
</html>
