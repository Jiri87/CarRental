<?php

class Cenik {

    private array $ceny = [
        'dodge_challenger_srt' => 2500,
        'dodge_challenger_orange' => 2200,
        'dodge_charger_green' => 2000,
        'dodge_charger_silver' => 1900,
        'dodge_charger_blue' => 1950,
        'ford_mustang_1965' => 4000,
        'ford_mustang_2022' => 3500,
        'ford_mustang_1966' => 3800,
        'gmc_yukon_xl' => 3600,
        'gmc_yukon' => 3400,
        'chevrolet_task_force' => 2500,
        'chevrolet_camaro_black' => 3000,
        'chevrolet_camaro_silver' => 2900,
        'chevrolet_corveta' => 5000,
    ];

    private array $dny = [
        'one_day' => 1,
        'two_days' => 2,
        'week' => 7,
    ];
    
  
    public function vypocitejCenu(string $vozidlo, int $doba): int {
        if (!isset($this->ceny[$vozidlo]) || !isset($this -> dny [$doba])) {
            throw new Exception("Neznámý typ vozidla, nebo doba zapůjčení.");
        }

       

        return $this->ceny[$vozidlo] * $this -> dny[$doba];
    }


}

?>