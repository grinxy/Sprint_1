<?php
declare(strict_types=1);
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



?>