<?php

declare(strict_types=1);

//EJERCICIO 1:
//Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.

echo "<br>**EJERCICIO 1:<br/>";
$numeros = [5, 10, 15, 20, 25];

echo $numeros[0] . "<br/>";
echo $numeros[1] . "<br/>";
echo $numeros[2] . "<br/>";
echo $numeros[4] . "<br/>";


//EJERCICIO 2
/*Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). 
Mostra per última vegada la mida de l’array.*/


echo "<br>**EJERCICIO 2:<br/>";

$X = array(10, 20, 30, 40, 50, 60);


echo "The Array has " . count($X) . " elements.<br/>";
unset($X[2]);
var_dump(array_values($X));
echo "<br/>The Array has now " . count($X) . " elements.<br/>";

//reorganizar indices creando nuevo array
/*foreach($X as $num){
    $newArray[] = $num;
}*/



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
} else if (!containsChar($words, $character)) {
  echo "All words contain the '$character' character: FALSE <br/>";
}
//prueba con a
$character = 'a';
if (containsChar($words, $character)) {
  echo "All words contain the '$character' character: TRUE <br/>";
} else if (!containsChar($words, $character)) {
  echo "All words contain the '$character' character: FALSE <br/>";
}

function containsChar($words, $character): bool
{
  foreach ($words as $word) {
    if (strpos($word, $character) == true) {
      $output = true;
    } else {
      $output = false;
    }
  }
  return $output;
}


//EJERCICIO 4
/*Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:
nom
edat
email
menjar favorit*/
echo "<br>**EJERCICIO 4:<br/>";

$user =[
  "Name" => "Monica",
  "Age" => 35,
  "Email" => "monica@gmail.com",
  "Favorite food" => "Cheese"
];
print_r($user);
echo "<br/>";

//acceder a un elemento a traves de la key
echo $user["Name"]."<br/>";

//modificar value de una key
$user["Favorite food"] = "Spaghetti";
print_r($user);
echo "<br/>";

//visualizar info ordenada
foreach($user as $key=> $value){
  echo "$key: $value <br/>";
}

/*

