<?php

require_once "header.php";


?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objednávkový formulář</title>
</head>
<body>
    <form action="form.php" class="form" method="POST" >
        <label for="jmeno">Jméno</label>
        <input id="jmeno" type="text" name="jmeno" placeholder="Jméno" required>

        <label for="prijmeni">Příjmení</label>
        <input id="prijmeni" type="text" name="prijmeni" placeholder="Příjmení" required>

        <label for="email">Email</label>
        <input id="email" type="email" name="email" placeholder="Email" required>
        
        <label for="telcislo">Telefonní číslo</label>
        <input id="telcislo" type="tel" name="telcislo" placeholder="+420 Telefonní číslo" pattern="\+?[0-9\s-]{9,15}" title="Zadejte telefonní číslo (např. +420 123 456 789)"  required>
    
        <label for="select">Vyberte typ vozidla:</label>
    <select id="selectCar" name="vozidlo" required onchange="vypocetCeny()">
        <option value="" disabled selected>-- Vyberte vozidlo --</option>
        <option value="dodge_challenger_srt">Dodge Challenger SRT</option>
        <option value="dodge_challenger_orange">Dodge Challenger</option>
        <option value="dodge_charger_green">Dodge Charger zelený</option>
        <option value="dodge_charger_silver">Dodge Charger stříbrný</option>
        <option value="dodge_charger_blue">Dodge Charger modrý</option>
        <option value="ford_mustang_1965">Ford Mustang 1965</option>
        <option value="ford_mustang_2022">Ford Mustang 2022</option>
        <option value="ford_mustang_1966">Ford Mustang 1966</option>
        <option value="gmc_yukon_xl">GMC Yukon XL</option>
        <option value="gmc_yukon">GMC Yukon</option>
        <option value="chevrolet_task_force">Chevrolet Task Force 1950</option>
        <option value="chevrolet_camaro_black">Chevrolet Camaro černá</option>
        <option value="chevrolet_camaro_silver">Chevrolet Camaro stříbrný</option>
        <option value="chevrolet_corveta">Chevrolet Corveta</option>
    </select>
    <label for="select">Doba zapůjčení</label>
    <select id="selectTime" name="doba_zapujceni" required onchange="vypocetCeny()">
        <option value="one_day">1 den</option>
        <option value="two_days">2 dny</option>
        <option value="week">týden</option>
    </select>
    <br/>
   
    <script src="javascript/cenik.js"></script>

    <label>Celková cena: <span id="totalPrice">0 Kč</span></label>
    <br/>
    <button type="submit" class="button_odeslat">Odeslat objednávku</button>

    <button type="button" class="button_zpet" onClick="window.location.href='index.php'">Zpět</button>

    </form>
</body>
</html>