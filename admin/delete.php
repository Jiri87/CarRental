
<?php

session_start();

require "../databaze/pripojeni.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = (int) $_POST['id'];

        try {
            $stmt = $pdo->prepare("DELETE FROM objednavky WHERE id = ?");
            $stmt->execute([$id]);

            $_SESSION['info'] = [
                'text' => "Objednávka ID $id byla úspěšně smazána.",
                'typ' => 'success'
            ];
        } catch (PDOException $e) {
            $_SESSION['info'] = [
                'text' => "Chyba při mazání: " . $e->getMessage(),
                'typ' => 'error'
            ];
        }
    } else {
        $_SESSION['info'] = [
            'text' => "Neplatné ID objednávky.",
            'typ' => 'error'
        ];
    }
    header("Location: admin.php");
    exit();
} else {
    header("Location: admin.php");
    exit();
}
?>