<?php

declare(strict_types=1);
namespace Monicaestebanponce\tests;

use PHPUnit\Framework\TestCase;
use Monicaestebanponce\Tema7_2\NumberChecker;


class numberCheckerTest extends TestCase
{

    /**
     * @dataProvider evenNumbersProvider
     */
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

    /**
     * @dataProvider positiveNumbersProvider
     */
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


   public static function evenNumbersProvider() : array   //dataProviders siempre en static
   {
    return [
        //[numero que se pone en new NumBerChecker($), valor esperado tras aplicar $->isEven()]
        [1, false],
        [5, false],
        [10, true],
        [3, false],
        [12, true]
    ];
   }

   public static function positiveNumbersProvider() : array
   {
    return [
        [-1, false],
        [-3, false],
        [10, true],
        [3, true],
        [20, true]
    ];
   }
}
?>