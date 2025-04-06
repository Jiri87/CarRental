

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaše objednávka</title>
</head>
<body>
    <h1>Vaše objednávka</h1>

    <?php if (isset($_SESSION['info'])): ?>
        <h2><?= htmlspecialchars($_SESSION['info']['text']) ?></h2>

        <?php if ($_SESSION['info']['typ'] === "success" && isset($_SESSION['objednavka'])): ?>
            <h3>Detail objednávky:</h3>
            <ul class="vypis">
                <li><strong>Jméno:</strong> <?= htmlspecialchars($_SESSION['objednavka']['jmeno']) ?></li>
                <li><strong>Příjmení:</strong> <?= htmlspecialchars($_SESSION['objednavka']['prijmeni']) ?></li>
                <li><strong>Email:</strong> <?= htmlspecialchars($_SESSION['objednavka']['email']) ?></li>
                <li><strong>Telefon:</strong> <?= htmlspecialchars($_SESSION['objednavka']['telefon']) ?></li>
                <li><strong>Vozidlo:</strong> <?= htmlspecialchars($_SESSION['objednavka']['vozidlo']) ?></li>
                <li><strong>Doba zapůjčení:</strong> <?= htmlspecialchars($_SESSION['objednavka']['doba_zapujceni']) ?></li>
                <li><strong>Celková cena:</strong> <?= htmlspecialchars($_SESSION['objednavka']['celkova_cena']) ?> Kč</li>
            </ul>
        <?php endif; ?>

        <?php if ($_SESSION['info']['typ'] === "error"): ?>
            <p style="color: red;">Objednávka se neuložila.</p>
        <?php endif; ?>

    <?php else: ?>
        <p>Žádná objednávka nebyla odeslána.</p>
    <?php endif; ?>

    <?php
    // Smazání session po jejím zobrazení
    unset($_SESSION['info']);
    unset($_SESSION['objednavka']);
    ?>

<button type="button" class="button_zpet_obj" onClick="window.location.href='../index.php'">Zpět</button>
</body>
</html>