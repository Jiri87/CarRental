//JS script pro výpočet základní ceny
document.addEventListener("DOMContentLoaded", function () {
    // Ceník vozidel
    const cenik = {
        "dodge_challenger_srt": 2500,
        "dodge_challenger_orange": 2400,
        "dodge_charger_green": 2300,
        "dodge_charger_silver": 2200,
        "dodge_charger_blue": 2100,
        "ford_mustang_1965": 2600,
        "ford_mustang_2022": 2700,
        "ford_mustang_1966": 2550,
        "gmc_yukon_xl": 3000,
        "gmc_yukon": 2900,
        "chevrolet_task_force": 2800,
        "chevrolet_camaro_black": 3100,
        "chevrolet_camaro_silver": 3200,
        "chevrolet_corveta": 3300
    };

    // Doby zapůjčení
    const dny = {
        "den": 1,
        "dva_dny": 2,
        "tyden": 7
    };

    function vypocetCeny() {
        console.log("Funkce vypocetCeny byla zavolána!"); // Debugging

        const car = document.getElementById("selectCar").value;
        const time = document.getElementById("selectTime").value;
        const celkovaCenaElement = document.getElementById("totalPrice");  // Zobrazení ceny
        const hiddenInput = document.getElementById("hiddenTotalPrice");   // Skrytý input

        if (car && time) {
            const cena = cenik[car] * dny[time] * 0.2 + cenik[car] * dny[time]  ;
            console.log(`Vypočítaná cena: ${cena} Kč`); // Debugging
            celkovaCenaElement.textContent = cena + " Kč";
            hiddenInput.value = cena;  // Nastavení hodnoty do skrytého inputu
        } else {
            celkovaCenaElement.textContent = "0 Kč";
            hiddenInput.value = ""; // Pokud není vybrané auto nebo doba, vynulovat cenu
        }
    }

    const form = document.querySelector('.form');
form.addEventListener('submit', function(event) {
    vypocetCeny(); // Spuštění výpočtu ceny před odesláním
    
    setTimeout(() => {
      
    }, 100);
});

    // Přidání event listenerů pro změnu hodnot v selectech
    document.getElementById("selectCar").addEventListener("change", vypocetCeny);
    document.getElementById("selectTime").addEventListener("change", vypocetCeny);

    // Volání vypocetCeny při načtení stránky pro případ výchozích hodnot
    vypocetCeny();
});