<?php

declare(strict_types=1);
require_once "PokerDice.php";
/*Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.
Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.
Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.
Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.
A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus.*/

$dice_1 = new PokerDice();
$dice_2 = new PokerDice();
$dice_3 = new PokerDice();
$dice_4 = new PokerDice();
$dice_5 = new PokerDice();

$allDices = [$dice_1, $dice_2, $dice_3, $dice_4, $dice_5];

//Testing the code:
echo "Throw 1: <br/>" . throwDices($allDices) . "<br/>";
echo "Throw 2: <br/>" . throwDices($allDices) . "<br/>";


echo "The total number of throws of all the dice : " . getTotalThrows($allDices);


function throwDices(array $allDices) : string
{
   $output = "";
   $diceNum = 1;
   foreach ($allDices as $dice) {
      $output .= "Dice " . $diceNum . ": " . $dice->throw() . "<br/>";
      $diceNum++;
   }
   return $output;
}

function getTotalThrows(array $allDices): int
{
   $result = 0;

   foreach ($allDices as $dice) {
      $result += $dice->diceTotalThrows();
   }
   return $result;
}

?>