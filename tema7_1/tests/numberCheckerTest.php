<?php

declare(strict_types=1);
namespace Monicaestebanponce\tests;

use PHPUnit\Framework\TestCase;
use Monicaestebanponce\Tema7_1\NumberChecker;


class numberCheckerTest extends TestCase
{

    public function testIsEven(): void
    {
        // Arrange -> crear una instancia con un true y otra con un false respecto a lo que quiero testear

        $evenNumberChecker = new NumberChecker(6);
        $oddNumberChecker = new NumberChecker(7);

        // Act -> llamamos al test en ambas instancias
        $isEven = $evenNumberChecker->isEven();
        $isNotEven = $oddNumberChecker->isEven();

        // Assert -> con aserciones validamos que el resultado es el esperado.
        $this->assertTrue($isEven);
        $this->assertNotTrue($isNotEven);
    }

    public function testIsPositive(): void
    {
        //Arrange
        $positiveNumberChecker = new NumberChecker(1);
        $negativeNumberChecker = new NumberChecker(-1);

        //Act
        $isPositive = $positiveNumberChecker->isPositive();
        $isNegative = $negativeNumberChecker->isPositive();

        //Assert
        $this->assertTrue($isPositive);
        $this->assertNotTrue($isNegative);
    }
}
?>