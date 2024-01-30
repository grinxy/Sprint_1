<?php declare(strict_types= 1);
require "Turbo.php";

class Car{

  use Turbo;
    protected string $marca;
    protected string $plate;
    protected string $fuelType;
    protected int $maxSpeed;


    public function __construct(string $marca, string $plate, string $fuelType, int $maxSpeed){
        $this->marca = $marca;
        $this->plate = $plate;
        $this->fuelType = $fuelType;
        $this->maxSpeed = $maxSpeed;
    }      
}
?>