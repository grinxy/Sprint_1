<?php
declare(strict_types=1);

require "Shape.php";

class Triangle extends Shape

{
    
    public function calculateArea() : float
    {
       return ($this->width * $this->height)/2;
        
    }

}

?>