<?php

declare(strict_types=1);

//EJERECICIO 1
echo "***EJERCICIO 1: <br/><br/>";
$numUser = 20;
$height = 1.75;
$name = "Peter";
$approved = true;

echo $numUser . "<br/>" . $height . "<br/>" . $name . "<br/>" . $approved;

define("MY_NAME", "Monica");
echo "<h1>" . MY_NAME . "</h1><br/>";

//EJERECICIO 2
echo "<br/>***EJERCICIO 2: <br/><br/>";
$salutation = "Hello, World!";

echo $salutation . "<br/>";

echo strtoupper($salutation) . "<br/>";
echo strlen($salutation) . "<br/>";
echo strrev($salutation) . "<br/>";

$course = "This is the PHP course";
echo $salutation . " " . $course . ".<br/><br/>";


//EJERECICIO 3
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
 