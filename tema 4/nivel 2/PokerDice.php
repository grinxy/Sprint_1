<?php

declare(strict_types=1);


class PokerDice
{
    private static $diceFaces = ["As", "K", "Q", "J", "7", "8"];   //como constante no variable, aplica a cada objeto. Como static es compartida por todos los objetos de la clase.
    private $lastThrow;
    private static $totalThrows = 0;   //static --> todas las instancias acceden y al pertenecer a la clase no a los objetos, mantiene su valor entre diferentes llamadas.


    public function getDiceFaces(): array
    {
        return static::$diceFaces;
    }

    public function throw(): string
    {
        $throw = static::$diceFaces[array_rand(static::$diceFaces, 1)];
        $this->lastThrow = $throw;
        self::$totalThrows++;
        return $throw;
    }
    public function shapeName(): string
    {
        return $this->lastThrow;
    }

    public static function diceTotalThrows(): int    
    {
        return static::$totalThrows;
    }
}
