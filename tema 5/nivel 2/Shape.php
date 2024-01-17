<?php

declare(strict_types=1);


abstract class Shape
{

    private $width;  
    private $height;


    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    
}

?>