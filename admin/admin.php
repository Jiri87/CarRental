

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objednávky</title>
</head>
<body>

<?php
require "../databaze/pripojeni.php";

$stmt = $pdo -> query("SELECT * FROM objednavky ORDER BY datum_objednavky DESC");
$objednavky = $stmt -> fetchAll();
?>

<h1>Objednávky</h1>

<table>
    <tr>
        <th>Jméno</th>
        <th>Příjmení</th>
        <th>Email</th>
        <th>Telefon</th>
        <th>Vozidlo</th>
        <th>Doba zapůjčení</th>
        <th>Datum objednávky</th>
        <th>Akce</th>
    </tr>
    <tr>
       <?php  foreach ($objednavky as $obj): ?>
    </tr>
    <tr>
        <td><?= htmlspecialchars($obj['jmeno']) ?></td>
        <td><?= htmlspecialchars($obj['prijmeni']) ?></td>
        <td><?= htmlspecialchars($obj['email']) ?></td>
        <td><?= htmlspecialchars($obj['telefon']) ?></td>
        <td><?= htmlspecialchars($obj['vozidlo']) ?></td>
        <td><?= htmlspecialchars($obj['doba_zapujceni']) ?></td>
        <td><?= htmlspecialchars($obj['datum_objednavky']) ?></td>
        <td>
            <a href="edit.php?id=<?= $obj['id'] ?>">Upravit</a> |
            <a href="delete.php?id=<?= $obj['id'] ?>" onclick="return confirm('Opravdu smazat?')">Smazat</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<button class="button_zpet_admin" type="submit" onclick="window.location.href='../index.php'">Hlavní stránka</button>
<button class="button_odhlasit" type="button" onclick="window.location.href='logout.php'">Odhlásit se</button>
</body>
</html>
