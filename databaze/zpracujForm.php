

<?php
session_start();
require "pripojeni.php";


//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jmeno = $_POST['jmeno'] ?? null;
    $prijmeni = $_POST['prijmeni'] ?? null;
    $email = $_POST['email'] ?? null;
    $telefon = $_POST['telefon'] ?? null;
    $vozidlo = $_POST['vozidlo'] ?? null;
    $dobaZapujceni = $_POST['doba_zapujceni'] ?? null;
    $celkovaCena = $_POST['celkova_cena']?? null;
   
    if (empty($jmeno) || empty($prijmeni) || empty($email) || empty($telefon) || empty($vozidlo) || empty($dobaZapujceni) || empty($celkovaCena)) {
        die("Chyba: Vyplňte všechna pole.");
    }

    try {
        $stmt = $pdo->prepare("INSERT INTO objednavky (jmeno, prijmeni, email, telefon, vozidlo, doba_zapujceni, celkova_cena)
        VALUES (:jmeno, :prijmeni, :email, :telefon, :vozidlo, :doba_zapujceni, :celkova_cena)");
        $stmt->execute([
            ":jmeno" => $jmeno,
            ":prijmeni" => $prijmeni,
            ":email" => $email,
            ":telefon" => $telefon,
            ":vozidlo" => $vozidlo,
            ":doba_zapujceni" => $dobaZapujceni,
            ":celkova_cena" => $celkovaCena
        ]);

        $_SESSION ['info'] = ["text" => "Děkujeme za vaší objednávku", "typ" => "success"];
        $_SESSION ['objednavka'] = [
            'jmeno' => $jmeno,
            'prijmeni' => $prijmeni,
            'email' => $email,
            'telefon' => $telefon,
            'vozidlo' => $vozidlo,
            'doba_zapujceni' => $dobaZapujceni,
            'celkova_cena' => $celkovaCena
        ];

        header("Location: objednavka.php");
        exit();

    } catch (PDOException $e) {
        $_SESSION['info'] = ["text" => "Chyba při ukládání: " . $e -> getMessage(), "typ" => "error"];
        header("Location: objednavka.php");
        exit();
    }
}

?>





