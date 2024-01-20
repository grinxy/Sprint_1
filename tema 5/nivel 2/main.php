<?php

declare(strict_types=1);
/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
Si, és el mateix exercici que a POO1, però aquí necessitem que ho resolguis aplicant algun dels conceptes del tema POO2.*/

include_once "Triangle.php";
include_once "Rectangle.php";

$triangle_1 = new Triangle(5, 8);
$rectangle_1 = new Rectangle(10, 3);

echo "The triangle's area is: " . $triangle_1->calculateArea() . "<br/>
      The rectangle's area is: " . $rectangle_1->calculateArea() . "<br/>";

?>
