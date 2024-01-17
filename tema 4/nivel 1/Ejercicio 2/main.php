<?php

declare(strict_types=1);

//no "require Shape" (abstractas no se instancian!)
include "Triangle.php";
include "Rectangle.php";

$triangle_1 = new Triangle(5, 8);
$rectangle_1 = new Rectangle(10, 3);

echo "The triangle's area is: " . $triangle_1->calculateArea() . "<br/>
      The rectangle's area is: " . $rectangle_1->calculateArea() . "<br/>";

?>
