
const cenik =  {
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

const dny = {
    "one_day": 1,
    "two_days": 2,
    "week": 7
};

function vypocetCeny () {
    const car = document.getElementById("selectCar").value;
    const time = document.getElementById("selectTime").value;
    const totalPriceElement = document.getElementById("totalPrice");

    if (car && time) {
        const cena = cenik[car] * dny[time];
        totalPriceElement.textContent = cena + " Kč";
    } else {
        totalPriceElement.textContent = "0 Kč";
    }
}



