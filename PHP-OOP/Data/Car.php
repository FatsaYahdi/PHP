<?php
namespace Data;

interface HasBrand { 
    function getBrand() : string;
}

interface IsMaintenance { 
    function isMaintenance() : bool;
}

interface Car extends HasBrand { 
    function drive() : void;
    function getTire() : int;
}

class Avanza implements Car, IsMaintenance {
    function drive(): void {
        echo "Drive Avanza" . PHP_EOL;
    }
    function getTire(): int {
        return 4;
    }
    function getBrand():string {
        return "Toyota\n";
    }
    function isMaintenance(): bool {
        return false;
    } 
}
