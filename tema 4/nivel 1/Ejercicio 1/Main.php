<?php
declare(stict_types=1);

require_once "Employee.php";


$employee_1 = new Employee();
$employee_1->initialize("Mary", 10000);
echo $employee_1->taxesEmployee() . "<br/>";

$employee_2 = new Employee();
$employee_2->initialize("Susan", 5000);
echo $employee_2->taxesEmployee() . "<br/>";


?>