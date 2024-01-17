<?php

declare(strict_types=1);

class Rectangle extends Shape
{

    public function calculateArea() : float
    {
       return parent::getWidth() * parent::getHeight();
        
    }

}
?>
