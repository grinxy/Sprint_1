<?php

declare(strict_types=1);
include_once "Calculos.php";
require_once "Shape.php";

class Rectangle extends Shape implements Calculos
{

    public function calculateArea() : float
    {
       return $this->width * $this->height;
        
    }

}
?>
