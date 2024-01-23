<?php
declare(strict_types=1);


$name = $_POST["name"]; // debe ser el mismo "name" definido en el form. El "id" se usará en JS o CSS
$surname = $_POST["surname"];
$age = $_POST["age"];
$email = empty($_POST["email"])? "Not provided" : $_POST["email"];  //email no es campo requerido. Validar si hay datos introducidos

echo "You succesfully enrolled with the following info: <br/> Name: $name <br/> Surname: $surname <br/> Age: $age <br/> Email: $email <br/>";

?>