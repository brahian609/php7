<?php
/**
 * Created by PhpStorm.
 * User: brahian
 * Date: 24/04/16
 * Time: 07:38 PM
 */

//Declaración stricta de variables
declare(strict_types=1);

// Modo coercitivo
function sumaDeEnteros(int ...$enteros){
    return array_sum($enteros);
}

try {
    var_dump(sumaDeEnteros(2, 3, 4));
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}

echo "<br>";

function saludo(string $nombre): string {

    return "Hola $nombre como estas?";

}

try {
    echo saludo("Brahian Giraldo Medina");
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}

echo "<br>";

function sumarArrays(array ...$arrays): array
{
    return array_map(function(array $array): int {
        return array_sum($array);
    }, $arrays);
}

print_r(sumarArrays([1,2,3], [4,5,6], [7,8,9]));

