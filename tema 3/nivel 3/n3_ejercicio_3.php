<?php

declare(strict_types=1);
// Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce().

$numbers = [5, 11, 19, 2, 20, 19, 7];

echo "If we sum only prime numbers of the array: " . implode(", ", $numbers) . " we get the result of " . sumPrimeNums($numbers);


function isPrime(int $number): bool
{
    $isPrime = true;

    if ($number <= 1) {
        $isPrime = false;
    }
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $isPrime = false;
        }
    }
    return $isPrime;
}
function sumPrime(int $sum, int $number): int
{
    if (isPrime($number)) {
        $sum += $number;
    }
    return $sum;
}

function sumPrimeNums(array $array): int
{

    $sumPrimes = array_reduce($array, "sumPrime", 0);    // Reduce devuelve un solo valor --> obliga a tener una funcion con acumulador + numero a adicionar. El 0 es valor inicial para ejecutar el callback. Si fuera 5, la suma iniciaria con ese valor en $sum.
    return $sumPrimes;
}
?>