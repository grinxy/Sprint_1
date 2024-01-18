<?php

declare(strict_types=1);


class PokerDice
{
    private $diceFaces = ["As", "K", "Q", "J", "7", "8"];
    private $lastThrow;
    private $numThrow = 0;


    public function getFace(): array
    {
        return $this->diceFaces;
    }

    public function throw(): string
    {
        $throw = $this->diceFaces[array_rand($this->diceFaces, 1)];
        $this->lastThrow = $throw;
        $this->numThrow++;
        return $throw;
    }
    public function shapeName(): string
    {
        return $this->lastThrow;
    }

    public function diceTotalThrows(): int
    {
        return $this->numThrow;
    }
}
