<?php

declare(strict_types=1);
// EJERCICIO 3:
/*Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true 
si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.
Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/

echo "<br>**EJERCICIO 3:<br/>";

$words = ["table", "chair", "blanket", "sofa"];

//prueba con l
$character = 'l';
if (containsChar($words, $character)) {
  echo "All words contain the '$character' character: TRUE <br/>";
} else {
  echo "All words contain the '$character' character: FALSE <br/>";
}
//prueba con a
$character = 'a';
if (containsChar($words, $character)) {
  echo "All words contain the '$character' character: TRUE <br/>";
} else {
  echo "All words contain the '$character' character: FALSE <br/>";
}

function containsChar($words, $character): bool
{
  /*
  $output = true;

    foreach ($words as $word) {
        if (strpos($word, $character)===false) {   // comparación estricta para evitar que si la ocurrencia esté en posición 0, no lo tome como un "false" + validación en negativo ya que strpos devuelve posicion (int) o false si no encuentra. Pero no devolverá "true".
          $output = false;
            
      }
    }
    return $output;
*/
//Corrección: bucle while en vez de foreach para no reccorrer todos las letras en caso de coincidencia
$output = true;
$i = 0;

while($i < count($words) && $output){

    if(strpos($words[$i], $character)===false){
        $output = false;
    }
    $i++;
}
return $output;

/*
---> Opción con str_contains, devuelve un true/false y no una posición por lo que evitas problema de comparar "true" con un integer.
  
    while($i < count($words) && $output){

        if(!str_contains($words[$i], $character)){
            $output = false;
        }
        $i++;
    }
  return $output;
  */

}

?>