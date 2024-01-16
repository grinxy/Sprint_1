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



    public function initialize($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function printEmployee() : string
    {
        $taxes = ($this->salary > 6000)? " has to pay taxes.":" does not have to pay taxes.";
        return "Employee $this->name $taxes";

   
    }
}


//ejemplos uso


$employee_1 = new Employee();
$employee_1->initialize("Mary", 10000);
echo $employee_1->printEmployee() . "<br/>";

$employee_2 = new Employee();
$employee_2->initialize("Susan", 5000);
echo $employee_2->printEmployee() . "<br/>";

?>
