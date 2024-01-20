<?php

declare(strict_types=1);



//EJERCICIO 1
/*Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos 
(si el sou supera 6000, paga impostos).*/


class Employee
{

    private $name;
    private $salary;

    public function initialize(string $name, int $salary) : void
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function taxesEmployee() : string
    {
       
        $taxes = ($this->salary > 6000)? " has to pay taxes.":" does not have to pay taxes.";
        return "Employee $this->name $taxes";
    }
}

?>
