<?php

declare(strict_types=1);

/*Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:
La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays.
*/

$array_1 = arrayCreation();
$array_2 = arrayCreation();


echo "<pre> Array 1: ";
print_r($array_1);
echo "</pre>";
echo "<pre> Array 2:";
print_r($array_2);
echo "</pre>";

$intersection = arrayIntersect($array_1, $array_2);
if (!empty($intersection)) {
    echo "<pre> The arrays intersection is: ";
    print_r($intersection);
    echo "</pre>";
} else {
    echo "There is no intersection within Array 1 and Array 2.";
}

$mergedArray = arrayMerge($array_1, $array_2);
echo "<pre> The merged array is: ";
print_r($mergedArray);
echo "</pr>";

function arrayCreation(): array
{
    for ($i = 0; $i < 5; $i++) {
        $array[] = rand(1, 10);
    }
    return $array;
}

function arrayIntersect(array $array_1, array $array_2): array
{

    $result = array_intersect($array_1, $array_2);
    return $result;
}

function arrayMerge(array $array_1, array $array_2): array
{
    $newArray = array_merge($array_1, $array_2);
    return $newArray;
}

?>