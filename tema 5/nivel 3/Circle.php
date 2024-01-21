<?php
declare(strict_types=1);

require_once "Shape.php";
require_once "Calculos.php";


class Circle extends Shape implements Calculos{

    protected $radius;

    public function __construct(int $width)
    {
        parent::__construct($width);
        $this->radius = $this->width/2;
    }


    public function calculateArea() : float
    {
        $area = M_PI * pow($this->radius, 2);
        return $area;
    }


}
?>