<?php
declare(strict_types=1);

/*Donat un array d’enters, fes un programa que:
Retorni cada valor de l’array elevat al cub fent servir la funció array_map().*/



$numbers = arrayCreation();


echo "<pre> The initial array is: ";
print_r($numbers);
echo "The array cubed is: ";
print_r(numbersCubed($numbers));
echo "</pre>";


function arrayCreation(): array
{
    for ($i = 0; $i < 5; $i++) {
        $array[] = (int) rand(1, 10);
    }
    return $array;
}

function cube($number) : int
{
    return pow($number, 3);
}

function numbersCubed(array $numbers) : array
{

   $arrayCubed =  array_map("cube", $numbers);
   return $arrayCubed;
}



?>