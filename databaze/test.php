

<!-- testovací skript pro kontrolu připojení k databázi -->
<?php
//připojení k databázi
require "pripojeni.php";


//skript pro kontrolu odeslaných dat do databáze
echo "<pre>";
print_r($_POST);
echo "</pre>";
?>