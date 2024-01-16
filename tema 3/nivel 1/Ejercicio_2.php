<?php

declare(strict_types=1);


//EJERCICIO 2
/*Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
Mostra per última vegada la mida de l’array.*/


echo " **EJERCICIO 2:<br/>";

$X = array(10, 20, 30, 40, 50, 60);


echo "The Array has " . count($X) . " elements.<br/>";
unset($X[2]);
var_dump(array_values($X));
echo "<br/>The Array has now " . count($X) . " elements.<br/>";

//reorganizar indices creando nuevo array
/*foreach($X as $num){
    $newArray[] = $num;
}*/
?>