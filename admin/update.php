<?php

require "../databaze/pripojeni.php";

$id = $_POST ['id'];
$jmeno = $_POST ['jmeno'];
$prijmeni = $_POST ['prijmeni'];
$email = $_POST ['email'];
$telefon = $_POST ['telefon'];
$vozidlo = $_POST ['vozidlo'];
$dobaZapujceni = $_POST ['doba_zapujceni'];
$celkovaCena = $_POST ['celkova_cena'];
$datumObjednavky = $_POST ['datum_objednavky'];

$stmt = $pdo -> prepare ("UPDATE objednavky SET jmeno = ?, prijmeni = ?, email = ?, telefon = ?, vozidlo = ?, doba_zapujceni = ?, celkova_cena = ?, datum_objednavky = ? WHERE id = ? ");
$stmt -> execute([$jmeno, $prijmeni, $email, $telefon, $vozidlo, $dobaZapujceni, $celkovaCena, $datumObjednavky, $id]);

header("Location: admin.php");
exit;

?>
 