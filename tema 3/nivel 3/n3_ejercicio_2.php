<?php
declare(strict_types=1);

/*Donat un array d’strings, fes un programa que:
Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().*/

$words = ["table", "chair", "bed", "sofa", "blanket", "wardrobe"];
$evenWord = evenCharWords($words);

echo "From the words: " . implode(", ", $words) . " --> only the following have an even number of characters: " . implode(", ",$evenWord);

function evenCharacters(string $string) : bool
{
    $result = (strlen($string) % 2 === 0)? true : false;
    return $result;
}

function evenCharWords(array $array) : array
{

    $evenWords = array_filter($array, "evenCharacters");
    return $evenWords;
}
?>