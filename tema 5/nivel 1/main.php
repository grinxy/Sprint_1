<?php

declare(strict_types=1);

include_once "Sound.php";
include_once "Cat.php";
include_once "Dog.php";

$cat_1 = new Cat("Garfield");
$dog_1 = new Dog("Beethoven");


echo "The dog " . $dog_1->getName() . " does " . $dog_1->makeSound() . "<br/> The cat " . $cat_1->getName() . " does " . $cat_1->makeSound();
?>
