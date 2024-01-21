<?php

declare(strict_types=1);
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
Si, és el mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels conceptes del tema POO2.*/

include_once "Triangle.php";
include_once "Rectangle.php";
include_once "Circle.php";

$triangle_1 = new Triangle(5, 12);
$rectangle_1 = new Rectangle(15, 7);
$circle_1 = new Circle (5);

echo "The triangle's area is: " . number_format($triangle_1->calculateArea(), 2) . "<br/>   
 The rectangle's area is: " . number_format($rectangle_1->calculateArea(), 2) . "<br/>
 The circle's area is: " . number_format($circle_1->calculateArea(), 2) . "<br/>";  //number_format(number,decimals,decimalpoint,separator);

?>
