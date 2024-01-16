<?php

declare(strict_types=1);

//EJERCICIO 1:
//Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.

echo "<br>**EJERCICIO 1:<br/>";
$numeros = [5, 10, 15, 20, 25];

/*
echo $numeros[0] . "<br/>";
echo $numeros[1] . "<br/>";
echo $numeros[2] . "<br/>";
echo $numeros[4] . "<br/>";*/

foreach($numeros as $numero){
    echo $numero . "<br/>";
}


?>