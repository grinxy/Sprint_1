<?php

declare(strict_types=1);

//EJERCICIO 1
/*Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla.
Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.*/

echo "***EJERCICIO 1: <br/><br/>";
$numUser = 20;
$height = 1.75;
$name = "Peter";
$approved = true;

echo $numUser . "<br/>" . $height . "<br/>" . $name . "<br/>" . $approved;

define("MY_NAME", "Monica");
echo "<h1>" . MY_NAME . "</h1><br/>";

//EJERCICIO 2
/*Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:

Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.*/

echo "<br/>***EJERCICIO 2: <br/><br/>";
$salutation = "Hello, World!";

echo $salutation . "<br/>";

echo strtoupper($salutation) . "<br/>";
echo strlen($salutation) . "<br/>";
echo strrev($salutation) . "<br/>";

$course = "This is the PHP course";
echo $salutation . " " . $course . ".<br/><br/>";


//EJERCICIO 3
/*a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:
El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.
Per N i M realitzaràs el mateix.
Per a totes les variables (X, Y, N, M):
El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables.
b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.*/

echo "<br/>***EJERCICIO 3: <br/><br/>";

$x = 2;
$y = 5;
$n = 1.69;
$m = 4.99;

echo "variable X = " . $x . " and variable Y = " . $y . "<br/>";
echo $x . " + " . $y . " = " . ($x + $y) . "<br/>";
echo $x . " - " . $y . " = " . ($x - $y) . "<br/>";
echo $x . " * " . $y . " = " . ($x * $y) . "<br/>";
echo $x . " % " . $y . " = " . ($x % $y) . "<br/><br/>";

echo "variable N = " . $n . " and variable M = " . $m . "<br/>";
echo $n . " + " . $m . " = " . ($n + $m) . "<br/>";
echo $n . " - " . $m . " = " . ($n - $m) . "<br/>";
echo $n . " * " . $m . " = " . ($n * $m) . "<br/>";
echo $n . " % " . $m . " = " . ($n % $m) . "<br/><br/>";

echo "double of variable X is " . ($x * 2) . "<br/>
     of variable Y is " . ($y * 2) . "<br/>
     of variable N is " . ($n * 2) . "<br/>
     and of variable M is " . ($m * 2) . "<br/><br/>";


$num1 = 7;
$num2 = 8;
$operator = "/";
echo calculator($num1, $num2, $operator) . "<br/>";

$num1 = 7;
$num2 = 8;
$operator = "-";
echo calculator($num1, $num2, $operator) . "<br/>";

$num1 = 7;
$num2 = 8;
$operator = "*";
echo calculator($num1, $num2, $operator) . "<br/>";

$num1 = 7;
$num2 = 8;
$operator = "+";
echo calculator($num1, $num2, $operator) . "<br/>";

function calculator(int $num1, int $num2, string $operator): string
{
    $output = "";
    switch ($operator) {
        case "+":
            $output = $num1 . " + " . $num2 . " = " . ($num1 + $num2);
            break;
        case "-":
            $output = $num1 . " - " . $num2 . " = " . ($num1 - $num2);
            break;
        case "*":
            $output = $num1 . " * " . $num2 . " = " . ($num1 * $num2);
            break;
        case "/":
            $output = $num1 . " / " . $num2 . " = " . ($num1 / $num2);
            break;
        default:
            $output = "I cannot calculate that.";
    }
    return $output;
}

//EJERCICIO 4  
/*Fes un programa que implementi una funció on es compti fins a un nombre determinat. 
Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. 
A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). 
El compte s’ha de mostrar per pantalla pas per pas.*/

echo "<br/>***EJERCICIO 4: <br/><br/>";

$numMax = 25;
$multiple = 3;

echo countTo($multiple, $numMax). "<br/>";
echo countTo($multiple) . "<br/>";

function countTo(int $multiple, int $numMax = 10): string
{
    $output = "";
    for ($i = 0; $i <= $numMax; $i += $multiple) {

        $punctuation = (($i + $multiple) <= $numMax) ? ", " : ".";
        $output .= $i . $punctuation;
    }
    return $output;
}

//EJERCICIO 5
/*Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà.*/

echo "<br/>***EJERCICIO 5: <br/><br/>";

$nota1 = 5.6;
$nota2 = 2.8;
$nota3 = 7.2;
$nota4 = 4;

echo "El estudiante con una nota de " . $nota1 . " tiene el nivel de: " . grado($nota1) . ".<br/>" .
"El estudiante con una nota de " . $nota2 . " tiene el nivel de: " . grado($nota2) . ".<br/>" .
"El estudiante con una nota de " . $nota3 . " tiene el nivel de: " . grado($nota3) . ".<br/>" .
"El estudiante con una nota de " . $nota4 . " tiene el nivel de: " . grado($nota4) . ".<br/>";


function grado($nota): string
{
    if($nota >= 6.0){
        $output = "Primera División";
    }else if(($nota >= 4.5) && ($nota <= 5.9)){
        $output = "Segunda División";
    }else if(($nota >= 3.3) && ($nota <= 4.4)){
        $output = "Tercera División";
    }else if($nota < 3.3){
        $output = "Reprobado";
    }   

return $output;
} 

//EJERCICIO 6
/*Charlie em va mossegar el dit! Charlie et mossegarà el dit exactament el 50% del temps.

Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.*/

echo "<br/>***EJERCICIO 6: <br/><br/>";

if (isBitten()){
    echo "Charlie bit my finger.<br/>";
}else {
    echo "Charlie did not bit me.<br/>";
}
function isBitten() : bool
{
    $randomNum = rand(1,100);
    return $randomNum > 50;
}

?>  
 