<?php

declare(strict_types=1);


abstract class Shape
{

    protected $width;  
    protected $height;


    public function __construct(int $width, int $height)
    {
        $this->width = $width;
        $this->height = $height;
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