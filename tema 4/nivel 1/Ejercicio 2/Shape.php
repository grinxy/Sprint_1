<?php

declare(strict_types=1);

/*Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. 
Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().*/

abstract class Shape
{

    private $width;  //si declaro como protected, las sublcases tb puedan acceder sin necesidad de getters e invocar al parent en variables --> mejor practica cual?
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

    abstract public function calculateArea() : float;
    
}

?>