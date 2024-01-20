<?php

declare(strict_types=1);


class PokerDice
{
    private const DICE_FACES = ["As", "K", "Q", "J", "7", "8"];   //constante no variable. Todos los dados tienen los mismos lados SIEMPRE.
    private $lastThrow;
    private static $totalThrows = 0;   //static --> todas las instancias acceden y al pertenecer a la clase no a los objetos, mantiene su valor entre diferentes llamadas.


    public function getDiceFaces(): array
    {
        return self::DICE_FACES;
    }

    public function throw(): string
    {
        $throw = self::DICE_FACES[array_rand(self::DICE_FACES, 1)];
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
