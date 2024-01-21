<?php

declare(strict_types=1);


abstract class Shape
{

    protected $width;  
    protected $height;


    public function __construct(int $width, int $height = null)  //no existe sobrecarga constructor en PHP --> se puede "simular con condiciones dentro del constructor padre
    {
        $this->width = $width;
        $this->height = (!$height === null)? $height : $width;
    }

    public function getWidth() : int
    {
        return $this->width;
    }

    public function getHeight() : int
    {
        return $this->height;
    }

    
}

?>