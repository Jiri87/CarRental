<?php

require "pripojeni.php";



$sql = 'SELECT * FROM objednavky';
$result = $conn -> query ($sql);

if ($result -> num_rows > 0) {

    echo "table border = '1' cellpadding = '8' cellspacing = '0' > ";
    echo "<tr>
        <th>id</th>
        <th>jmeno</th>
        <th>prijmeni</th>
        <th>email</th>
        <th>telefon</th>
        <th>vozidlo</th>
        <th>doba_zapujceni</th>
        <th>celkova_cena</th>
        <th>datum_objednavky</th>
        </tr>";


        while ($row = $result -> FETCH_ASSOC()) {
            echo "<tr>
                <td>" . htmlspecialchars($row["id"]) ." </td>
                <td>" . htmlspecialchars($row["jmeno"]) . " </td>
                <td>" . htmlspecialchars($row["prijmeni"]) . " </td>
                <td>" . htmlspecialchars($row["email"]) . " </td>
            
            
            
            
            
            
            
            "
        }

}

?>
