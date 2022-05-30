<?php
namespace App\Service;

use DivisionByZeroError;

// use Brick\Math\Exception\DivisionByZeroException;

class Division implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        if($secondNumber == 0) throw new DivisionByZeroError();
        
        return $firstNumber + $secondNumber;
    }
}