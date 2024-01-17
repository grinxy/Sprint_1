<?php

declare(strict_types=1);

require_once "Animal.php";
require_once "Sound.php";

class Dog extends Animal implements Sound
{
    public function makeSound(): string
    {
        return "Woof, woof!";
    }
}

?>