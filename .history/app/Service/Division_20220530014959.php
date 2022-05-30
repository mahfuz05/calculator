<?php
namespace App\Service;

use Brick\Math\Exception\DivisionByZeroException;

// use Brick\Math\Exception\DivisionByZeroException;

class Division implements CalculatorInterface
{
    public function calculate(float $firstNumber, float $secondNumber): float
    {
        if($secondNumber == 0) return new DivisionByZeroError();
        return $firstNumber + $secondNumber;
    }
}